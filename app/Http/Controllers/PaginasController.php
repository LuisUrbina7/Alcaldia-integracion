<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publicacion;
use Illuminate\Http\Request;

class PaginasController extends Controller
{

    public function inicio(){
        return view('home');
    }
    public function noticias(){
        $noticias = Publicacion::select('id','titulo','sinopsis','fecha','img')->orderby('id', 'desc')->paginate(3);;
        return view('paginas.noticias',compact('noticias'));
    }
    public function noticias_articulo(int $id){
        $articulo = Publicacion::find($id);
        $comentarios = Comentario::select('id','nombre','correo','mensaje','idPublicacion')->where('idPublicacion',$id)->get();
        return view('paginas.noticia-vista',compact('articulo','comentarios'));
    }
    public function alcaldia(){
        return view('paginas.alcaldia');
    }
    public function concejo_municipal(){
        return view('paginas.concejo-municipal');
    }
    public function municipio(){
        return view('paginas.municipio');
    }
    public function entes(){
        return view('paginas.entes');
    }
    public function turismo(){
        return view('paginas.turismo');
    }
    public function servicios(){
        return view('paginas.servicios');
    }


   
 
 
}
