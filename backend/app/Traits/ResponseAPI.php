<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\JsonResponse;

trait ResponseAPI
{
    protected $http_status_code = 200;
    protected $success = true;
    protected $responseCode = 200;
    protected $responseMessage = 'Success';
    protected $data = [];
    protected $headers = [];

    /**
     * @var Exception
     */
    protected $exception;

    public function setHeaders(array $headers)
    {
        foreach ($headers as $key => $value) {
            $this->headers[$key] = $value;
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function addData(array $data, array ...$other_data)
    {
        foreach ($data as $key => $value) {
            $this->data[$key] = $value;
        }
        foreach ($other_data as $other_datum) {
            foreach ($other_datum as $key => $value) {
                $this->data[$key] = $value;
            }
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function setHttpStatusCode(int $code)
    {
        $this->http_status_code = $code;

        return $this;
    }

    /**
     * @return $this
     */
    public function setMessageCode($code)
    {
        $this->responseCode = $code;

        return $this;
    }

    public function setMessage(string $message)
    {
        $this->responseMessage = $message;

        return $this;
    }

    public function setException(Exception $e)
    {
        $this->exception = $e;

        return $this;
    }

    public function getResponseSuccess(): JsonResponse
    {
        return $this->getResponse(true);
    }

    public function getResponseError(): JsonResponse
    {
        return $this->getResponse(false);
    }

    private function getResponse(bool $success): JsonResponse
    {
        $data = [
            'success' => $success,
            'code' => $this->responseCode,
            'message' => (string) $this->responseMessage,
        ];
        if (is_array($this->data) && count($this->data) > 0) {
            $data['data'] = $this->data;
        }
        if (true === env('APP_DEBUG') && 'NULL' != gettype($this->exception)) {
            $data['debug'] = [
                'message' => (string) $this->exception->getMessage(),
                'trace' => (string) $this->exception->getTraceAsString(),
                'code' => $this->exception->getCode(),
                'file' => $this->exception->getFile(),
                'line' => $this->exception->getLine(),
            ];
        }

        return response()->json($data, $this->http_status_code, $this->headers);
    }
}
