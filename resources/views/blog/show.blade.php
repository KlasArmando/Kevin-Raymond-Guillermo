@extends('style/layout')
@extends('style/blogpost')
@section('content2')

<!doctype html>
<html lang="html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skoetrbojz</title>

        <!-- Fonts -->
        <!-- Styles -->
        <style>

        </style>
    </head>

    <body>
      <div class="header">
        <h2>{{$blog->title}}</h2>
      </div>
        <div class="row">
          <div class="leftcolumn">
            <div class="card">
              <h2>{{$blog->title}}</h2>
              <h5>{{$blog->description}}, {{$blog->created_at}}</h5>
              <div class="fakeimg" style="height:200px;">Image</div>
              <p>{{$blog->content}}</p>
            </div>
            <div class="card">
              <h2>Maps</h2>

              <div id="googleMap" style="width:800px;height:400px;"></div>
                {{-- {{$blog->id}} --}}
                <script>
                  function myMap() {
                      var map{{$blog->id}} = {
                        center: new google.maps.LatLng(51.508742,-0.120850),
                        zoom:9,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      };
                      var map{{$blog->id}} = new google.maps.Map(document.getElementById("googleMap"), map{{$blog->id}});
                    };
                </script>
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrrbqtzNAhhuyDVMs9muxuKMxAQmWWRMs&callback=myMap"></script>
            </div>
          </div>
          <div class="rightcolumn">
            <div class="card">
              <h2>About Me</h2>
              <div class="fakeimg" style="height:100px;">Image</div>
              <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
              <h3>Popular Post</h3>
              <div class="fakeimg">Image</div><br>
              <div class="fakeimg">Image</div><br>
              <div class="fakeimg">Image</div>
            </div>
            <div class="card">
              <h3>Follow Me</h3>
              <p>Some text..</p>
            </div>
          </div>
        </div>
    </body>

    <footer>
        <div class="footer">
          <h2>Footer</h2>
        </div>
    </footer>
</html>
@stop
