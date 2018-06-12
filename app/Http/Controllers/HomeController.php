<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'moderator', 'admin']);

        // $blogposts = blog::orderByDesc("created_at")->paginate(2);
        // foreach ($blogposts as $blog) {
        //   $blog->username = User::whereId($blog->user_id)->first()->name . " [" . User::whereId($blog->user_id)->first()->role . "]";
        // }

        return view('home');
    }
}
