<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        $prices = Price::all();
        return view('app',['prices'=>$prices]);
    }
}
