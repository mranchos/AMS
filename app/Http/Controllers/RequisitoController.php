<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisito;
use App\Regulacion;

class RequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_blank()
    {
        return view('pages.requi_blank',['regulaciones' => Regulacion::all()]);
    }

    public function index_all($id)
    {
        
        return view('pages.requi',
                ['requisito' =>  Requisito::where('regulationid','=',$id)->get()]
               ,['regulacion' => Regulacion::findOrFail($id)]);
    }

    public function index()
    {
        return view('pages.requi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        return view('pages.requi_create',['regulacion'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requisito = new Requisito();

        $requisito->regulationid = request('regulationid');
        $requisito->item = request('item');
        $requisito->name = request('name');
        $requisito->description = request('description');
        $requisito->save();

        $ruta = '/requi/'. request('regulationid');

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
        $requi = Requisito::findOrFail($id);
        $ruta = '/requi/'. $requi->regulationid;

        $requi->delete();

        return redirect($ruta);
    }
}
