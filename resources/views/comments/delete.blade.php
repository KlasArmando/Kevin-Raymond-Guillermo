@extends('layouts.master')
@section('content')

    <form action="{{route('comments.destroy')}}" method="post">

        @csrf

        Name:<br>
        <input type="text" name="name" value="">
        <br><br>
        Comment:<br>
        <input type="text" name="comment" value="">
        <br><br>


    </form>

@stop