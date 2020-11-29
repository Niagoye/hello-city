  <!-- il herite de la page app.blade.php -->
  @extends('app')

    @section('title')
        About | | {{config('app.name')}}
    @endsection
    
   <!-- appel du yield -->
    @section('contente')
    <p>Construit par &hearts; Niagoye</p>
    <p><a href="{{route('home')}}">revenir a la page d'acceuil</a></p>
    @endsection
   <!-- fin de l'appel -->
 