<?php

namespace App\Http\Controllers;

use App\Propietario;
use App\Http\Requests\StorePropietario;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PropietariosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');//que siempre verifique que este autorizado
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propietarios = Propietario::orderBy('id')->pluck('id','nombre');

        return view('propietarios.create', compact('propietarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropietario $request)
    {
        $propietario = new Propietario($request->all());

        $propietario->nombre  = $request->get('nombre');
        $propietario->cedula  = $request->get('cedula');
        $propietario->descripcion  = $request->get('descripcion');
        $propietario->telefono  = $request->get('telefono');

        $propietario->email  = auth()->user()->email;
        $propietario->user_id  = auth()->user()->id;

        $propietario->save();

        return redirect()->route('propietarios.show',$propietario);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propietario = Propietario::where('user_id', auth()->user()->id)
        ->where('id',$id)
        ->first();

        return view('propietarios.show',compact('propietario'));
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
