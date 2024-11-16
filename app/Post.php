<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $guarded=[];
    protected $fillable = [
        'title', 'details', 'teacher_id','section_id',
    ];
    public function Teachers(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function Comments(){
        return $this->hasMany(Comment::class);
    }
}
