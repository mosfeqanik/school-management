<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    public function Teachers(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function guardians(){
        return $this->belongsTo(Guardian::class,'guardian_id');
    }
}
