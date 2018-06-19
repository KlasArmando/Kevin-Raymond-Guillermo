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
      <h1>Your found user/users:</h1>
      <div class="leftcolumn">
        @if(isset($details))
          <table border="1px">
            <tr>
              <th>Tilte or created_at</th>
              <th>Name</th>
              <th>Email</th>
            </tr>
          @foreach ($details as $user)
            <tr>
              <td>{{$user->title}} {{$user->created_at}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                <button>
                  <a href='user/{{$user->id}}/edit'>
                    Edit user
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
