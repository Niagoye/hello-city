<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hello City</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
  @yield('contente')

    <footer>
           <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about">A propos</a></p>
    </footer> 
    </body>
</html>