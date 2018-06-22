@extends('style/layout')
@extends('style/blogpost')
@section('content2')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="card">
      <h1>Our Journey</h1>
    </div>
  </body>
    <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br>
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
      </div>
  </footer>
</html>
@endsection
