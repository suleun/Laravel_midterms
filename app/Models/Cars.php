<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "company", 
        "carName", 
        "year",
        "price",
        "carModel",
        "appearance",
        "image", 
    ];
}
