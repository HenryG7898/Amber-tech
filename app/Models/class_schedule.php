<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'subject_id',
        'class_nm',
        'start_time',
        'end_time'
    ];

    public function teacher(){
        $this->belongsTo(User::class);
    }

    public function subject(){
        $this->belongsTo(subject::class);
    }

    public function classroom(){
        $this->hasMany(class_schedule::class);
    }
}
