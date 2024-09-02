<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeesController::class, 'topSovTripEmployees']);
