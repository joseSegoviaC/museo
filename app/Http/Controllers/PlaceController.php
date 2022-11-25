<?php

namespace App\Http\Controllers;

use App\Classes\Place as ClassesPlace;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    public function index(){
        $places = Place::all();
        return view('lugares',['places'=>$places]);
    }

    public function show($id){
        $place = Place::find($id);
        return view('descripcion',['place'=>$place]);
    }

    public function store(Request $request){
        $request->validate([
            'fimage' => 'required|image',
            'background' => 'required|image',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'carrusel1' => 'required|image',
            'carrusel2' => 'required|image',
            'carrusel3' => 'required|image',
            'carrusel4' => 'required|image',
            'carrusel5' => 'required|image',
        ]);
        
        $rfimage = $request->file('fimage')->store('public/img');
        $rbackground = $request->file('background')->store('public/img');
        $rimage1 = $request->file('image1')->store('public/img');
        $rimage2 = $request->file('image2')->store('public/img');
        $rcarrusel1 = $request->file('carrusel1')->store('public/img');
        $rcarrusel2 = $request->file('carrusel2')->store('public/img');
        $rcarrusel3 = $request->file('carrusel3')->store('public/img');
        $rcarrusel4 = $request->file('carrusel4')->store('public/img');
        $rcarrusel5 = $request->file('carrusel5')->store('public/img');

        $name = $request->name;
        $sdescription = $request->sdescription;
        $fimage = Storage::url($rfimage);
        $location = $request->location;
        $type = $request->type;
        $background = Storage::url($rbackground);
        $image1 = Storage::url($rimage1);
        $image2 = Storage::url($rimage2);
        $carrusel1 = Storage::url($rcarrusel1);
        $carrusel2 = Storage::url($rcarrusel2);
        $carrusel3 = Storage::url($rcarrusel3);
        $carrusel4 = Storage::url($rcarrusel4);
        $carrusel5 = Storage::url($rcarrusel5);
        $description1 = $request->description1;
        $description2 = $request->description2;

        $place = new ClassesPlace($name,$sdescription ,$fimage ,$location, $type, $background ,$image1,$image2,$carrusel1,$carrusel2,$carrusel3,$carrusel4,$carrusel5, $description1, $description2);
        $place->savePlace();
        
        $user = Auth::user();
        return view('agregarLugar')->with(['user'=>$user]);
    }

    public function gestionar(){
        $places = Place::all();
        $user = Auth::user();
        return view('gestionarLugar',['places'=>$places,'user'=>$user]);
    }

    public function destroy($id){
        $place = Place::find($id);
        $place->delete();

        return redirect()->route('gestionar')->with('success','Lugar eliminado');
    }

    public function showUpdate($id){
        $user = Auth::user();
        $place = Place::find($id);
        return view('actualizarLugar',['place'=>$place,'user'=>$user]);
    }

    public function update(Request $request){

        $request->validate([
            'fimage' => 'required|image',
            'background' => 'required|image',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'carrusel1' => 'required|image',
            'carrusel2' => 'required|image',
            'carrusel3' => 'required|image',
            'carrusel4' => 'required|image',
            'carrusel5' => 'required|image'
        ]);
        
        $rfimage = $request->file('fimage')->store('public/img');
        $rbackground = $request->file('background')->store('public/img');
        $rimage1 = $request->file('image1')->store('public/img');
        $rimage2 = $request->file('image2')->store('public/img');
        $rcarrusel1 = $request->file('carrusel1')->store('public/img');
        $rcarrusel2 = $request->file('carrusel2')->store('public/img');
        $rcarrusel3 = $request->file('carrusel3')->store('public/img');
        $rcarrusel4 = $request->file('carrusel4')->store('public/img');
        $rcarrusel5 = $request->file('carrusel5')->store('public/img');

        $name = $request->name;
        $sdescription = $request->sdescription;
        $fimage = Storage::url($rfimage);
        $location = $request->location;
        $type = $request->type;
        $background = Storage::url($rbackground);
        $image1 = Storage::url($rimage1);
        $image2 = Storage::url($rimage2);
        $carrusel1 = Storage::url($rcarrusel1);
        $carrusel2 = Storage::url($rcarrusel2);
        $carrusel3 = Storage::url($rcarrusel3);
        $carrusel4 = Storage::url($rcarrusel4);
        $carrusel5 = Storage::url($rcarrusel5);
        $description1 = $request->description1;
        $description2 = $request->description2;

        $lugar = Place::find($request->id);
        $lugar->name = $name;
        $lugar->fimage = $fimage;
        $lugar->location = $location;
        $lugar->type = $type;
        $lugar->background = $background;
        $lugar->image1 = $image1;
        $lugar->image2 = $image2;
        $lugar->carrusel1 = $carrusel1;
        $lugar->carrusel2 = $carrusel2;
        $lugar->carrusel3 = $carrusel3;
        $lugar->carrusel4 = $carrusel4;
        $lugar->carrusel5 = $carrusel5;
        $lugar->description1 = $description1;
        $lugar->description2 = $description2;
        $lugar->save();
        
        return redirect()->route('gestionar')->with('success','Lugar actualizado');
    }
}
