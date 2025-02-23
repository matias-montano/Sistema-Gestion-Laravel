<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $employeeIdParam = $this->route('employee');

        if (!is_string($employeeIdParam)) {
            $employeeIdParam = '';
        }

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees,email,' . $employeeIdParam,
            'username' => 'required|string|max:255|unique:employees,username,' . $employeeIdParam,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|string|in:admin,vendor',
        ];
    }
}
