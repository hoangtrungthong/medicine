<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\Log;

trait Logger
{
    protected $exception;
    protected $moduleName;

    public function setException(Exception $e)
    {
        $this->exception = $e;

        return $this;
    }

    public function setLogModuleName(string $moduleName)
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    private function getExceptionMessage(): string
    {
        return 'Message: ' . $this->exception->getMessage() . '. file: ' . $this->exception->getFile() . '. line: ' . $this->exception->getLine();
    }

    private function getLogMessage(): string
    {
        $string = $this->moduleName;

        if ($this->exception instanceof Exception) {
            $string .= '. ' . $this->getExceptionMessage();
        }

        return $string;
    }

    public function logError()
    {
        Log::error($this->getLogMessage());
    }
}
