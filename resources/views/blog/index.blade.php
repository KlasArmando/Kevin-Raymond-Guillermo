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

      <form action="searchBlog" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search Blog"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search">Search</span>
					</button>
				</span>
			</div>
		</form>
        <div class="row">
          <div class="leftcolumn">

            @foreach ($blogposts as $post)
              <div class="card">
                <h2>{{$post->title}}</h2>
                <h5>{{$post->description}}, {{$post->created_at}}</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>
                  <button class="button hoverButton">
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
          <br>
        <div class="pagination">
          {{$blogposts->links()}}
        </div>
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
            <a href="{{ url('https://github.com/KlasArmando/Kevin-Raymond-Guillermo/') }}" target="_blank">
            Github
            </a>
          </button>
        </div>
    </footer>
</html>
@stop
