<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectCardTicketController extends Controller
{

    public function index()
    {
        return view('selectCardTicket');
    }
    public function getTicketURL($ticketId)
    {
        $ticketURL = route('formTicket');

        return response()->json(['redirectTo' => $ticketURL]);
    }
}
