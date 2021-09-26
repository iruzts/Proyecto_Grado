<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accesorio;

class AccesorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesorios = Accesorio:: all();
        return view('accesorio.index', compact('accesorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accesorio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accesorio = new Accesorio();
        $accesorio->descrip_ac = $request->get('accesorio');
        $accesorio -> save();

        return redirect('/accesorio');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accesorio = Acceosorio::find($id);
        return view('accesorio.edit')->with('accesorio',$accesorio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accesorio = Accesorio::find($id);
        return view('accesorio.edit')->with('accesorio',$accesorio);
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
        $accesorio =  Accesorio::find($id);
        $accesorio->descrip_ac = $request->get('accesorio');
        $accesorio -> save();

        return redirect('/accesorio'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accesorio = Accesorio::findOrFail($id);
        $accesorio->delete();

        return redirect('/accesorio')->with('success', 'empleado eliminado correctamente.');;
    }
}
