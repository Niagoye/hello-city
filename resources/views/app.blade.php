<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> 
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body class="flex flex-col items-center justify-between min-h-screen py-6">
    <main role="main" class="mt-12 flex flex-col justify-center items-center">
        @yield('contente')
    </main>
 

    <footer class="text-gray-400">
           <p>&copy; Copyright {{ date('Y') }} &middot; 
           @if(!Route::is('about'))
          <a href="{{route('about')}}" class="text-indigo-400 hover:text-indigo-600 underline">A propos</a>
           @endif
           </p>
    </footer> 
    </body>
</html>