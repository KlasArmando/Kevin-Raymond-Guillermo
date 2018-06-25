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
      <h1>Contact</h1>
    </div>

    <h4>Contact Admin</h4>
    <div class="card">
      <h3>Name: Admin</h3>
      <h3>Email: admin@admin.com</h3>
    </div>
      <br><br>

    <h4>Contact others</h4>
    @foreach ($users as $user)
      <div class="card">
        <h3>Name: {{$user->name}}</h3>
        <h3>Email: {{$user->email}}</h3>
      </div>
    @endforeach
  </body>
    <br><br><br><br><br><br><br><br>
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
