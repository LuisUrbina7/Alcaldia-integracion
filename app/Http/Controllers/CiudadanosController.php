<?php

namespace App\Http\Controllers;

use App\Models\Ciudadanos_atendido;
use Exception;
use Illuminate\Http\Request;

class CiudadanosController extends Controller
{
    public function index()
    {
        $atendidos = Ciudadanos_atendido::select('id', 'mes', 'atendidos')->orderby('id', 'desc')->paginate(4);
        $graficos = Ciudadanos_atendido::select('id', 'mes', 'atendidos')->get()->toArray();
        $grafico_mes = [];
        $grafico_atendidos = [];
        for ($x = 0; $x < count($graficos); $x++) {
            array_push($grafico_mes, $graficos[$x]['mes']);
            array_push($grafico_atendidos, $graficos[$x]['atendidos']);
        }
        $nuevo_mes = json_encode($grafico_mes);
        $nuevo_atendidos = json_encode($grafico_atendidos);
        /* dd($nuevo); */
        return view('ciudadanos_atendidos.principal', compact('atendidos', 'nuevo_mes', 'nuevo_atendidos'));
    }
    public function insertar(Request $request)
    {


        try {
            Ciudadanos_atendido::create([
                'mes' => $request->input('mes'),
                'atendidos' => $request->input('atendidos'),
                'idUsuario' => $request->input('idUsuario')
            ]);
            return redirect()->back()->with(['excelente' => 'Datos agregados correctamente']);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => 'Algo ocurrió.']);
        }
    }
    public function actualizar(Request $request, $id)
    {
        /*  return response()->json($request->all()); */
        try {
            $atendidos = Ciudadanos_atendido::find($id);
            $atendidos->mes = $request->input('mes');
            $atendidos->atendidos = $request->input('atendidos');
            $atendidos->save();
            return redirect()->back()->with(['excelente' => 'Datos agregados correctamente']);
        } catch (Exception $e) {
            return $e;
        }
    }
   
    public function borrar($id)
    {

        try {
            $categoriaId = Ciudadanos_atendido::find($id);
            $categoriaId->delete();
            return response()->json(['msg' => 'excelente']);
        } catch (Exception $e) {
            return response()->json(['msg' => $e]);
        }
    }
    
}
