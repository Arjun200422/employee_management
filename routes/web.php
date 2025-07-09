<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('employees.index');
    }
    return view('auth.login-register'); 
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('employees.index');
    })->name('dashboard');
    Route::resource('employees', EmployeeController::class);
});

require __DIR__.'/auth.php';