<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoEquipo;
use App\Models\Cliente;
use App\Models\Color;
use App\Models\Marca;
use App\Models\Equipo;
use App\Models\Reparacion;
use Carbon\Carbon;


class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $equipos=Equipo::all();
       return view('recepcion.index')->with('equipos',$equipos);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $tipoequipos = TipoEquipo::all();
        $colores = Color::all();
        $marcas = Marca::all();
        return view('recepcion.create',compact('clientes','tipoequipos','colores','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($_POST["submit1"])) {
            $clientes = new Cliente();
            $clientes->dni =$request->get('dni');
            $clientes->nombre =$request->get('nombre');
            $clientes->direccion =$request->get('direccion');
            $clientes->telefono =$request->get('telefono');
            $clientes->save();
            return redirect('/recepcion/create');
    }else{
        //$fechaI = Carbon::now();
        $Equipo = new Equipo();
        $Equipo->cliente_id=$request->get('Ncliente');
        $Equipo->tipoequipo_id=$request->get('TipoEquipo');
        $Equipo->marca_id=$request->get('Marca');
        $Equipo->color_id=$request->get('Color');
        if (empty($_POST['Modelo'])) {$Equipo->modelo='Sin Modelo';}
        else{$Equipo->modelo=$request->get('Modelo');}
        
        if (empty($_POST['Serie'])) {$Equipo->modelo='Sin Serie';}
        else{ $Equipo->serie=$request->get('Serie');}
        
        if (empty($_POST['password'])) {$Equipo->modelo='Sin Contraseña'; }
        else{ $Equipo->claveequipo=$request->get('password');}
        
        if (empty($_POST['Accesorios'])) { $Equipo->modelo='Sin Accesorios'; }
        else{$Equipo->accesorios=$request->get('Accesorios');}

        $Equipo->problema=$request->get('problema');

        $Equipo->save();
        $Equipo = Equipo::latest('id')->first();
        return view('recepcion.show',compact('Equipo'))->with('success', 'Cliente creado correctamente.');
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Equipo = Equipo::find($id);
        return view('recepcion.show',compact('Equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        return view('recepcion.modal.edit')->with('cliente',$cliente);
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