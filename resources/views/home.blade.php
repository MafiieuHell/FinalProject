@extends('layout')

@section('title', 'Accueil')

@section('content')
    <h1>Page d'accueil du site</h1>
    
    <section>
<<<<<<< HEAD
        <h2>Les 5 derniers articles</h2>
=======
        <h2>Derniere question posez </h2>
>>>>>>> 2f0204c532da7ee68df451ca110dab49887a7b86
        
        @include('posts.list', ['posts' => $posts])
    </section>
@endsection