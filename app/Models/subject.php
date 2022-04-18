<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_nm'
    ];

    public function schedule()
    {
        return $this->hasMany(class_schedule::class, 'subject_id', 'id');
    }
}
