@extends('layouts.master')
@section('content')

    <table border=1>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
        </tr>

        <tr>
            <td>{{$travelad->id}}</td>
            <td>{{$travelad->name}}</td>
            <td>{{$travelad->title}}</td>
            <td>{{$travelad->description}}</td>
        </tr>
    </table>

@stop