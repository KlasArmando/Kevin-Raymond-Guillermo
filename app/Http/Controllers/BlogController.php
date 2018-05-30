<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blogposts = blog::all();

      return view('blog/index', compact('blogposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $blogposts = blog::all();

      return view('blog/create', compact('blogposts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $blogposts = new blog;
      $blogposts->title = request('title');
      $blogposts->description = request('description');

      $blogposts->save();
      return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
      //$ingredient = DB::table('ingredients')->where('id', $gerechten->ingredients_id)->first();

      return view('blog/show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
      return view('blog/edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(blog $blog)
    {
      $blog->title = request('title');
      $blog->description = request('description');

      $blog->save();
      return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
      $blog->delete();
      return redirect('blog');
    }
}
