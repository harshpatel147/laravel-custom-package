<?php

namespace Smiley\Calculator\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Smiley\Calculator\Http\Requests\CalculatorDivPostRequest;

class CalculatorController extends Controller
{
    public function add(CalculatorDivPostRequest $request)
    {
        $validated = $request->validated();
        // print_r($validated);
        $result = $request->a + $request->b;
        return view('calculator::app', compact('result'));
    }

    public function sub(CalculatorDivPostRequest $request)
    {
        $result = $request->a - $request->b;
        return view('calculator::app', compact('result'));
    }

    public function mul(CalculatorDivPostRequest $request)
    {
        $result = $request->a * $request->b;
        return view('calculator::app', compact('result'));
    }

    public function div(CalculatorDivPostRequest $request)
    {
        // $validated = $request->validated();
        // print_r($validated);
        $result = $request->a / $request->b;
        return view('calculator::app', compact('result'));
    }
}
