<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'company_id',
        'latitude',
        'longitude',
        'type',
        'price',
        'active',
    ];
    
}
