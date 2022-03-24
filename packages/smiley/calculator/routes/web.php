<?php
use Illuminate\Support\Facades\Route;

Route::get('calculator', function(){
	return view('calculator::errors.validation-error');
	echo 'Hello from the calculator package!';
});

Route::get('calculator/add/{a}/{b}', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'add']);
Route::get('calculator/sub/{a}/{b}', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'sub']);
Route::get('calculator/mul/{a}/{b}', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'mul']);
Route::get('calculator/div/{a}/{b}', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'div']);