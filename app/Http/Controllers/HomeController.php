<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\User;
use Auth;

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

        if(Auth::user()->roles->first()->name == 'admin'){
          $blogposts = blog::orderByDesc("created_at")->paginate(7);
          $users = User::all();
          return view('adminHome', compact('blogposts', 'users'));
        }else{
          $blogposts = blog::where('user_id', Auth::id())->paginate(7);
          $users = User::all();
          return view('home', compact('blogposts', 'users'));
        }

        // var_dump(Auth::id());
        // foreach ($blogposts as $blog) {
          // $blog->own = User::where(user_id, Auth::User->id)->first()->name;
          // $blog::where('user_id', Auth::id());
        // }

        // return view('home', compact('blogposts'));
    }

    public function show(User $user)
    {
      //$ingredient = DB::table('ingredients')->where('id', $gerechten->ingredients_id)->first();
      // $user = user::All();
      // $user->username = User::whereId($blog->user_id)->first()->name;

      return view('Auth/show', compact('user'));
    }

    public function edit(user $user)
    {
      return view('auth/edit', compact('user'));
    }

    public function update(user $user)
    {
      $user->name = request('name');
      $user->username = request('username');
      $user->email = request('email');

      $user->save();
      return redirect('user');
    }

    public function destroy(user $user)
    {
      $user->delete();
      return redirect('user');
    }
}
