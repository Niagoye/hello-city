   <!-- il herite de la page app.blade.php -->
   @extends('app')
   <!-- appel du yield -->
    @section('contente')
        <h1>je suis de Mboumba </h1>
        <p>Il est {{ date('h:m A') }}.</p>
    @endsection('contente')
   <!-- fin de l'appel -->
