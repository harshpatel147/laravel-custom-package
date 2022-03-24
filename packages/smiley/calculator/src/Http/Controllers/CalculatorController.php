<?php

namespace Smiley\Calculator\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Smiley\Calculator\Http\Requests\CalculatorDivPostRequest;

class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;
        return view('calculator::app', compact('result'));
    }

    public function sub($a, $b)
    {
        $result = $a - $b;
        return view('calculator::app', compact('result'));
    }

    public function mul($a, $b)
    {
        $result = $a * $b;
        return view('calculator::app', compact('result'));
    }

    public function div(CalculatorDivPostRequest $request, $a, $b)
    {
        $validated = $request->validated();
        print_r($validated);
        $result = $a / $b;
        return view('calculator::app', compact('result'));
    }
}
