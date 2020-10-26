<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>ToDo App</title>
    </head>
    <body>
         @yield('content')
    </body>
</html>