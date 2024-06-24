<?php

use App\Http\Controllers\api\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/employee', [EmployeeController::class, 'index']);
