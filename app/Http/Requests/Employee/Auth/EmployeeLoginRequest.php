<?php

namespace App\Http\Requests\Employee\Auth;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeLoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'password' => 'required|min:6',
        ];
    }
}
