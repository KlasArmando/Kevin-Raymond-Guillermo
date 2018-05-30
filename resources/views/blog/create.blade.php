@extends('layout')
@section('content2')

<!DOCTYPE html>
<html>
  <form action="{{route('blog.store')}}" method="POST">
    @csrf
    Title:<br>
    <input type="text" name="title" value=""><br>

    Description:<br>
    <input type="text" name="description" value=""><br><br>

    <input type="submit" value="Send blogpost">
  </form>
</html>

@stop
