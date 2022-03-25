<?php

use Illuminate\Support\Facades\Route;

/* Route::get(config('usercrud.urls.user-list', 'user'), function(){
    echo 'Hello from the user crud package!';
}); */
Route::get(config('usercrud.urls.user-list', 'user'), [\Smiley\UserCrud\Http\Controllers\UserManagementController::class, 'index']);