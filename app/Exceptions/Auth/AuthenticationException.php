<?php

namespace App\Exceptions\Auth;

use Exception;

class AuthenticationException extends Exception
{
    /**
     * The HTTP status code.
     *
     * @var int
     */
    protected $status = 401;

    /**
     * The error code.
     *
     * @var string|null
     */
    protected $errorCode = 'authentication_error';

    /**
     * The error message.
     *
     * @var string|null
     */
    protected $message = 'The provided credentials do not match our records.';

    /**
     * Get the HTTP status code.
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->status;
    }

    /**
     * Get the error code.
     *
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
}
