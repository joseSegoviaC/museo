<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sdescription');
            $table->string('fimage');
            $table->string('location');
            $table->string('type');
            $table->string('background');
            $table->string('image1');
            $table->string('image2');
            $table->string('carrusel1');
            $table->string('carrusel2');
            $table->string('carrusel3');
            $table->string('carrusel4');
            $table->string('carrusel5');
            $table->longText('description1');
            $table->longText('description2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
