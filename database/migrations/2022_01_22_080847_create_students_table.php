<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FirstName');
            $table->string('lastName');
            $table->string('Course');
            $table->string('Address');
            $table->string('District');
            $table->string('Gender');
            $table->string('LandlineNo');
            $table->string('MobileNumber');
            $table->string('Email')->unique();
            $table->string('State');
            $table->string('DateOfBirth');
            $table->string('StudentImg');
            $table->string('FatherName');
            $table->string('MotherName');
            $table->string('ParentNumber');
            $table->string('FamilyIncome');
            $table->string('FatherProfession');
            $table->string('MotherProfession');
            $table->string('ParentEmail');
            $table->string('School10th');
            $table->string('Total10thMarks');
            $table->string('thBoardCouncil10');
            $table->string('Passing10thYear');
            $table->string('thSchool12');
            $table->string('thmarks12');
            $table->string('thGroup12');
            $table->string('thPhysicsMarks12');
            $table->string('thChemistryMarks12');
            $table->string('thMathematicsMarks12');
            $table->string('thBoardCouncil12');
            $table->string('thPassingYear12');
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
        Schema::dropIfExists('students');
    }
}
