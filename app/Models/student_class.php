<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_class extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'class_id'
    ];

    public function student(){
        $this->belongsTo(User::class);
    }

    public function room(){
        $this->belongsTo(class_schedule::class);
    }

    public function subject(){
        $this->belongsTo(subject::class);
    }

    public function report(){
        $this->hasMany(report_class::class);
    }
}
