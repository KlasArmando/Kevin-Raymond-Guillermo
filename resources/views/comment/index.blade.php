@extends('style.shopstyle');
@section('content4')

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skoetrbojz</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>


    <div class="content">
            <div class="title m-b-md">
                Skoetrbojz
            </div>

        <div class="links">
            <a href="">Blog</a>
            <a href="https://laracasts.com">Random Location</a>
            <a href="https://laravel-news.com">Product List</a>
            <a href="https://forge.laravel.com">Our Journey</a>
            <a href="https://github.com/laravel/laravel">Contact</a>
        </div>


    </div>

    <hr>






    <a href="../comment/create" class="myButton">Create New Item</a>
    <div class="table">
        <table border="3">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach ($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>
    <button>
        <a href="comment/{{$comment->id}}/edit">Edit</a>
    </button>
                    </td>
                    <td>
                        <form action="{{route('comment.edit', $comment)}}" method="post">
                            {{ method_field ('EDIT')}}
                            @csrf
                            {{--<input type="submit" value="Edit">--}}

                        </form>


                        <form action="{{route('comment.destroy', $comment)}}" method="post">
                            {{ method_field ('DELETE')}}
                            @csrf
                            <input type="submit" value="Delete">

                        </form>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>









</body>
</html>
    @endsection