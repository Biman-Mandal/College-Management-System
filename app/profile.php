<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable=['Username','Email','MobileNumber','City','State','Course','Password'];
}
