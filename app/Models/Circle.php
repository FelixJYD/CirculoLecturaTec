<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    use HasFactory;
    protected $fillable = ['name_book'];

    public function books() {
        return $this->hasMany(Book::class, 'id');
    }
}
