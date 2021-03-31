<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'donate',
        'contact',
        'model',
        'image',
        'message',
        'howcontact'
    ];


    
}
