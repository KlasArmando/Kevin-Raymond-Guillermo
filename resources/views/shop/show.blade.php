<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skoetrbojz</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background: #d9d9d9;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #f2f2f2, #a6a6a6);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #f2f2f2, #a6a6a6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            background-color: #d9d9d9;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 500vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }




    </style>
</head>
<body>
<div class="content">
    <div class="title m-b-md">
        Skoetrbojz
    </div>

    <div class="links">
        <a href="https://laravel.com/docs">Blog</a>
        <a href="https://laracasts.com">Random Location</a>
        <a href="https://laravel-news.com">Product List</a>
        <a href="https://forge.laravel.com">Our Journey</a>
        <a href="https://github.com/laravel/laravel">Contact</a>
    </div>


</div>
{{--
<div class="table">
    <table border="3">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Link</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>{{$shop->id}}</td>
            <td>{{$shop->name}}</td>
            <td>{{$shop->description}}</td>
            <td><a href="{{$shop->link}}" target="_blank">{{$shop->link}} </a></td>
            <td>
                <button>
                    <a href="shop/{{$shop->id}}/edit">Edit</a>
                </button>
                <form action="{{route('shop.edit', $shop)}}" method="post">
                {{ method_field ('EDIT')}}
                @csrf
                <input type="submit" value="Edit">

                </form>
            </td>
            <td>
                <form action="{{route('shop.destroy', $shop)}}" method="post">
                    {{ method_field ('DELETE')}}
                    @csrf
                    <input type="submit" value="Delete">

                </form>
            </td>
            </table>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('shop.store')}}" method="post">

        @csrf
        Name:<br>
        <input type="text" name="name" value="">
        <br><br>
        Desription<br>
        <input type="text" name="email" value="">
        <br><br>
        Link:<br>
        <input type="text" name="comment" value="">
        <br><br>
        <input type="submit" value="Make">

    </form>
<tr>
    <td>{{$comments->id}}</td>
    <td>{{$comments->name}}</td>
    <td>{{$comments->email}}</td>
    <td>{{$comments->comment}}</td>
    <td>
        <button>
            <a href="shop/{{$comments->id}}/edit">Edit</a>
          </button>
        <form action="{{route('shop.edit', $shop)}}" method="post">
        {{ method_field ('EDIT')}}
        @csrf
        <input type="submit" value="Edit">

        </form>
    </td>
    <td>
        <form action="{{route('shop.destroy', $comments)}}" method="post">
            {{ method_field ('DELETE')}}
            @csrf
            <input type="submit" value="Delete">

        </form>

    </td>

</tr> --}}






</body>
</html>
