<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    </head>
    <body>
        <div class="container">
            <div id="root"></div>
            <p>
                <a href="{{ route('events.show', ['id' => 42]) }}">Events 42</a>
            </p>
        </div>
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
