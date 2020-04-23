<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laratube -おすすめプログラミングチュートリアル動画</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gradient-brand bg-no-repeat bg-cover">
        <div id="app"></div>
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>