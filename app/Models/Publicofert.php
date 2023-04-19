<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicofert extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'texto',
        'image',
        'user_id',
    ];
}
