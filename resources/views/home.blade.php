@extends('layout')

@section('title', 'Accueil')

@section('content')
    <h1>Page d'accueil du site</h1>
    
    <section>
        <h2>Derniere question posez </h2>
        
        @include('posts.list', ['posts' => $posts])
    </section>
@endsection