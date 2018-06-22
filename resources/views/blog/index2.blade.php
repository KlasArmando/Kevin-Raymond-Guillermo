@extends('layout')
@section('content2')
    <button><a href="blog/create">Create blogpost</a></button>

    <table style="margin:auto;">
      <tr>
        <th>Title</th>
        <th>Bekijk</th>
      </tr>
          @foreach ($blogposts as $post)
            <tr>
              <td>{{$post->title}}</td>
              <td><button><a href='blog/{{$post->id}}'>klik</button></td>
            </tr>
          @endforeach
    </table>
@stop
