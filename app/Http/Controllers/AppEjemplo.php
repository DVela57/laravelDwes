<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppEjemplo extends Controller
{

    public function mostrarinformacion()
    {
        $nombremodulo = "dwes";
        $ciclo = "DAW";
        $departamentos["nombredpto"] = "informatica";
        $departamentos["ubicacion"] = "Edificio B";

       // $datos["nombremodulo"] = "dwes";
       // $datos["ciclo"] = "DAW";
        //return view('muestraAsignatura', 
        //array("nombremodulo" => "dwes", "ciclo" => "DAW")

       // return view('muestraAsignatura', 
       // ["nombremodulo" => "dwes", "ciclo" => "DAW"]

        //return view('muestraAsignatura')->with( 
        //["nombremodulo" => "dwes", "ciclo" => "DAW"]

        //return view('asignaturas.muestraAsignatura', compact('nombremodulo', 'ciclo',
        //'departamentos')
        
    //);

            return view('asignaturas.page');    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }
}
