<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application extends Model
{
     protected $fillable=['Course','Firstname','Lastname','Address','District','Gender','LandlineNo','MobileNumber','Email','AdmissionCategory','State','DateOfBirth','StudentImg','FatherName','MotherName','ParentNumber','FamilyIncome','FatherProfession','MotherProfession','ParentEmail','School10th','Total10thMarks','thBoardCouncil10','Passing10thYear','thSchool12','thmarks12','thGroup12','thPhysicsMarks12','thChemistryMarks12','thMathematicsMarks12','thBoardCouncil12','thPassingYear12'];
}
