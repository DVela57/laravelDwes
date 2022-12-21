<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
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
        //muestra formulario
        return view('asignaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recoje los datos del formulario de alta

        $datos = $request->validate([
            'nombre' => 'required|max:7',
            'curso' => 'required|integer|max:2|regex:/[1,2]/',
            'ciclo' => array('required','size:3','regex:/DA[M|W]/'),
        ], [
            'nombre.required' => 'Debes rellenar el nombre',
            'curso.required' => 'Debes rellenar el curso',
            'ciclo.required' => 'Debes rellenar el ciclo',
            'nombre.max' => 'El nombre solo puede tener 7 caracteres',
            'curso.integer' => 'El curso solo puede ser un numero',
            'curso.regex' => 'El curso solo puede ser 1 o 2',
            'curso.max' => 'El curso solo puede ser 1 o 2',
            'ciclo.regex' => 'El ciclo solo puede ser DAW o DAM',
            'ciclo.size' => 'El ciclo solo puede ser DAW o DAM',
        ]);

        dd($datos);

        /*$nombre = $request->input('nombre');
        $curso = $request->input('curso');
        $ciclo = $request->input('ciclo');
        $comentarios = $request->input('comentarios');*/

        //dd($nombre, $curso, $ciclo, $comentarios);

        //recojer todos los datos del formulario

        /*$datos = $request->all();
        dd($datos);*/

        //recojer datos especificos
        /*$datos = $request->only('nombre', 'curso', 'ciclo');
        dd($datos);*/

        //todos excepto algunos
        /*$datos = $request->except('_token', 'nombre');
        dd($datos);*/

        //verificar que existe un campo
       /* if($request->has('nuevocampo')) {
            $nuevocampo = $request->input('nuevocampo');
            dd($nuevocampo);
        } else {
            dd("el campo no existe");
        }*/

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
