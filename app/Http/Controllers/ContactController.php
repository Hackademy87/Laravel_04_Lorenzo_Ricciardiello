<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact (){
        return view('contatti');
    }

        public function newContact(Request $request){
            $titolo = $request->input('titolo');
            $regista = $request->input('regista');
            $trama = $request->input('trama');

       $contactMail = new ContactMail($titolo, $regista, $trama);

            Mail::to('cine@blog.it')->send($contactMail);
return redirect()->route('home')->with('massage','La mail è stata inviata con successo'); 

    }
    








}
