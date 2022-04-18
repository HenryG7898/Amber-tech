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

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(class_schedule::class, 'class_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(subject::class, 'class_id', 'id');
    }

    public function report()
    {
        return $this->hasMany(report_class::class);
    }
}
