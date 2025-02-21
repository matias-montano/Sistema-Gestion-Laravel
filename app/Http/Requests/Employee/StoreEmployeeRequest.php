<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'username' => 'required|string|max:255|unique:employees',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,vendor',
        ];
    }

}
