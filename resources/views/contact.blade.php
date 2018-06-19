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
    <div class="card">
      <h3>Name: Admin</h3>
      <h3>Phone number: 0612345678</h3>
      <h3>Email: admin@admin.com</h3>
    </div>
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
      </div>
  </footer>
</html>
@endsection
