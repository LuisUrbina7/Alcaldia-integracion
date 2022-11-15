<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normas extends Model
{
    use HasFactory;
    protected $table = 'normas';
    protected $fillable = [
        'titulo',  'enlace','fecha', 'tipo','idUsuario'
    ];
    public function Usuarios(){
        return $this->belongsTo(User::class,'idUsuario');
    }
}
