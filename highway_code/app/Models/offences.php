<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offences extends Model
{
    use HasFactory;

    protected $fillable = [
        'offenseId',
        'description',
        'fine',
    ];
}
