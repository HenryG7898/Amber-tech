<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report_admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_nm',
        'last_nm',
        'email',
        'phone_nbr',
        'detail',
    ];
}
