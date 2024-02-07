<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::latest()->paginate(3);
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
        $product = Product::where('id' ,$id)->first();
        return view('products.edit' ,['product' =>$product]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'description' =>'required'
        ]);
        
        $product = Product::where('id' ,$id)->first();
        $product->name = $request->name;
        $product->description = $request->description;
        
        $product->save();
        return back()->withSuccess('Blog Updated !!'); 
    }

    public function destory($id){
        $product = Product::where('id' ,$id)->first();
        $product->delete();

        return back()->withSuccess('Blog Deleted !!'); 
    }

    public function show($id){
        $product = Product::where('id' ,$id)->first();

        return view('products.show',['product' =>$product]);
    }
}
