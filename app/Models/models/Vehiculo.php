<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Models;

class Vehiculo extends Models
{
    use HasFactory;

    protected $fillable = ['nombres', 'categorias'];
}
