  <!-- il herite de la page app.blade.php -->
  @extends('app')
   <!-- appel du yield -->
    @section('contente')
    <p>Construit par &hearts; Niagoye</p>
    <p><a href="/">revenir a la page d'acceuil</a></p>
    @endsection('contente')
   <!-- fin de l'appel -->
 