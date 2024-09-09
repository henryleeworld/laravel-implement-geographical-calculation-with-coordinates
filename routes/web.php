<?php

use App\Http\Controllers\GeographyController;
use Illuminate\Support\Facades\Route;

Route::get('geography/calculate/', [GeographyController::class, 'calculate']);
