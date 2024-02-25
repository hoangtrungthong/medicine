<?php

namespace App\Http\Controllers;

use App\Traits\ResponseAPI;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ResponseAPI;

    public function successResponse($data = [], $message = 'Success')
    {
        return $this->addData($data)
            ->setMessage($message)
            ->getResponseSuccess();
    }

    public function errorResponse($code = Response::HTTP_BAD_REQUEST, $responseCode = Response::HTTP_BAD_REQUEST, $data = [], $message = 'Error')
    {
        return $this->addData($data)
            ->setMessage($message)
            ->setHttpStatusCode($code)
            ->setMessageCode($responseCode)
            ->getResponseError();
    }
}
