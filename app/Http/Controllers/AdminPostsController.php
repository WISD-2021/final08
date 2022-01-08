<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Product;
class AdminPostsController extends Controller
{
    public function index()
    {
        $posts=Product::orderBy('created_at','DESC') -> get();
        $data=['posts'=>$posts];
        return view('admin.posts.index',$data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }
    public function store(PostRequest $request)
    {
        Product::create($request -> all());
        return redirect() ->route('admin.posts.index');
    }
    public function edit ($id)
    {
        $post=Product::find($id);
        $data=['post'=>$post];
        return view('admin.posts.edit',$data);
    }

    public function update(PostRequest $request,$id)
    {
        $post=Product::find($id);
        $post -> update($request -> all());
        return redirect()->route('admin.posts.index');
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()-> route('admin.posts.index');
    }

}
