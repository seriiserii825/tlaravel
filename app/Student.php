<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function lesson(){
        return $this->hasOne('App\Lesson');
    }
}
