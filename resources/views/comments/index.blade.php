@extends('layouts.master')
@section('content')

    <a href="../comments/create" class="myButton">Create New Comment</a>
    <div class="tablead">
        <table border="9">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Comment</th>
            </tr>

            @foreach ($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>

                        <form action="{{route('comments.destroy', $comment)}}" method="post">
                            {{ method_field ('DELETE')}}
                            @csrf

                            <input type="submit" value="Delete">

                        </form>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>


@endsection
