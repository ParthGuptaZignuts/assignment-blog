<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required',
        ]);
    
        $comment = Comment::create($request->only('body', 'product_id'));
        // $comment = new Comment;


        // $comment->products_id = ;
        // $comment->body= $request->input('body');
        // $comment->save();
    
        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view ('comment',compact('comment'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'content'=>'required',
        ]);
        $comment = Comment::findOrFail($id);
        $comment->content=$request->content;
        $comment->save();
        return redirect()->back()->with('success','comment updated successfully');
    }
  
    public function destory($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
}
