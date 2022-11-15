<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publicacion;
use Illuminate\Http\Request;

class PaginasController extends Controller
{

    public function inicio(){
        $noticias = Publicacion::select('id','titulo','sinopsis','img')->orderby('id', 'desc')->limit(3)->get();
        $noticias_proyectos = Publicacion::select('id','titulo','sinopsis','img')->where('categoria','2')->orderby('id', 'desc')->limit(3)->get();
       /*  dd($noticias_proyectos); */
        return view('home',compact('noticias','noticias_proyectos'));
    }
    public function noticias(){
        $noticias = Publicacion::select('id','titulo','sinopsis','fecha','img')->orderby('id', 'desc')->paginate(4);
        $recientes = Publicacion::select('id','titulo')->orderby('id','desc')->limit(5)->get();
        return view('paginas.noticias',compact('noticias','recientes'));
    }
    public function noticias_articulo(int $id){
        $articulo = Publicacion::find($id);
        $comentarios = Comentario::select('id','nombre','correo','fecha','mensaje','idPublicacion')->where('idPublicacion',$id)->get();
        $recientes = Publicacion::select('id','titulo')->orderby('id','desc')->limit(5)->get();
        return view('paginas.noticia-vista',compact('articulo','comentarios','recientes'));
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
