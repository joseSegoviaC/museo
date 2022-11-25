<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = ['fimage'];
    protected $fillable1 = ['background'];
    protected $fillable2 = ['image1'];
    protected $fillable3 = ['image2'];
    protected $fillable4 = ['carrusel1'];
    protected $fillable5 = ['carrusel2'];
    protected $fillable6 = ['carrusel3'];
    protected $fillable7 = ['carrusel4'];
    protected $fillable8 = ['carrusel5'];
}
