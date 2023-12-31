<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'book_id',
        'cont_report'
    ];

    Public function user(){
        return $this->hasOne(User::class);
    }
}
