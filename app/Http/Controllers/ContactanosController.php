<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index (){
        return view('contact');

    }

    public function store (Request $request){
        $correo = new ContactanosMailable($request->all());
        Mail::to('sdq.guallichico@yavirac.edu.ec')->send($correo);
        return redirect('/contact');
    }
}
