@extends('layouts.app')
@extends('layouts/style')

@section('content')
  <div class="page">
    <!DOCTYPE html>
    <html>
      <div class="leftcolumn">

      {{-- <h1>Your Account</h1>
        <table border="1px">
          <tr>
            <th>name</th>
            <th>username</th>
            <th>email</th>
          </tr>
          @foreach ($users as $user)
          <tr>
            <td>
              <button>
                <a href="user/{{$user->id}}/edit">
                  klik
                </a>
              </button>
            </td>
          </tr>
        @endforeach
        </table> --}}

      <h1>Your Posts</h1>
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

        <div class="pagination">
          {{$blogposts->links()}}
        </div>
      </div>
    </html>
  </div>
@endsection

{{-- @section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif

You are logged in!
</div>
</div>
</div>
</div>
</div>
@endsection --}}
