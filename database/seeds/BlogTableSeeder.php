<?php

use Illuminate\Database\Seeder;
use App\blog;
use App\User;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $blog_user = User::where('name', 'user')->first();
        //
        // $blog = new Blog();
        // $blog->title = 'title';
        // $blog->description = 'description';
        // $blog->youDescription = 'youDescription';
        // $blog->youNationality = 'youNationality';
        // $blog->youAge = 'youAge';
        // $blog->content = 'content';
        // $blog->save();
        // $blog->users()->attach($blog_user);

        $blogposts = new blog();
        $blogposts->title = 'title';
        $blogposts->description = 'description';
        $blogposts->content = 'content';
        $blogposts->youDescription = 'youDescription';
        $blogposts->youNationality = 'youNationality';
        $blogposts->youAge = '1';
        $blogposts->user_id = '3';
        // $blogposts->user()->posts()->save();

        $blogposts->save();
        // $blogposts->users()->attach($blog_user);
    }
}
