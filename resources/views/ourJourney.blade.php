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
    <div class="card">
      <h1>The journey to Luxembourg!</h1>
      <div class="card">
        <h3>Ride with our scooter to a camping in kautenbach a town in Luxembourg!</h3>
      </div>
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
        <button class="button hoverButton">
          <a href="{{ url('https://github.com/KlasArmando/Kevin-Raymond-Guillermo') }}" target="_blank">
          Github
          </a>
        </button>
      </div>
  </footer>
</html>
@endsection
