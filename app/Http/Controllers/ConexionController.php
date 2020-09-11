<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisito;
use App\Regulacion;
use App\Conexion;


class ConexionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index_regu()
    {

        return view('pages.cone_macro',['regulaciones' => Regulacion::all()]);
    }

    public function index_requi($id)
    {

        return view('pages.cone_regu',
                ['requisito' =>  Requisito::where('regulationid','=',$id)->get()]
               ,['regulacion' => Regulacion::findOrFail($id)]);
    }


    public function index($id)
    {
        $requisito =  Requisito::findOrFail($id);
        $regulacion = Regulacion::findOrFail($requisito->regulationid);
        $conexion =   Conexion::where('requisitoid','=',$id)->get();

        return view('pages.cone', compact('requisito','regulacion','conexion'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('pages.cone_create',['requisito'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $requisito =  Requisito::findOrFail(request('requisitodid'));
        $conexion = new Conexion();

        $conexion->regulationid = $requisito->regulationid;
        $conexion->requisitoid = $requisito->id;
        $conexion->question = request('question');
        $conexion->save();

        $ruta = '/cone/regu/requi/'. $requisito->id;

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
        $conexion = Conexion::findOrFail($id);
        $ruta = '/cone/regu/requi/'. $conexion->requisitoid;

        $conexion->delete();

        return redirect($ruta);
    }
}
