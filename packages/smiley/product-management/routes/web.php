<?php

use Illuminate\Support\Facades\Route;

Route::get('test', [\Smiley\ProductManagement\Http\Controllers\ProductManagementController::class, 'index']);