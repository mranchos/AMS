<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Control;
use App\Ejecucion;
use App\Evaluacion;
use App\Accion;

use App\Persona;
use DB;

class AccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oportunidades = DB::table('oportunidades')->get();
        return view('pages.acc',['oportunidades'=>$oportunidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $ejecucionid = $id; 
        $controles = Control::all();
        $ejecucion = Ejecucion::findOrFail($id);
        $evaluacion = Evaluacion::findOrFail($ejecucion->evaluacionid);
        $personas = Persona::where('entidadid','=',$evaluacion->entidadid)->get();
        return view('pages.acc_create',compact('ejecucionid','controles','personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accion = new Accion();

        $accion->ejecucionid = request('ejecucionid');
        $accion->personaid = request('personaid');
        $accion->controlid = request('controlid');
        $accion->fec_ini = request('fec_ini');
        $accion->fec_fin = request('fec_fin');
        $accion->estado = request('estado');
        $accion->save();

        return redirect('/acc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = DB::table('plan')->where('id','=',$id)->first();
        return view('pages.showplan',compact('plan'));
    }

    public function finish($id)
    {
        $plan = DB::table('plan')->where('id','=',$id)->first();
        DB::table('ejecucions')->where('id',$plan->ejecucionid)->update(['madurez'=>'3']);
        return redirect('/acc');
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
