<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/employee', [EmployeeController::class, 'index'])->middleware('auth');
Route::get('/employee/create', [EmployeeController::class, 'create'])->middleware('auth');
Route::get('/employee/{id}', [EmployeeController::class, 'show'])->middleware('auth');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->middleware('auth');
Route::post('/employee', [EmployeeController::class, 'store'])->middleware('auth');
Route::put('/employee', [EmployeeController::class, 'update'])->middleware('auth');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->middleware('auth');

