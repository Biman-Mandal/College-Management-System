<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            //
            $table->string('EmployeFirstname');
            $table->string('EmployeLastname');
            $table->string('EmployeAddress');
            $table->string('EmployeDistrict');
            //
            $table->string('EmployeGender');
            $table->string('EmployeLandlineNo');
            $table->string('EmployeMobileNumber');
            $table->string('EmployeEmail')->unique();
            //
            $table->string('EmployeState');
            $table->string('EmployeDateOfBirth');
            $table->string('EmployeImage');
            $table->string('EmployeBiodata');
            //
            $table->string('EmployeEduQualification');
            $table->string('EmployeDegOne');
            $table->string('EmployeDegTwo');
            //
            $table->string('EmployeExprienceOne');
            $table->string('EmployeCompanyNameOne');
            $table->string('EmployePositionOne');
            $table->string('EmployeExpriencetwo');
            $table->string('EmployeCompanyNametwo');
            $table->string('EmployePositiontwo');
            //
            $table->string('EmployeJobPosition');
            //
            $table->string('EmployeOtherActOne');
            $table->string('EmployeOtherActTwo');
            $table->string('EmployeAtFileOne');
            $table->string('EmployeAtFileTwo');
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
        Schema::dropIfExists('employees');
    }
}
