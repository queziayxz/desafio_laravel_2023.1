<?php

namespace App\Http\Controllers;

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
        Mail::to($request->user())->send(new Evento($request->user(),$request->content));
    }
}
