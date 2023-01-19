<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productList = Product::all(); //eloquent
        //return $productList;
       return view('product.index', ['productList'=>$productList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            "nombre" => 'required|max:100',
            "description" => 'required',
            "precio" => 'required|numeric|gt:0'
        ], [
            'nombre.required' => 'Debes rellenar el nombre',
            'nombre.max' => 'No puede ser mayor de 100 caracteres',
            'description.required' => 'Debes rellenar el description',
            'precio.required' => 'Debes rellenar el precio',
            'precio.numeric' => 'Debe de ser un numero',
            'precio.gt' => 'Debe de ser mayor de 0'
    
        ]);
        /*
        $product = new Product();
        $product->nombre = $request->input('nombre');
        $product->description = $request->input('description');
        $product->precio = $request->input('precio');
        $product->save();

        return redirect()->route('products.index')->with('exito', 'Producto Creado');
        */
        Product::create($request->all());
        return redirect()->route('products.index')->with('exito', 'Producto Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        //return $product;
       return view('product.show', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
       return view('product.edit', ['product'=>$product]);
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
        "nombre" => 'required|max:100',
        "description" => 'required',
        "precio" => 'required|numeric|gt:0'
    ], [
        'nombre.required' => 'Debes rellenar el nombre',
        'nombre.max' => 'No puede ser mayor de 100 caracteres',
        'description.required' => 'Debes rellenar el description',
        'precio.required' => 'Debes rellenar el precio',
        'precio.numeric' => 'Debe de ser un numero',
        'precio.gt' => 'Debe de ser mayor de 0'

    ]);

        $product = Product::find($id);
        $product->nombre = $request->input('nombre');
        $product->description = $request->input('description');
        $product->precio = $request->input('precio');
        $product->save();
        return redirect()->route('products.index')->with('exito', 'Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('exito', 'Producto Borrado');
    }
}
