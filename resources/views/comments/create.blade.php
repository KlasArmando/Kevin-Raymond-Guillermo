@extends('layouts.master');
@section('content');

<form action="{{route('comments.store')}}" method="post">

    @csrf
    Name:<br>
    <input type="text" name="name" value="">
    <br><br>
    Comment:<br>
    <input type="text" name="comment" value="">
    <input type="submit" value="Make">


</form>

@endsection