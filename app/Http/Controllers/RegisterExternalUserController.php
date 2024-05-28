<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterExternalUserController extends Controller
{
    public function register()
    {
        return view('auth.registerExternalUser');
    }
}
