<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->string('Fname');
             $table->string('email')->unique();
             $table->string('Number');
             $table->text('address');
             $table->string('Sex');
             $table->date('date_of_birth');
             $table->string('image');
             $table->string('Admission_Year');
             $table->integer('Registration');
             $table->integer('roll');
             $table->string('Course');
             $table->integer('Course_Duration');
             $table->string('Current_sem');
             $table->string('Q_10th');
             $table->string('Q_12th');
             $table->string('Q_1stYear');
             $table->string('Q_2ndYear');
             $table->string('Q_3ndYear');
             $table->string('Q_4thYear');
             $table->string('Q_others');
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
        Schema::dropIfExists('Students');
    }
}
