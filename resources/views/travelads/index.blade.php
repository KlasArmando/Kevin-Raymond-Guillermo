@extends('layouts.master')
@section('content')

<a href="travelads/create" class="myButton">Create New Ad</a>

<div class="tablead">
    <table border="9">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
        </tr>

    @foreach ($travelads as $travelad)
            <tr>
                <td>{{$travelad->id}}</td>
                <td>{{$travelad->name}}</td>
                <td>{{$travelad->title}}</td>
                <td>{{$travelad->description}}</td>
                <td><a href="comments/create" class="commentbutton">Comment</a></td>
                <td>

                    <form action="{{route('travelads.destroy', $travelad)}}" method="post">
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
