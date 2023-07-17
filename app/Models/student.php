<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    //public $timestamps = false;
    public function getCity(){
        return $this->hasOne('App\Models\City','stu_id');
    }
}
