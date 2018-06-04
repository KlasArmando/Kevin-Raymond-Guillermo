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

    <form action="{{route('shop.update', $shop)}}" method="POST">
        {{method_field('PATCH')}}
        @csrf
        Name:<br>
        <input type="text" name="name" value="{{$shop->name}}">
        <br>
        Description:<br>
        <input type="text" name="text" value="{{$shop->email}}">
        <br>
        Image:<br>
        <input type="button" value="image">
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <form action="{{route('shop.destroy', $shop)}}" method="POST">
        {{method_field('DELETE')}}
        @csrf
        <input type="submit" value="Erase this bastard?">
    </form>

@stop