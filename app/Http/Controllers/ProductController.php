<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // butuh data dari model dan view
        $products = Product::all();
        return view('products.index', compact(['products']));
    }

    public function showFormCreate()
    {
        return view('products.form_create');
    }

    public function prosesCreate(Request $request)
    {
        Product::create($request->all());
        return redirect('/products');

    }

    public function showFormEdit($id)
    {
        $product = Product::find($id);
        return view('products.form_edit', compact(['product']));
    }

    public function prosesEditData(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
    }

    public function prosesDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
