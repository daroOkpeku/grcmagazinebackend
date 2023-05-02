<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcription extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'price',
        'days',
        'number_of_article',
        'bodys',
    ];
}
