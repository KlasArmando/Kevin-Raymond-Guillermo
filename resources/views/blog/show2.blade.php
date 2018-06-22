@extends('layout')
@section('content2')

<table style="margin:auto;">
  <tr>
    <th>Name</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>{{$blog->title}}</td>
    <td>{{$blog->description}}</td>
  </tr>

  <a href="{{$blog->id}}/edit"><button type="button">EDIT</button></a>
  <a href="./"><button>Terug</button></a>
</table>
@stop
