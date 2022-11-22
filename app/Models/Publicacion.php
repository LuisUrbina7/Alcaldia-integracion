<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $table = 'publicaciones';
    protected $fillable = [
        'titulo',  'sinopsis','slug','detalles', 'img','fecha','categoria','idUsuario',
    ];
    public function Categoria(){
        return $this->belongsTo(Categoria::class,'categoria');
    }
    public function Usuarios(){
        return $this->belongsTo(User::class,'idUsuario');
    }
    public function Comentarios(){
        return $this->hasMany(Comentario::class);
    }
    /* public function getRouteKeyName()
    {
        return 'slup';
    } */

  
}
