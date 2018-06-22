@extends('layout');

@section('content')

<form action="{{route('shop.store')}}" method="post">

    @csrf
    Name:<br>
    <input type="text" name="name" value="">
    <br><br>
    Desription<br>
    <input type="text" name="description" value="">
    <br><br>
    Link:<br>
    <input type="text" name="link" value="">
    <br><br>
    <input type="submit" value="Make">

</form>

@endsection