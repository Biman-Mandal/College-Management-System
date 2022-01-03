<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    protected $table = 'portals';
    protected $fillable=['UniversityRoll','Password','Name','Email','MoblileNumber','Depertment'];
}
