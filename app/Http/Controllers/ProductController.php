<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::get();
        return view('Products.index' ,['products' =>$products]);
    }

    public function create(){
        return view('Products.create');
    }

    public function store(Request $request){
        // dd($request->all());

        // this is done for validating data comming from the user
        $request->validate([
            'name' => 'required',
            'description' =>'required'
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        
        $product->save();
        return back()->withSuccess('Blog Created !!');
    }

    public function edit($id){
        dd($id);
    }
}
