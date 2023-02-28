<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Evento;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function create()
    {
        return view('admin.email.create');
    }

    public function store(Request $request)
    {
        event($request->content);
        
    }
}
