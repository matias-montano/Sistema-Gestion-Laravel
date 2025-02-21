<?php

namespace App\Http\Controllers\Employee;

use App\Exceptions\Employee\EmployeePasswordInvalidFormatException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index(): View
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }


    public function create(): View
    {
        return view('employees.create');
    }


    public function store(StoreEmployeeRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        $passwordParam = $validatedData['password'];

        if (!is_string($passwordParam)) {
            throw new EmployeePasswordInvalidFormatException();
        }

        $validatedData['password'] = Hash::make($passwordParam);

        Employee::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }


    public function show(int $id): View
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }


    public function edit(int $id): View
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }


    public function update(UpdateEmployeeRequest $request, int $id): RedirectResponse
    {
        $employee = Employee::findOrFail($id);

        $validatedData = $request->validated();

        if (!empty($validatedData['password'])) {
            $passwordParam = $validatedData['password'];

            if (!is_string($passwordParam)) {
                throw new EmployeePasswordInvalidFormatException();
            }

            $validatedData['password'] = Hash::make($passwordParam);
        } else {
            unset($validatedData['password']);
        }

        $employee->update($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }


    public function destroy(int $id): RedirectResponse
    {
        $employee = Employee::findOrFail($id);

        $user = Auth::user();

        if ($user && $user->id == $employee->id) {
            return redirect()->route('employees.index')->with('error', 'You cannot delete your own account.');
        }

        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
