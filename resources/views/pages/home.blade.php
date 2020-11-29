   <!-- il herite de la page app.blade.php -->
   @extends('app')

   @section('title',config('app.name'))

   <!-- appel du yield -->
    @section('contente')
        <h1>je suis de Mboumba </h1>
        <p>Il est {{ date('h:m A') }}.</p>
    @endsection
   <!-- fin de l'appel -->
