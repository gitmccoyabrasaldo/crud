
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'show'])->name('welcome');

// Authentication Login Routes
Route::post('/login', [AuthController::class, 'login'])->name('login');

//logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// index auth Route
Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth')->name('employees.index');
// Route::get('/employees', [EmployeeController::class, 'myView'])->middleware('auth')->name('employees.index');

// Employee Routes
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// view employee
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

// create employee
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// edit employee
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

// Delete employee
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

// update
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
