<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Cliente;
use App\Models\Equipo;
use App\Models\Recepcion;
use App\Models\Tecnico;
use App\Models\Accesorio;


use Illuminate\Http\Request;

class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recepcions= Recepcion::all();
        return view('recepcion.index',compact('recepcions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes= Cliente::all();
        $equipos= Equipo::all();
        $tecnicos =Tecnico::all();
        $accesorios= Accesorio::all();
        return view('recepcion.create',compact('clientes','equipos','tecnicos','accesorios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fechaI = Carbon::now();
        $recepcions = new Recepcion();

        $recepcions->clientes_id=$request->get('Ncliente');
        $recepcions->equipos_id=$request->get('NEquipo');
        $recepcions->prioridad=$request->get('prioridad');
        $recepcions->area=$request->get('area');
        $recepcions->estado=$request->get('estado');
        $recepcions->diagnostico=$request->get('diagnostico');
        $recepcions->garantia=$request->get('garantia');
        $recepcions->contraseña=$request->get('contrasena');
        $recepcions->fechadeingreso=$fechaI;
        $recepcions->fechadeentrega=$request->get('fechaE');
        $recepcions->presupuesto=$request->get('presupuesto');
        $recepcions->adelanto=$request->get('adelanto');
        $recepcions->observacion=$request->get('observacion');
        $recepcions->problema=$request->get('problema');

        $recepcions->save();

        return redirect('/recepcion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $recepcion = Recepcion::find($id);
        return view('recepcion.show',compact('recepcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recepcion = Recepcion::find($id);
        return view('recepcion.edit')->with('recepcion',$recepcion);
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
