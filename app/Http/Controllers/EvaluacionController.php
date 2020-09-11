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


class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $datos = DB::table('evaluacions')
                    ->join('entidads'       ,'evaluacions.entidadid'      ,'='    ,'entidads.id')
                    ->join('regulacions'    ,'evaluacions.regulationid'   ,'='    ,'regulacions.id')
                    ->select('evaluacions.id as id','entidads.name as entidad','regulacions.name as regulacion','evaluacions.porcentaje as porcentaje')
                    ->get();
        return view('pages.eva',['datos'=>$datos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $entidades = Entidad::all();
        $regulaciones = Regulacion::all();
        return view('pages.eva_create',compact('entidades','regulaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluacion = new Evaluacion();

        $evaluacion->entidadid = request('entidad');
        $evaluacion->regulationid = request('regulacion');
        $evaluacion->porcentaje = 0;
        $evaluacion->save();

        $inserted = $evaluacion->id;
        $eva = Evaluacion::findOrFail($inserted);
        $conexion =   Conexion::where('regulationid','=',$eva->regulationid)->get();

        foreach ($conexion as $con) {
            $ejecu = array("evaluacionid"=>$inserted,"conexionid"=>$con->id,"madurez"=>'0');
            DB::table('ejecucions')->insert(array($ejecu));
        }
        
        return redirect('/eva');
    
    }

    public function send(Request $request)
    {
        $evaluacion = request('evaluacion');
        $ejecucion = request('ejecucion');
        $madurez = request('madurez');

        DB::table('ejecucions')->where('id',$ejecucion)->update(['madurez'=>$madurez]);
        $total = count(Ejecucion::where('evaluacionid','=',$evaluacion)->get());
        $completados = count(Ejecucion::where('evaluacionid','=',$evaluacion)->where('madurez','!=','0')->get());
        $porcentaje = ($completados*100)/$total; 
        
        DB::table('evaluacions')->where('id',$evaluacion)->update(['porcentaje'=>$porcentaje]); 

        if($porcentaje == 100)
        {
            $ruta = '/eva';
        }
        else
        {
            $ruta = '/eva/ejecucion/'.$evaluacion;
        } 
        

        return redirect($ruta);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function ejecucion($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $entidad = Entidad::findOrFail($evaluacion->entidadid);
        $regulacion = Regulacion::findOrFail($evaluacion->regulationid);
        $ejecucion = Ejecucion::where('evaluacionid','=',$id)
                    ->where('madurez','=','0')
                    ->get()
                    ->first();
        $conexion = Conexion::findOrFail($ejecucion->conexionid);
        $requisito = Requisito::findOrFail($conexion->requisitoid);
        return view('pages.eva_ejecucion',compact('evaluacion','entidad','regulacion','ejecucion','conexion','requisito'));
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
        $eva = Evaluacion::findOrFail($id);
    
        $eva->delete();

        return redirect('/eva');
    }
}
