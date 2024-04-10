<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model as Eloquent;
// use Illuminate\Database\Eloquent\Model;

class Book extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'libros';

    protected $fillable = [
        'nombre',
        'editorial',
        'detalle'
    ];
}
