<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComentariosController extends Controller
{
    public function insertar(Request $request)
    {
      
/*         'nombre',  'correo','mensaje', 'idPublicacion' */
            /* dd($request->all()); */
        $validator = Validator::make($request->all(), [
            'nombre' =>  'required',
            'correo' =>  'required ',
            'mensaje' =>  'required |max:100',
            'idPublicacion' =>  'required',
        ]);
          
        if ($validator->fails()) {
          /*  dd($validator->errors()); */
            return redirect()->back()->withErrors([$validator->errors()]);
        } else {

            try {
                Comentario::create([
                    'nombre' => $request->input('nombre'),
                    'correo' => $request->input('correo'),
                    'mensaje' => $request->input('mensaje'),
                    'fecha' => date('y-m-d'),
                    'idPublicacion' =>$request->input('idPublicacion') ,
                ]);

                return redirect()->back()->with('success', 'Publicado correctamente');
            } catch (Exception $e) {
                return redirect()->back()->with('danger', 'mal');
            }
        }
    }
}
