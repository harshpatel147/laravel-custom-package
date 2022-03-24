<?php

use Illuminate\Support\Facades\Route;
use Smiley\TestCustompackage\Test;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet/{name}', function($isName) {
    $oGreetr = new Test();
    return $oGreetr->greet($isName);
});