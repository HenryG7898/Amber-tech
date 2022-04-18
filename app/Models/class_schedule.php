<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_schedule extends Model
{
    use HasFactory;

    protected $table = 'class_schedules';

    protected $fillable = [
        'teacher_id',
        'subject_id',
        'class_nm',
        'start_time',
        'end_time'
    ];

    public function teacher(){
       return $this->belongsTo(User::class,'teacher_id','id');
    }

    public function subject_class(){
       return $this->belongsTo(subject::class,'subject_id','id');
    }
//
//    public function classroom(){
//        $this->hasMany(class_schedule::class);
//    }
}
