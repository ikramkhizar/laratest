<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('author');

        if ($request->has('date') && $request->input('date')!=null) {
            $products = $products->whereDate('created_at', $request->input('date'));
        }

        $products = $products->get();

        return view('admin.products.index', compact('products'));
    }
}
