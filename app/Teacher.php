<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
//    protected $guarded=[];
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public function Posts(){
        return $this->hasMany(Post::class);
    }
    public function Dairies(){
        return $this->hasMany(Dairy::class);
    }
    public function Appointments(){
        return $this->hasMany(appointment::class);
    }
}
