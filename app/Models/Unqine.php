<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unqine extends Model
{
    use HasFactory;
    protected $fillable = [
        'send_id',
        'rec_id',
        'uniquecode'
    ];
}
