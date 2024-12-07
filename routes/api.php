<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ItemController;

Route::apiResource('items', ItemController::class);
Route::apiResource('clients', ClientController::class);
