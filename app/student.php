<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable=[
    	'name','Fname','email','Number','address','Sex','date_of_birth','image','Admission_Year','roll','Registration','Course','Course_Duration','Current_sem','Q_10th','Q_12th','Q_1stYear','Q_2ndYear','Q_3ndYear','Q_4thYear','Q_others'];
}
/*
name
Fname
email
Number
address
Sex
date_of_birth
image
Admission_Year
Registration
roll
Course
Course_Duration
Current_sem
Q_10th
Q_12th
Q_1stYear
Q_2ndYear
Q_3ndYear
Q_4thYear
Q_others
*/