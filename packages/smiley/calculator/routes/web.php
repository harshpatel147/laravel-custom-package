<?php
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function(){

	Route::get('calculator', function(){
		return view('calculator::app');
		echo 'Hello from the calculator package!';
	});
	
	Route::get('calculator/add/{a}/{b}', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'add']);
	Route::get('calculator/sub/{a}/{b}', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'sub']);
	Route::get('calculator/mul/{a}/{b}', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'mul']);
	Route::get('calculator/div/{a}/{b}', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'div']);

	Route::get('calculator/add/', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'add'])->name('calculator::add');
	Route::get('calculator/sub/', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'sub'])->name('calculator::sub');
	Route::get('calculator/mul/', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'mul'])->name('calculator::mul');
	Route::get('calculator/div/', [\Smiley\Calculator\Http\Controllers\CalculatorController::class, 'div'])->name('calculator::div');
});