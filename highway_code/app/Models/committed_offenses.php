<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class committed_offenses_final extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'driverId',
        'officerId',
        'offenceNo',
        'status',
    ];
}
