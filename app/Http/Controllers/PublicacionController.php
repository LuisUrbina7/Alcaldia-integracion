<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Publicacion;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PublicacionController extends Controller
{
    public function index()
    {
        $contador = ['publicaciones' => Publicacion::count(), 'categorias' => Categoria::count(), 'usuarios' => User::count()];

        /*  dd($datos); */
        if (Auth::user()->rol ==  'adm') {

            $publicaciones = Publicacion::select('id', 'img', 'titulo')->orderby('id', 'desc')->paginate(11);
        } else {
            $publicaciones = Publicacion::select('id', 'img', 'titulo', 'idUsuario')->where('idUsuario', Auth::user()->id)->orderby('id', 'desc')->paginate(11);
        }

        return view('publicaciones.vista', compact('publicaciones', 'contador'));
    }
    public function insertarVista()
    {
        $categorias = Categoria::select('nombre', 'id')->get();
        return view('publicaciones.insertar', compact('categorias'));
    }
    public function insertar(Request $request)
    {
        /*  dd($request->all()); */
        $validado = Validator::make($request->all(), [
            'idUsuario' =>  'required',
            'titulo' =>  'required',
            'categoria' =>  'required',
            'sinopsis' =>  'required',
            'detalles' =>  'required',
        ]);

        if ($validado->fails()) {
            echo $validado->errors();
        } else {

            if ($request->hasFile('foto')) {
                $foto = $request->file('foto');
                $destino = 'img/noticias/';
                $fotoNombre = time() . '-' . $foto->getClientOriginalName();
                $mover = $request->file('foto')->move($destino, $fotoNombre);
            }
            try {
                Publicacion::create([
                    'titulo' => $request->input('titulo'),
                    'sinopsis' => $request->input('sinopsis'),
                    'slug' => Str::slug($request->input('titulo'), '-'),
                    'detalles' => $request->input('detalles'),
                    'img' => $destino . $fotoNombre,
                    'fecha' => date('y-m-d'),
                    'categoria' => $request->input('categoria'),
                    'idUsuario' => $request->input('idUsuario'),
                ]);

                return redirect()->back()->with('success', 'Publicado correctamente');
            } catch (Exception $e) {
                return redirect()->back()->with('danger', 'mal');
            }
        }
    }
    public function actualizarVista($id)
    {
        $busqueda = Publicacion::find($id);
        $categorias = Categoria::select('nombre', 'id')->get();
        return view('publicaciones.actualizar', compact('busqueda', 'categorias'));
    }
    public function actualizar(Request $request, $id)
    {
        /* dd($request->all()); */
        try {
            $actualizar = Publicacion::find($id);
            $actualizar->titulo = $request->input('titulo');
            $actualizar->slug = Str::slug($request->input('titulo'), '-');
            $actualizar->sinopsis = $request->input('sinopsis');
            $actualizar->detalles = $request->input('detalles');
            if ($request->hasFile('foto')) {
                $base = public_path($actualizar->img);
                unlink($base);
                $foto = $request->file('foto');
                $destino = 'img/noticias';
                $fotoNombre = time() . '-' . $foto->getClientOriginalName();
                $mover = $request->file('foto')->move($destino, $fotoNombre);
                $actualizar->img = $destino . $fotoNombre;
            }
            $actualizar->categoria = $request->input('categoria');
            $actualizar->update();
            return redirect()->back()->with('success', 'Publicado correctamente');
        } catch (Exception $e) {
            return redirect()->back()->with('danger', 'mal');
        }
    }
    public function borrar($id)
    {

        try {
            $busqueda = Publicacion::find($id);

            $busqueda->delete();
            $base = public_path($busqueda->img);
            if (file_exists($base)) {
                unlink($base);
            }
            return response()->json(['msg' => 'bien']);
        } catch (Exception $e) {
            return response()->json(['msg' => 'Mal']);
        }
    }


    public function ckeditor_imagen(Request $request)
    {
        if ($request->hasFile('upload')) {
            $Original = $request->file('upload')->getClientOriginalName();
            $Info = pathinfo($Original, PATHINFO_FILENAME);
            $extension =  $request->file('upload')->getClientOriginalExtension();
            $Info = $Info . '-' . time() . '.' . $extension;
            $destino = 'img/noticias/';
            $request->file('upload')->move(public_path($destino), $Info);
            $url = asset('img/noticias/' . $Info);

            return response()->json(['fileName' => $Info, 'uploaded' => 1, 'url' => $url]);
        }
    }
    public function noticias_recientes()
    {
        $recientes = Publicacion::select('id', 'titulo')->orderby('id', 'desc')->get();
        /*     dd($decretos); */

        return response()->json($recientes);
    }
}
