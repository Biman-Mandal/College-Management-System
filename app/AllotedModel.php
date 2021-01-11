<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllotedModel extends Model
{
    protected $table='alloted';
    protected $fillable=['ATName','ASub','ASem','AStartDate','AEnddata'];

}