  <!-- il herite de la page app.blade.php -->
  @extends('app')

    @section('title')
        About | | {{config('app.name')}}
    @endsection
    
   <!-- appel du yield -->
    @section('contente')
    <img src="{{asset('/images/img.jpg')}}" alt="My Profile" style="width:200px ; heigth:200px; border-radius:100px; ">
    <p class="text-gray-700 mt-5">Construit par <span class="text-pink-500"> &hearts; </span> Niagoye</p>
    <p><a href="{{route('home')}}" class="text-indigo-400 hover:text-indigo-600 underline"> revenir a la page d'acceuil</a></p>
    @endsection
   <!-- fin de l'appel -->
 