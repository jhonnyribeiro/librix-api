<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;

class InvalidAuthenticationException extends Exception
{
    use RenderToJson;

    protected $message = 'Invalid credentials';
    protected $code = 401;

}
