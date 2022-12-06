<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudadanos_atendido extends Model
{
    use HasFactory;
    protected $table = 'ciudadanos_atendidos';
    protected $fillable = [
        'mes','atendidos','idUsuario'
    ];
  
}
