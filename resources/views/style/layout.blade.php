{{-- @extends('css/layout.scss') --}}
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skoetrbojz</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/layout.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        {{-- <style>
            html, body {
                background: #d9d9d9;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to bottom, #f2f2f2, #a6a6a6);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to bottom, #f2f2f2, #a6a6a6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background-repeat: no-repeat;
                background-position: right top;
                background-attachment: fixed;

                background-color: #d9d9d9;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: -50vh;
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

            .content2 {
                margin-top: 50px;
            }

            .title > a{
                font-size: 84px;
                text-decoration: none;
                text-transform: uppercase;
            }

            .titleBorder {
                  margin-top: 10px;
                  border-bottom: 2px solid #636b6f;
                  border-radius:10px;
            }

            .invisibleBorderText {
              display: none;
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

        </style> --}}
		<style>
		 @media all and (max-width: 800px) {
                .links {
                    justify-content: space-around;
                }
            }

            @media all and (max-width: 600px) {
                .links {
                    -webkit-flex-flow: column wrap;
                    flex-flow: column wrap;
                    padding: 0;
                }
                .links a {
                    text-align: center;
                    padding: 10px;
                    border-top: 1px solid rgba(255,255,255,0.3);
                    border-bottom: 1px solid rgba(0,0,0,0.1);
                }


                .links :last-of-type a {
                    border-bottom: none;
                }
            }

		</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->roles->first()->name }} panel</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <a href="{{ url('/') }}">
                    Skoetrbojz
                  </a>
                </div>

                <div class="links">
                    <a href="{{ url('/blog') }}">Blogs</a>
                    <a href="#">Random Location</a>
                    <a href="#">Product List</a>
                    <a href="#">Travel ads</a>
                    <a href="{{ url('ourJourney')}}">Our Journey</a>
                    <a href="{{ url('contact')}}">Contact</a>
                </div>

                <div class="titleBorder">
                  _
                </div>

                <div class="content2">
                    @yield('content2')
                </div>
            </div>


        </div>
    </body>
</html>
