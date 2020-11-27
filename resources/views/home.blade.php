<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello City</title>
    </head>
    <body>
        <h1>je suis de Mboumba </h1>
        <p>Il est {{ date('h:m A') }}.</p>
        <footer>
           <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about">A propos</a></p>
        </footer> 
    </body>
</html>
