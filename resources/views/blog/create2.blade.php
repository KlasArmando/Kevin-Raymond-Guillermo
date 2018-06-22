@extends('style/layout')
@extends('style/blogpost')
@section('content2')

<!DOCTYPE html>
<html>
  <form action="{{route('blog.store')}}" method="POST">
    @csrf
    Title of your post:<br>
    <input type="text" name="title" value=""><br>

    Description of your trip in short :<br>
    <input type="text" name="description" value=""><br>

    Detailt description of your trip:<br>
    <input type="text" name="content" value=""><br><br>

    <input type="reset" value="reset"><br><br>
    <input type="submit" value="Send blogpost">
  </form>
</html>

@stop
