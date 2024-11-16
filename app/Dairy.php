<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dairy extends Model
{
    protected $guarded=[];

    public function Teachers(){
        return $this->belongsTo(Teachers::class,'teacher_id');
    }
}
