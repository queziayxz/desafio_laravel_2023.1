<?php

namespace App\Http\Controllers;

use App\Events\NewEvent;
use App\Events\NovoEvento;
use App\Http\Controllers\Controller;
use App\Mail\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('admin.email.create');
    }

    public function store(Request $request)
    {

        event(new NewEvent($request->content));
        
        return redirect()->route('user.index');
    }
}
