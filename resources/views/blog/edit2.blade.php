@extends('style/layout')
@extends('style/blogpost')
@section('content2')

  <form action="{{route('blog.update', $blog)}}" method="POST">
    {{ method_field('PATCH') }}
    @csrf
    Title:<br>
    <input type="text" name="title" value="{{$blog->title}}"><br>

    Description:<br>
    <input type="text" name="description" value="{{$blog->description}}"><br><br>

    Detailt description of your trip:<br>
    <input type="text" name="content" value="{{$blog->content}}"><br><br>

    <input type="reset" value="reset"><br><br>
    <input type="submit" value="Save">
  </form>

  <form action="{{route('blog.destroy', $blog)}}" method="POST">
    {{ method_field('DELETE') }}
    @csrf
    <input type="submit" value="DELETE">
  </form>
  <a href="./"><button>Terug</button></a>
@stop
