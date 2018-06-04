<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skoetrbojz</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        .content :hover {
            background-color: black;
            color: whitesmoke;}


        .test1{
            box-shadow: 15px 15px 15px grey;
        }

        .test2{
            box-shadow: 15px 15px 15px grey;
        }

        .test3{
            box-shadow: 15px 15px 15px grey;
        }

        .testbox {
            display: flex;
            margin-top: 50px;
            margin-left: 200px;
            margin-right: 200px;
        }

        .testbox .test1, .test2, .test3 {
            margin: 15px;
            width:30%


        }
        .testbox .test1 img, .test2 img, .test3 img {
            width: 100%;


        }
        .testbox .test1 p, .test2 p, .test3 p {
            text-align: center;
            text-decoration: none;


        }

        h2{
            text-align: center;
        }

        hr {
            color: #123455;
        }




        .myButton {
            -moz-box-shadow: 3px 4px 0 0 #899599;
            -webkit-box-shadow: 3px 4px 0 0 #899599;
            box-shadow: 3px 4px 0 0 #899599;
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #bab1ba));
            background:-moz-linear-gradient(top, #ededed 5%, #bab1ba 100%);
            background:-webkit-linear-gradient(top, #ededed 5%, #bab1ba 100%);
            background:-o-linear-gradient(top, #ededed 5%, #bab1ba 100%);
            background:-ms-linear-gradient(top, #ededed 5%, #bab1ba 100%);
            background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#bab1ba',GradientType=0);
            background-color:#ededed;
            -moz-border-radius:2px;
            -webkit-border-radius:2px;
            border-radius:2px;
            border:1px solid #d6bcd6;
            display:inline-block;
            cursor:pointer;
            color:#3a8a9e;
            font-family:Arial;
            font-size:17px;
            padding:7px 20px;
            text-decoration:none;
            text-shadow:0 1px 0 #e1e2ed;
        }
        .myButton:hover {
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bab1ba), color-stop(1, #ededed));
            background:-moz-linear-gradient(top, #bab1ba 5%, #ededed 100%);
            background:-webkit-linear-gradient(top, #bab1ba 5%, #ededed 100%);
            background:-o-linear-gradient(top, #bab1ba 5%, #ededed 100%);
            background:-ms-linear-gradient(top, #bab1ba 5%, #ededed 100%);
            background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bab1ba', endColorstr='#ededed',GradientType=0);
            background-color:#bab1ba;
        }
        .myButton:active {
            position:relative;
            top:1px;
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

    <hr>


    <!--slideshow-->
    <div class="w3-container">
        <h2>Important Items</h2>
    </div>

    <div class="w3-content" style="max-width:400px">
        <img class="mySlides" src="snacks3.jpg" style="width:100%">
        <img class="mySlides" src="61C7eHWiWKL._SY355_.jpg" style="width:100%">
        <img class="mySlides" src="001747896_001_415700_708.jpg" style="width:100%">
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
    <div class="testbox">
        <div class="test1">
            <a href="#">
                <img src="de-stijgende-populariteit-van-energydrink.jpg" >
                <p>energy</p>
            </a>
        </div>
        <div class="test2">
            <a href="#">
                <img src="techno-motorolie.jpg"  >
                <p>Motorolie</p>
            </a>
        </div>
        <div class="test3">
            <a href="#">
                <img src="images.jpg">
                <p>twee takt olie</p>
            </a>
        </div>
    </div>

    <hr>

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