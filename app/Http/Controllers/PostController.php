<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts =  Post::latest()->paginate(3);
       $post_categorys =  Category::orderBy('post_category', "asc")->get();

    //    dd($post_categorys);

       $trashs = Post::onlyTrashed()->paginate(2);

        return view('post', compact('posts', 'trashs', 'post_categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Post::create($request->all());
        
        return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $post = Post::FindorFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::FindorFail($id);

        $post->update([

           'post_tittle'=> $request-> post_tittle,
            'post_content' => $request-> post_content,
              'post_category'=> $request -> post_category,
              'post_tags'=> $request -> post_tags
        ]);

        return redirect()->route('read_all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete ($id)
    {
        $post = Post::onlyTrashed()->where("id", $id)->forceDelete();

        return redirect()->back();
    }

    public function trash ($id)
    {
        $post = Post::FindorFail($id)->delete();


        return redirect()->back();
    }

    public function restore ($id)
    {
        Post::withTrashed()->where("id", $id)->restore();


        return redirect()->back();
    }
}
    