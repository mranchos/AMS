<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluacion;
use App\Entidad;
use App\Regulacion;
use App\Conexion;
use App\Ejecucion;
use App\Requisito;
use DB;

class IndicadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DB::table('evaluacions')
                    ->where('porcentaje','=','100')
                    ->join('entidads'       ,'evaluacions.entidadid'      ,'='    ,'entidads.id')
                    ->join('regulacions'    ,'evaluacions.regulationid'   ,'='    ,'regulacions.id')
                    ->select('evaluacions.id as id','entidads.name as entidad','regulacions.name as regulacion','evaluacions.porcentaje as porcentaje')
                    ->get();
        return view('pages.indi',['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $entidad = Entidad::findOrFail($evaluacion->entidadid);
        $regulacion = Regulacion::findOrFail($evaluacion->regulationid);

        $total = count(Ejecucion::where('evaluacionid','=',$id)->get());
        $completados = count(Ejecucion::where('evaluacionid','=',$id)->where('madurez','>','2')->get());
        $porcentaje = round(($completados*100)/$total,0); 

        $listado = Ejecucion::where('evaluacionid','=',$id)->get();
        $suma = 0;

        foreach ($listado as $con) {
            $suma = $suma + $con->madurez; 
        }

        $madu = round($suma/$total,0);

        $indicadores = DB::table('indicadores')->where('evaluacion','=',$id)->get();

        return view('pages.indi_macro',compact('evaluacion','entidad','regulacion','porcentaje','madu','indicadores'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
