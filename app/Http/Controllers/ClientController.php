<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Order;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientList = Client::all(); //eloquent
       return view('client.index', ['clientList'=>$clientList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "DNI" => 'required',
            "nombre" => 'required',
            "apellidos" => 'required',
            "telefono" => 'required',
            "email" => 'required'
        ], [
            'DNI.required' => 'Debes rellenar el DNI',
            'nombre.required' => 'Debes rellenar el nombre',
            'apellidos.required' => 'Debes rellenar los apeliidos',
            'telefono.required' => 'Debes rellenar el telefono',
            'email.required' => 'Debes rellenar el email'
    
        ]);
    
        Client::create($request->all());
        return redirect()->route('clients.index')->with('exito', 'Cliente Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $client = Client::find($id);
       /*$orders = $client->orders();
       dd($client->orders);*/
       return view('client.show', ['client'=>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
       
       return view('client.edit', ['client'=>$client]);
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
        $request->validate([
            "DNI" => 'required',
            "nombre" => 'required',
            "apellidos" => 'required',
            "telefono" => 'required',
            "email" => 'required'
        ], [
            'DNI.required' => 'Debes rellenar el DNI',
            'nombre.required' => 'Debes rellenar el nombre',
            'apellidos.required' => 'Debes rellenar los apeliidos',
            'telefono.required' => 'Debes rellenar el telefono',
            'email.required' => 'Debes rellenar el email'
    
        ]);

        $client = Client::find($id);
        $client->DNI = $request->input('DNI');
        $client->nombre = $request->input('nombre');
        $client->apellidos = $request->input('apellidos');
        $client->telefono = $request->input('telefono');
        $client->email = $request->input('email');
        $client->save();
        return redirect()->route('clients.index')->with('exito', 'Cliente Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients.index')->with('exito', 'Cliente Borrado');
    }
}
