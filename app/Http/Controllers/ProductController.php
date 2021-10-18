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

    public function showFormEdit($id)
    {
        $product = Product::find($id);
        return view('products.form_edit', compact(['product']));
    }
}
