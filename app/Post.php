<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //accessor:: to make uppercase 
    public function getTitleAttribute($value){
        return \ucfirst($value);
    }
    //mutators:: when we save a data the first letter of the title will be uppercase
    public function setTitleAttribute($value){
        
        return $this->attributes['title'] = ucfirst($value);
    }
}
