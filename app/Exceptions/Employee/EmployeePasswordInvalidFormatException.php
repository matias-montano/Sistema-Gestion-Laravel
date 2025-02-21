<?php

namespace App\Exceptions\Employee;

use Exception;

class EmployeePasswordInvalidFormatException extends Exception
{
    /**
     * The HTTP status code.
     *
     * @var int
     */
    protected $status = 400;

    /**
     * The error code.
     *
     * @var string|null
     */
    protected $errorCode = 'employee_password_invalid_format';

    /**
     * The error message.
     *
     * @var string|null
     */
    protected $message = 'The provided password format is invalid.';

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
