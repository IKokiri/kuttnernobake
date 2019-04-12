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

    function address(){
        return $this->hasMany("App\Address");
    }

    function schedule(){
        return $this->hasMany("App\Schedule");
    }
}
