<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   function productImage(){
       return $this->hasMany("App\ProductImage");
   }
}
