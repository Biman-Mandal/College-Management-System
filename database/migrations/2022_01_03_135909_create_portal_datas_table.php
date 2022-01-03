<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortalDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portal_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FirstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('mobile1');
            $table->string('mobile2');
            $table->string('Email1');
            $table->string('Email2');
            $table->string('blgroup');
            $table->string('adharnum');
            $table->string('pannum');
            $table->string('passport');
            $table->string('fathername');
            $table->string('occupation');
            $table->string('contact');
            $table->string('relation');
            $table->string('mothername');
            $table->string('Moccupation');
            $table->string('Faaddress');
            $table->string('PO');
            $table->string('cityvill');
            $table->string('pincode');
            $table->string('country');
            $table->string('Permanentaddress');
            $table->string('POO');
            $table->string('Percityvill');
            $table->string('Perpincode');
            $table->string('Percountry');
            $table->string('Xexamination');
            $table->string('Xpassing');
            $table->string('Xstandard');
            $table->string('Xactual');
            $table->string('Xboardcouncil');
            $table->string('Xstudy');
            $table->string('Xmath');
            $table->string('Xscience');
            $table->string('Xcomapp');
            $table->string('XIIexamination');
            $table->string('XIIpassing');
            $table->string('XIIstandard');
            $table->string('XIIactual');
            $table->string('XIIboardcouncil');
            $table->string('XIIstudy');
            $table->string('XIImath');
            $table->string('XIIphysics');
            $table->string('XIIchemistry');
            $table->string('XIIcompapp');
            $table->string('BCAexamination');
            $table->string('BCArank');
            $table->string('BCAregistration');
            $table->string('BCAroll');
            $table->string('BCAsemister1');
            $table->string('BCAsemister2');
            $table->string('BCAsemister3');
            $table->string('BCAsemister4');
            $table->string('BCAsemister5');
            $table->string('BCAsemister6');
            $table->string('BCAaverage');
            $table->string('BCAbacklogY');
            $table->string('BCAbacklogN');
            $table->string('BCAbacklogName');
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
        Schema::dropIfExists('portal_datas');
    }
}
