<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guardian extends Authenticatable
{
    protected $guarded=[];

    public function Appointments(){
        return $this->hasMany(appointment::class);
    }
}
