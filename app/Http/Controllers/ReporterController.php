<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReporterController extends Controller
{
    public function index(){
        $clients = Client::all();
        $user = Auth::user();
        return view('gestionarUsuarios',['clients' => $clients,'user'=>$user]);
    }
}
