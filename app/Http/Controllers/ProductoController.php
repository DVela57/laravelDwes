<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductoController extends Controller
{
    public function index() {
        $this->authorize('viewAny', Product::class);
        return view('productos.index');
    }

    public function indexhtml() {
        $this->authorize('viewAny', Product::class);
        $products = Product::all();
        return view('productos.indexhtml', ['productList' => $products]);
    }

    public function indexjson() {
        $this->authorize('viewAny', Product::class);
        $products = Product::all();
        return $products;
    }
}
