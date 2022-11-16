<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publicacion;
use Illuminate\Http\Request;

class PaginasController extends Controller
{

    public function inicio(){
        $noticias = Publicacion::select('id','titulo','sinopsis','img','slug')->orderby('id', 'desc')->limit(3)->get();
        $noticias_proyectos = Publicacion::select('id','titulo','sinopsis','img','slug')->where('categoria','1')->orderby('id', 'desc')->limit(3)->get();
       /*  dd($noticias_proyectos); */
        return view('home',compact('noticias','noticias_proyectos'));
    }
    public function noticias(){
        $noticias = Publicacion::select('id','titulo','sinopsis','slug','fecha','img')->orderby('id', 'desc')->paginate(4);
   
        $recientes = Publicacion::select('id','titulo','slug')->orderby('id','desc')->limit(5)->get();
        return view('paginas.noticias',compact('noticias','recientes'));
    }
    public function noticias_articulo($slug){

        $articulo = Publicacion::where('slug',$slug)->firstOrFail();
      /*   dd($articulo->id); */
        $comentarios = Comentario::select('id','nombre','correo','fecha','mensaje','idPublicacion')->where('idPublicacion',$articulo->id)->get();
        $recientes = Publicacion::select('id','titulo','slug')->orderby('id','desc')->limit(5)->get();
        return view('paginas.noticia-vista',compact('articulo','comentarios','recientes'));
    }
    public function noticias_categoria($id){
        $noticias = Publicacion::where('categoria',$id)->orderby('id','desc')->paginate(4);
      /*   dd($noticias); */
        $recientes = Publicacion::select('id','titulo','slug')->orderby('id','desc')->limit(5)->get();
        return view('paginas.noticias',compact('noticias','recientes'));
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
