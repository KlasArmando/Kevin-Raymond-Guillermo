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
    </head>

    <body>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <form action="{{route('blog.store')}}" method="POST">
        @csrf

        <div class="header">
          <h2><input type="text" name="title" placeholder="Title of your trip"></h2>
        </div>
          <div class="row">
            <div class="leftcolumn">
              <div class="card">
                <h2>Title</h2>
                <h5>
                  Description of your trip in short:<br>
                  <textarea name="description" rows="2" cols="60" wrap="hard" placeholder="Describe..."></textarea>
                  ,created_at
                </h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>
                  Detailt description of your trip:<br>
                  <textarea name="content" rows="5" cols="60" wrap="hard" placeholder="Describe..."></textarea>
                </p>
              </div>
              <div class="card">
                <h2>Photo's</h2>
                <div class="fakeimg" style="height:200px;">Image</div>

              </div>
              <div class="card">
                <h2>Maps</h2>

                <div id="googleMap" style="width:800px;height:400px;"></div>
                  <script>
                    function myMap() {
                        var map1 = {
                          center: new google.maps.LatLng(51.508742,-0.120850),
                          zoom:9,
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        var map1 = new google.maps.Map(document.getElementById("googleMap"), map1);
                      };
                  </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrrbqtzNAhhuyDVMs9muxuKMxAQmWWRMs&callback=myMap"></script>
              </div>

            </div>
            <div class="rightcolumn">
              <div class="card">
                <h2>About Me,</h2>
                {{-- <h3>{{ Auth::user()->username }}</h3> --}}
                <div class="fakeimg" style="height:100px;">Image</div>
                  <br>
                <h4>Me in short:</h4>
                <textarea name="youDescription" rows="1" cols="40" wrap="hard" placeholder="Describe you in short"></textarea>
                  <br>
                <h4>Nationality:</h4>
                <input type="text" name="youNationality" rows="1" cols="40" wrap="hard" placeholder="Youre land">
                  <br>
                <h4>Age:</h4>
                <input type="text" name="youAge" rows="1" cols="40" wrap="hard" placeholder="Youre age">

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

          <br><br>
          <input type="reset" value="reset">
          <input type="submit" value="Send blogpost">
      </form>
    </body>
    <footer>
        <div class="footer">
          <button class="button hoverButton">
            <a href="{{ url('/') }}">
            Home Page
            </a>
          </button>
          <button class="button hoverButton">
            <a href="{{ url('/blog') }}">
            Blog page
            </a>
          </button>
          <button class="button hoverButton">
            <a href="{{ url('/contact') }}">
            Contact
            </a>
          </button>
          <button class="button hoverButton">
            <a href="{{ url('https://github.com/KlasArmando/Kevin-Raymond-Guillermo') }}" target="_blank">
            Github
            </a>
          </button>
        </div>
    </footer>
</html>
@stop
