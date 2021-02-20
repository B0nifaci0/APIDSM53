<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // declarar la table 

    protected $fillable = [
        'name',
        'descrption',
        'image'
    ];
}
