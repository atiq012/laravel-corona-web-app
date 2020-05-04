<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //
    protected $fillable = array('thana','infected','new_infected','recover','deaths');
}
