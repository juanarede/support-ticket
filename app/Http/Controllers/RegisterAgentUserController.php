<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterAgentUserController extends Controller
{
    public function register()
    {
        return view('auth.registerAgentUser');
    }
}
