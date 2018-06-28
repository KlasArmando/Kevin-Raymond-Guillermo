<?php

namespace App\Http\Controllers;

use App\blog;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $blogposts = blog::all();
      $blogposts = blog::orderByDesc("created_at")->paginate(7);
      // foreach ($blogposts as $blog) {
      //   $blog->username = User::whereId($blog->user_id)->first()->name;
      // }

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
    public function store(Request $request, Blog $blog)
    {
      // $blogposts = new blog;
      // $blogposts->title = request('title');
      // $blogposts->description = request('description');
      // $blogposts->content = request('content');
      // $blogposts->youDescription = request('youDescription');
      // $blogposts->youNationality = request('youNationality');
      // $blogposts->youAge = request('youAge');
      //
      //
      // $blogposts->save();
      // return redirect('blog');
      $validatedData = $request->validate([
        'title' => 'required|max:20',
        'description' => 'required|max:255',
        'content' => 'required|max:255',
        'youDescription' => 'required|max:255',
        'youNationality' => 'required|max:50',
        'youAge' => 'required|max:2',
      ]);


      $post = new blog();
      $post->title = $request['title'];
      $post->description = $request['description'];
      $post->content = $request['content'];
      $post->youDescription = $request['youDescription'];
      $post->youNationality = $request['youNationality'];
      $post->youAge = $request['youAge'];
      $post->user_id = Auth::id();

      $post->save();

      // $request->user()->blogs()->save($post);
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
      // $blog = blog::orderByDesc("created_at");
      $blog->username = User::whereId($blog->user_id)->first()->name;

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
      $blog->content = request('content');
      $blog->youDescription = request('youDescription');
      $blog->youNationality = request('youNationality');
      $blog->youAge = request('youAge');

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
