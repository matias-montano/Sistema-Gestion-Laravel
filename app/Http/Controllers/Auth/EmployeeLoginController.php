<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\Auth\AuthenticationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\Auth\EmployeeLoginRequest;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class EmployeeLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:employee')->except('logout');
    }

    public function showLoginForm(): View
    {
        return view('auth.employee-login');
    }

    public function login(EmployeeLoginRequest $request): RedirectResponse
    {
        try {
            if (
                Auth::guard('employee')->attempt(
                    ['username' => $request->username, 'password' => $request->password],
                    (bool) $request->remember
                )
            ) {
                // If successful, then redirect to their intended location
                return redirect()->intended(route('main'));
            }

            // Si fallan las credenciales, lanzamos una excepción personalizada.
            throw new AuthenticationException('The provided credentials do not match our records.');
        } catch (AuthenticationException $e) {
            return redirect()->route('employee.login')
                ->withInput($request->only('username', 'remember'))
                ->withErrors([
                    'username' => $e->getMessage(),
                ]);
        } catch (Exception $e) {
            // Manejar cualquier excepción inesperada
            return redirect()->route('employee.login')
                ->withInput($request->only('username', 'remember'))
                ->withErrors([
                    'error' => 'An unexpected error occurred. Please try again later.',
                ]);
        }
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('employee')->logout();
        return redirect('/');
    }
}
