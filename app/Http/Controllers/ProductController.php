<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index() {
        $products = Product::latest()->paginate(10);
        return view("products.index",[
            'products' => $products
        ]);
    }

    public function create() {
        return view("products.create");
    }

    public function save(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'owner' => 'required',
        ]);

        $newProduct = Product::create($data);

        return redirect('/products');
    }

    public function edit(Product $product) {
        return view('products.edit',['product'=>$product]);
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'owner' => 'required',
        ]);

        $product->update($data);

        return redirect('/products')->with('success',"Update product successfully");
    }

    public function delete(Product $product) {
        $product->delete();

        return redirect('/products')->with('success',"Delete product successfully");
    }

    public function logout() {
        return redirect('/login');
    }
}
