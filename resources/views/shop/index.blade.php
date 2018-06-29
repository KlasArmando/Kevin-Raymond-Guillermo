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


    <!--slideshow-->
    <div class="w3-container">
        <h2>Important Items</h2>
    </div>

    <div class="w3-content" style="max-width:400px">
        <img class="mySlides" src="http://www.eatkidfriendly.com/info/wp-content/uploads/2016/05/Cookies-Chips-Candies-Care-Package-Variety-Pack-Bundle-Assortment-Bulk-Sampler-40-Count-0.jpg" style="width:100%">
        <img class="mySlides" src="https://images-na.ssl-images-amazon.com/images/I/51dd6vv%2BnBL._SL500_AC_SS350_.jpg" style="width:100%">
        <img class="mySlides" src="https://static.ahold.com/cmgtcontent/media//001294000/000/001294042_002_365872_708.jpg" style="width:100%">
    </div>

    <div class="w3-center">
        <div class="w3-section">
            <button class="myButton " onclick="plusDivs(-1)" > ❮ Prev </button>
            <button class="myButton " onclick="plusDivs(1)" >Next ❯</button>
        </div>
        <button class="myButton" onclick="currentDiv(1)">1</button>
        <button class="myButton" onclick="currentDiv(2)">2</button>
        <button class="myButton" onclick="currentDiv(3)">3</button>
    </div>

<hr>
    <div class="container">
        <div class="grid">
            <div class="cell">
                <img src="https://www.gewoonvoorhem.nl/app/uploads/fly-images/50699/energy-drink-energiedrank-dood-overdosis-gewoonvoorhem-1000x750-c.jpg" class="responsive-image">
            </div>
            <div class="cell">
                <img src="https://shop.strato.de/WebRoot/Store6/Shops/61281730/51B2/0285/B9E7/879B/50BD/C0A8/28BD/F5C8/Power_1_Racing_2T_neu_12_x_1_L_ml.JPG" class="responsive-image">
            </div>
            <div class="cell">
                <img src="https://www.micook.nl/wp-content/uploads/2012/09/IMG_8043-imp.jpg" class="responsive-image">
            </div>
            <div class="cell">
                <img src="https://www.gewoonvoorhem.nl/app/uploads/fly-images/38267/Alta-Belleza-tequila-alcohol-man-man-1000x750-c.jpg" class="responsive-image">
            </div>
        </div>
    </div>



    <hr>

    <a href="shop/create" class="myButton">Create New Item</a>
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

            @foreach ($shops as $shop)
                <tr>
                    <td>{{$shop->id}}</td>
                    <td>{{$shop->name}}</td>
                    <td>{{$shop->description}}</td>
                    <td><a href="{{$shop->link}}" target="_blank">{{$shop->link}} </a></td>
                    <td>
    <button>
        <a href="shop/{{$shop->id}}/edit">Edit</a>
    </button>
                        {{--<form action="{{route('shop.edit', $shop)}}" method="post">--}}
                            {{--{{ method_field ('EDIT')}}--}}
                            {{--@csrf--}}
                            {{--<input type="submit" value="Edit">--}}

                        {{--</form>--}}
                    </td>
                    <td>
                        <form action="{{route('shop.destroy', $shop)}}" method="post">
                            {{ method_field ('DELETE')}}
                            @csrf
                            <input type="submit" value="Delete">

                        </form>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>





    <!-- script caroussel -->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-red";
        }
    </script>



</body>
</html>
    @endsection
