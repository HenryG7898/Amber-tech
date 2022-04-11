<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent_class extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'first_nm',
        'last_nm',
        'DOB',
        'gender',
        'phone_nbr',
        'relation',
        'email',
    ];

    public function student(){
        return $this->belongsTo(User::class,'student_id','id');
    }
}
