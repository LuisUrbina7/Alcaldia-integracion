<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $fillable = [
        'nombre',  'correo','mensaje','fecha', 'idPublicacion'
    ];
    public function Publicacion(){
        return $this->belongsTo(Publicacion::class,'idPublicacion');
    }
}