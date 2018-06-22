@extends('./style/layout')
@extends('./style/blogpost')
@section('content2')

  <form action="{{route('user.update', $user)}}" method="POST">
    {{ method_field('PATCH') }}
    @csrf
    Name:<br>
    <input type="text" name="name" value="{{$user->name}}"><br>

    Username:<br>
    <input type="text" name="username" value="{{$user->username}}"><br><br>

    Email:<br>
    <input type="text" name="email" value="{{$user->email}}"><br><br>

    <input type="reset" value="reset"><br><br>
    <input type="submit" value="Save">
  </form>

  <form action="{{route('user.destroy', $user)}}" method="POST">
    {{ method_field('DELETE') }}
    @csrf
    <input type="submit" value="DELETE">
  </form>
  <a href="{{ url('/home')}}"><button>Terug</button></a>
@stop
