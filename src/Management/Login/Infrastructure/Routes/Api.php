<?php

use Illuminate\Support\Facades\Route;
use Src\Management\Login\Infrastructure\Controllers\LoginAuthController;

// use Src\Management\Login\Infrastructure\Controllers\LoginAuthController;

Route::post('/', LoginAuthController::class); // Add new post route here