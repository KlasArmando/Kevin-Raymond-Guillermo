@extends('layout')
@section('content2')

  <form action="{{route('blog.update', $blog)}}" method="POST">
    {{ method_field('PATCH') }}
    @csrf
    Title:<br>
    <input type="text" name="title" value="{{$blog->title}}"><br>

    Description:<br>
    <input type="text" name="description" value="{{$blog->description}}"><br><br>

    <input type="submit" value="Edit">
  </form>

  <br>

  <form action="{{route('blog.destroy', $blog)}}" method="POST">
    {{ method_field('DELETE') }}
    @csrf
    <input type="submit" value="DELETE">
  </form>
  <a href="./"><button>Terug</button></a>
@stop
