<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DaftarCodeHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codehours', function ($table){
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->string('jurusan');
            $table->string('no_hp');
            $table->boolean('confirmed');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
