<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'author',
        'description',
        'publication_year',
        'genre',
        'cover_image'
    ];

    public function circle(){
        return $this->hasOne(Circle::class);
    }
}
