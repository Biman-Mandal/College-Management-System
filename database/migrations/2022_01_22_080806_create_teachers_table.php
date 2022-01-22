<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TeacherFirstname');
            $table->string('TeacherLastname');
            $table->string('TeacherAddress');
            $table->string('TeacherDistrict');
            $table->string('TeacherGender');
            $table->string('TeacherLandlineNo');
            $table->string('TeacherMobileNumber');
            $table->string('TeacherEmail')->unique();
            $table->string('TeacherState');
            $table->string('TeacherDateOfBirth');
            $table->string('TeacherImage');
            $table->string('TeacherBiodata')->nullable();
            $table->string('TeacherDegreeOne');
            $table->string('TeacherDegreeTwo');
            $table->string('TeacherDegreeThree');
            //
            $table->string('TeacherExprienceOne');
            $table->string('TeacherCompanyNameOne');
            $table->string('TeacherPositionOne');
            $table->string('TeacherExpriencetwo');
            $table->string('TeacherCompanyNametwo');
            $table->string('TeacherPositiontwo');
            //
            $table->string('TeacherSubjectOne');
            $table->string('TeacherSubjectTwo');
            $table->string('TeacherSubjectThree');
            $table->string('TeacherSubjectFour');
            $table->string('TeacherCollegePosition');
            //
            $table->string('TeacherOtherActOne');
            $table->string('TeacherOtherActTwo');
            $table->string('TeacherAtFileOne');
            $table->string('TeacherAtFileTwo');
            //
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
        Schema::dropIfExists('teachers');
    }
}
