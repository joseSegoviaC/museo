<?php

namespace App\Http\Controllers;

use App\Classes\Client;
use Illuminate\Http\Request;
use App\Mail\ConsultaMailable;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $client = new Client($name, $email);
        $client->saveClient();

        return redirect()->route('app')->with('succes','Cliente registrado exitosamente');
    }

    public function sendEmail(Request $request){
        $email = $request->email;
        $name = $request->name;
        $text = $request->text;
        $send = new ConsultaMailable($email,$name,$text);
        Mail::to("jose.segovia@usil.pe")->send($send);
        return view('contacto');
    }
}
