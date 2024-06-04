<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormTicketController extends Controller
{
    public function index()
    {
        return view('formTicket');
    }
}
