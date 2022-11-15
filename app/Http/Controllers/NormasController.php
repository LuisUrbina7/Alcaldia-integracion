<?php

namespace App\Http\Controllers;

use App\Models\Normas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NormasController extends Controller
{
    public function index()
    {
        $normas = Normas::select('id', 'titulo', 'enlace', 'tipo', 'fecha')->orderby('id', 'desc')->paginate(4);
        return view('normas.principal', compact('normas'));
    }
    public function insertar_vista()
    {
        return view('normas.insertar');
    }
    public function insertar(Request $request)
    {
       /*  dd($request->all()); */
        $validator  = Validator::make($request->all(), [
            'titulo' => ['required', 'string', 'max:255'],
            'archivo' => ['required'],
            'tipo' => ['required'],
            'fecha' => ['required'],
            'idUsuario' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors([$validator->errors()]);
        }
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $destino = 'normas_archivos/';
            $archivoNombre = time() . '-' . $archivo->getClientOriginalName();
            $mover = $request->file('archivo')->move($destino, $archivoNombre);
        }
        try {
            Normas::create([
                'titulo' => $request->input('titulo'),
                'enlace' => $destino . $archivoNombre,
                'fecha' => $request->input('fecha'),
                'tipo' => $request->input('tipo'),
                'idUsuario' => $request->input('idUsuario'),
            ]);
            return redirect()->back()->with('success', 'excelente publicidad subida.');
        } catch (Exception $e) {
            return redirect()->back()->with('danger', 'inténtalo de nuevo más tarde.');
        }
    }
    public function actualizar_vista($id)
    {   
        $norma= Normas::find($id);

        return view('normas.actualizar',compact('norma'));
   
    }
    public function actualizar(Request $request,$id)
    {
       /*  dd($request->all()); */
      try {
            $informacion = Normas::find($id);
            $informacion->titulo = $request->input('titulo');
            if ($request->hasFile('archivo')) {
                $base = public_path($informacion->enlace);
                unlink($base);
                $archivo = $request->file('archivo');
                $destino = 'normas_archivos/';
                $archivoNombre = time() . '-' .$archivo->getClientOriginalName();
                $mover = $request->file('archivo')->move($destino, $archivoNombre);
                $informacion->enlace = $destino . $archivoNombre;
            }
            $informacion->fecha = $request->input('fecha');
            $informacion->tipo = $request->input('tipo');
            $informacion->update();
            return redirect()->back()->with('success', 'excelente publicidad actualizada.');
        } catch (Exception $e) {
            return redirect()->back()->with('danger', 'inténtalo de nuevo más tarde.');
            } 
    }
    public function borrar($id)
    {
        try{
            $norma = Normas::find($id);
            $norma->delete();
            $base = public_path($norma->enlace);
            if(file_exists($base)){
                  unlink($base);
                }
                return response()->json(['msg'=>'bien']);
        }catch(Exception $e){
            return response()->json(['msg'=>'error']);

        }
       
    }

    public function cargar_decretos(){
        $decretos = Normas::where('tipo','Decreto')->get();
    /*     dd($decretos); */

        return response()->json($decretos);
    }
    public function cargar_normas(){
        $normas = Normas::where('tipo','Norma')->get();
        /* dd($normas); */

        return response()->json($normas);
    }
}
