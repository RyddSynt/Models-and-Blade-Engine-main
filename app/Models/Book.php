<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'ISBN',
        'title',
        'author',
        'description',
        'date_published',
        'updated_at',
        'created_at'
    ];
}
