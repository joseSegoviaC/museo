<?php

namespace App\Classes;

use App\Models\Place as ModelsPlace;
use Illuminate\Database\Eloquent\Model;

class Place
{
    protected $name;
    protected $sdescription;##
    protected $fimage;##
    protected $location;
    protected $type;
    protected $background;##
    protected $image1;##
    protected $image2;##
    protected $carrusel1;##
    protected $carrusel2;##
    protected $carrusel3;##
    protected $carrusel4;##
    protected $carrusel5;##
    protected $description1;##
    protected $description2;##


    public function __construct($name,$sdescription ,$fimage ,$location, $type, $background ,$image1,$image2,$carrusel1,$carrusel2,$carrusel3,$carrusel4,$carrusel5, $description1, $description2)
    {
        $this->name = $name;
        $this->sdescription = $sdescription;
        $this->fimage = $fimage;
        $this->location = $location;
        $this->type = $type;
        $this->background = $background;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->carrusel1 = $carrusel1;
        $this->carrusel2 = $carrusel2;
        $this->carrusel3 = $carrusel3;
        $this->carrusel4 = $carrusel4;
        $this->carrusel5 = $carrusel5;
        $this->description1 = $description1;
        $this->description2 = $description2;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setLocation($location){
        $this->location = $location;
    }

    public function getLocation(){
        return $this->location;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getImage(){
        return $this->image;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function saveListImg($img){
        
    }

    public function savePlace(){
        $place = new ModelsPlace;

        $place->name = $this->name;
        $place->sdescription = $this->sdescription;
        $place->fimage = $this->fimage;
        $place->location = $this->location;
        $place->type = $this->type;
        $place->background = $this->background;
        $place->image1 = $this->image1;
        $place->image2 = $this->image2;
        $place->carrusel1 = $this->carrusel1;
        $place->carrusel2 = $this->carrusel2;
        $place->carrusel3 = $this->carrusel3;
        $place->carrusel4 = $this->carrusel4;
        $place->carrusel5 = $this->carrusel5;
        $place->description1 = $this->description1;
        $place->description2 = $this->description2;
        
        $place->save();
    }
    
}