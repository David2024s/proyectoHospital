<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Esto permite que Laravel guarde el nombre y la descripción en la base de datos
    protected $fillable = ['nombre', 'descripcion'];
}