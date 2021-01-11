<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Allotedtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloted', function (Blueprint $table) {
           $table->increments('id');
            // 
            $table->string('ATName');
            $table->string('ASub');
            $table->string('ASem');
            $table->date('AStartDate');
            $table->date('AEnddata');
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
        Schema::dropIfExists('alloted');
    }
}
