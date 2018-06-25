@extends('layouts.app')
@extends('layouts/style')

@section('content')
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <div class="page">
          <h1>All Posts</h1>
          <div class="card">
            <table border="1px">
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Full post</th>
                <th>Edit post</th>
              </tr>
            @foreach ($blogposts as $post)
              <tr>
                <td> {{$post->title}}       </td>
                <td> {{$post->description}} </td>
                <td> {{$post->created_at}}  </td>
                <td>
                  <button>
                    <a href='blog/{{$post->id}}'>
                      Full blog
                    </a>
                  </button>
                </td>
                <td>
                  <button>
                    <a href='blog/{{$post->id}}/edit'>
                      Edit blog
                    </a>
                  </button>
                </td>
              </tr>
            @endforeach
            </table>
        </div>
          <br>
        <form action="searchAdminBlog" method="POST" role="search">
        {{ csrf_field() }}
          <div class="input-group">
            <input type="text" class="form-control" name="q"
              placeholder="Search Blog"> <span class="input-group-btn">
              <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
              </button>
            </span>
          </div>
        </form>
        <br>

        <h1>All Users</h1>
        <div class="card">
          <table border="1px">
            <tr>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Edit</th>
            </tr>
              @foreach ($users as $user)
                <tr>
                  <td> {{$user->name}}     </td>
                  <td> {{$user->username}} </td>
                  <td> {{$user->email}}    </td>
                  <td>
                    <button>
                      <a href="user/{{$user->id}}/edit">
                        Edit
                      </a>
                    </button>
                  </td>
                </tr>
              @endforeach
          </table>
        </div>
          <br>
        <form action="searchUser" method="POST" role="search">
        {{ csrf_field() }}
          <div class="input-group">
            <input type="text" class="form-control" name="q"
              placeholder="Search User"> <span class="input-group-btn">
              <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
              </button>
            </span>
          </div>
        </form>
          <br>
        <div class="pagination">
          {{$blogposts->links()}}
        </div>
      </div>
      </div>
    </body>
  </html>
@endsection
