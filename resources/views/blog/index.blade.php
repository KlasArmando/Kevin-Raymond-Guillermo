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

        <!-- Maps -->
        {{-- <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> --}}
        {{-- <script> key=AIzaSyAdPParCuBkYmnjyZDzfLiENHbhpk7bhKo </script> --}}

        <!-- Fonts -->
        <!-- Styles -->
        <style>

        </style>
    </head>

    <body>
        <div class="row">
          <div class="leftcolumn">

            @foreach ($blogposts as $post)
              <div class="card">
                <h2>{{$post->title}}</h2>
                <h5>{{$post->description}}, {{$post->created_at}}</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>
                  <button>
                    <a href='blog/{{$post->id}}'>
                      Click for full blog
                    </a>
                  </button>
                </p>
              </div>
            @endforeach

          </div>
          <div class="rightcolumn">
            <div class="card">
              <h2>Share your own journey</h2>
              {{-- <button><a href="blog/create">Create here</a></button> --}}
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
        <div class="pagination">
          {{$blogposts->links()}}
        </div>
    </body>

    <footer>
        <div class="footer">
          <h2>Footer</h2>
        </div>
    </footer>
</html>
@stop
