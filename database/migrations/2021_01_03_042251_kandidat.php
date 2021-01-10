<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kandidat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat',function (Blueprint $table){
           $table->bigIncrements('id');
           $table->text('nama');
           $table->date('tanggal_lahir');
           $table->text('agama');
           $table->text('alamat');
           $table->text('pendidikan_terakhir');
           $table->text('visi');
           $table->text('misi');
           $table->string('email')->unique();
           $table->rememberToken();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {Schema::dropIfExists('kandidat');
        //
    }
}
