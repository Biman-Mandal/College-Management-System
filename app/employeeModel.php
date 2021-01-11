<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employeeModel extends Model
{
  protected $table="newemployes";
 
   protected $fillable=['EmployeFirstname','EmployeLastname','EmployeAddress','EmployeDistrict','EmployeGender','EmployeLandlineNo','EmployeMobileNumber','EmployeEmail','EmployeState','EmployeDateOfBirth','EmployeImage','EmployeEduQualification','EmployeDegOne','EmployeDegTwo','EmployeExprienceOne','EmployeCompanyNameOne','EmployePositionOne','EmployeExpriencetwo','EmployeCompanyNametwo','EmployePositiontwo','EmployeJobPosition','EmployeOtherActOne','EmployeOtherActTwo','EmployeAtFileOne'];
}
