<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProductRequest;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate();

        return view('product.dashboard.index', compact('products'));
    }

    public function create()
    {
        return view('product.dashboard.create');
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->all());

        return redirect('home/products');
    }

    public function edit(Product $product)
    {
        return view('product.dashboard.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());

        return redirect('home/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('home/products');
    }
}
