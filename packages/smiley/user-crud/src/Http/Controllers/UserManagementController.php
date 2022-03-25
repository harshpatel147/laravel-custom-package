<?php

namespace Smiley\UserCrud\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Smiley\UserCrud\Models\User;

class UserManagementController extends Controller
{
    public function index()
    {
        echo User::first();
        echo 'Hello from the user crud package controller!';
    }
}