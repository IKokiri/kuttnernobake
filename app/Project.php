<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectImage(){
        return $this->hasMany('App\ProjectImage');
    }
}
