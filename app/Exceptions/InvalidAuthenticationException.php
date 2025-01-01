<?php

namespace App\Exceptions;

use Exception;

class InvalidAuthenticationException extends Exception
{
    protected $message = 'Invalid credentials';

    protected $code = 401;

    public function render()
    {
        return response()->json(
            [
                'error' => class_basename($this),
                'message' => $this->message
            ],
            $this->getCode());
    }
}
