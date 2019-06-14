<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTattoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tattoos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('artist_id')->index()->unsigned()->nullable();
            $table->decimal('price',8,2)->nullable();
            $table->integer('advance_id')->index()->unsigned()->nullable();
            $table->string('photo_id')->default('No file');
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
        Schema::dropIfExists('tattoos');
    }
}
