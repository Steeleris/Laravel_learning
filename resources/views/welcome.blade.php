<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md hightlight">
                    Hi, {{ $name }}!
                </div>

                <div class="paragraph">
                    <p>
                        Today is year {{ date('Y') }}!

                        <br>

                        @foreach($cities as $city)
                            {{$city}}@unless($loop->last), @endunless
                        @endforeach
                        <br>

                        @if($weather)
                            The weather is {{ $weather }}!
                        @else
                            No case available.
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
