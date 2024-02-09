<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::latest()->paginate(6);
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
        return redirect()->route('products.index')->with('success', 'Task created successfully');
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
        return redirect()->route('products.index')->with('success', 'Blog updated successfully!');

        // showing message but not redirecting 
        // return redirect('/products/'.$id.'/edit')->with('success', 'Blog updated successfully!');


    }

    public function destory($id){
        $product = Product::where('id' ,$id)->first();
        $product->delete();

        return back()->withSuccess('Blog Deleted !!'); 
    }

    public function show($id){
        // $product = Product::where('id' ,$id)->first();
        // return view('products.show',['product' =>$product]);

       

        $product = Product::findOrFail($id);
        $comments = Comment::where('product_id',$id)->get();
        return view('products.show', compact('product','comments'));

    }





}
