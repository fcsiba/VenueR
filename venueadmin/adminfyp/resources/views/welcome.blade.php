<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HyberCube</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
                
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body id="admin_panel">
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif --}}

            <div class="content c_box">
                <img src="{{asset('media/lg.png')}}" alt="">
                <p>Super Admin Portal</p>
                <hr>
                <a href="{{ route('login') }}"><button class="btn btn-outline-dark btn_custom">LOG IN</button></a>
            </div>
        </div>
    </body>
</html>
