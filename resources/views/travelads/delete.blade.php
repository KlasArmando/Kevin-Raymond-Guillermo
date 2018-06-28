@extends('layouts.master')
@section('content')

    <form action="{{route('travelads.destroy')}}" method="post">

        @csrf

        Name:<br>
        <input type="text" name="name" value="">
        <br><br>
        Title:<br>
        <input type="text" name="title" value="">
        <br><br>
        Description:<br>
        <input type="text" name="description" value="">
        <br><br>
        <input type="submit" value="Make">

    </form>

@stop