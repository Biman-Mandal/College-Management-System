<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class database extends Model
{
     protected $fillable=['DatabaseUsername','DatabasePassword','DatabaseRetypePassword'];
}
