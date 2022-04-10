<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report_class extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'detials'
    ];

    public function student(){
        $this->belongsTo(User::class);
    }
}
