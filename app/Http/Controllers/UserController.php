<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // dashboard user biasa
    public function index()
    {
        return view('user.dashboard');
    }
}
