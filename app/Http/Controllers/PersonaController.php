<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Entidad;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.perso_blank',['entidades' => Entidad::all()]);
    }


    public function index_all($id)
    {
         return view('pages.perso',
                ['persona' =>  Persona::where('entidadid','=',$id)->get()]
               ,['entidad' => Entidad::findOrFail($id)]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('pages.perso_create',['entidad'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();

        $persona->entidadid = request('entidadid');
        $persona->name = request('name');
        $persona->area = request('area');
        $persona->charge = request('charge');
        $persona->email = request('email');
        $persona->phone = request('phone');
        $persona->address = request('address');
        $persona->save();

        $ruta = '/perso/'. request('entidadid');

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
        $persona = Persona::findOrFail($id);
        $ruta = '/perso/'. $persona->entidadid;

        $persona->delete();

        return redirect($ruta);
    }
}
