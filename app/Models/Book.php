<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;
// use Illuminate\Database\Eloquent\Model;

class Book extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'libros';

    protected $filleable = [
        'nombre',
        'editorial',
        'detalle'
    ];
}
