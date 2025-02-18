<?php

use App\Http\Controllers\Auth\EmployeeLoginController;
use App\Http\Controllers\Employee\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::guard('employee')->check()) {
        return redirect()->route('main');
    }
    return view('welcome');
});



// Route for employee login
Route::prefix('employee')->group(function () {
    Route::get('login', [EmployeeLoginController::class, 'showLoginForm'])->name('employee.login');
    Route::post('login', [EmployeeLoginController::class, 'login'])->name('employee.login.submit');
    Route::post('logout', [EmployeeLoginController::class, 'logout'])->name('employee.logout');
});

Route::middleware('auth:employee')->group(function () {
    Route::get('/main', function () {
        return view('main');
    })->name('main');

    Route::get('/profile', function () {
        return view('employees.my-profile');
    })->name('profile.show');

    Route::resource('employees', EmployeeController::class);
});
