<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json(['status' => 'ok', 'data' => $products], 200);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "nombre" => 'required|max:100',
            "description" => 'required',
            "precio" => 'required|numeric|gt:0'
        ]);

        //fallo
        if ($validator->fails()) {
            return response()->json([
                'status' => 'nok',
                "data" => $validator->errors()
            ], 422);
        }
        $newProduct = Product::create($request->all());

        return response()->json([
            'status' => "ok",
            "data" => $newProduct
        ], 201);
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

        if (!$product) {
            return response()->json(['errors' => (['code' => 404, 'message' => 'Product Not Fouund'])], 404);
        }
        return response()->json(['status' => 'correcto', 'data' =>  $product], 200);
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
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['status' => 'nok', 'data' => 'Product Not Fouund'], 404);
        }

        $validator = Validator::make($request->all(), [
            "nombre" => 'required|max:100',
            "description" => 'required',
            "precio" => 'required|numeric|gt:0'
        ]);

        //fallo
        if ($validator->fails()) {
            return response()->json([
                'status' => 'nok',
                "data" => $validator->errors()
            ], 422);
        }

        //rellenar con datos y guardar
        $product->fill($request->all());
        $product->save();
        return response()->json(['status' => 'ok', 'data' => $product], 200);
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

        if (!$product) {
            return response()->json(['status' => 'nok', 'data' => 'Product Not Fouund'], 404);
        }

       try {
        $product->delete();
        return response()->json(['status' => 'ok'],204);
       } catch (\Throwable $th) {
            return response()->json(['status' => 'nok',
             'data' => $th->getMessage()],404);
       }

    }
}
