<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraJob</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200">
      <div class="container mx-auto px-4">
      @include('partials.navbar')
      @yield('content')
      </div>
    </body>
</html>
