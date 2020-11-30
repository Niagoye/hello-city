   <!-- il herite de la page app.blade.php -->
   @extends('app')

   @section('title',config('app.name'))

   <!-- appel du yield -->
    @section('contente')
    <img src="{{asset('/images/ville.jpg')}}" alt="Dakar City" class="rounded shadow-md " style="width:200px ; heigth:200px; border-radius:10px; ">
        <h1 class="text-indigo-800 font-semibold mt-5 text-3xl sm:text-5xl">Je suis du Sénégal </h1>
        <p class="text-gray-700 text-lg ">Il est actuellement {{ date('h:m A') }}.</p>
    @endsection
   <!-- fin de l'appel -->
