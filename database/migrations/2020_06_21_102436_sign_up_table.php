<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SignUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
             $table->increments('id');
             $table->string('Username');
             $table->string('Email')->unique();
             $table->string('MobileNumber');
             $table->string('City');
             $table->string('State');
             $table->string('Course');
             $table->string('Password');
             $table->string('RetypePassword');      
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
        Schema::dropIfExists('Profile');
    }
}
