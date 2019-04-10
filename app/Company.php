<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    function phone(){
        return $this->hasMany("App\Phone");
    }

    function email(){
        return $this->hasMany("App\Email");
    }
}
