<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return Product::all();
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>"required|string",
                'price'=>"required|numeric"
            ]
        );
        return Product::create($request->all());
    }


    public function show($id)
    {
        return Product::find($id);
    }



    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        
        $product->update($request->all());
        $request->validate(
            [
                'name'=>"required|string",
                'price'=>"required|numeric"
            ]
        );
        return $product;
    }


    public function destroy($id)
    {
        return Product::destroy($id);

    }
}
