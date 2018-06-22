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
      <h1>Your found blog/blogs:</h1>
      <div class="leftcolumn">
        @if(isset($details))
          <table border="1px">
            <tr>
              <th>Tilte</th>
              <th>Description</th>
              <th>created_at</th>
            </tr>
          @foreach ($details as $blog)
            <tr>
              <td>{{$blog->title}}</td>
              <td>{{$blog->description}}</td>
              <td>{{$blog->created_at}}</td>
              <td>
                <button>
                  <a href='blog/{{$blog->id}}'>
                    Full blog
                  </a>
                </button>
              </td>
              <td>
                <button>
                  <a href='blog/{{$blog->id}}/edit'>
                    Edit blog
                  </a>
                </button>
              </td>
            </tr>
          @endforeach
        </table>
      @elseif(isset($message))
      <p>{{ $message }}</p>
      @endif
      </div>
  </body>
</html>
@endsection
