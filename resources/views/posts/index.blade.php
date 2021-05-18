@extends('layout')

@section('title', 'blog')

@section('content')

    <h1>Liste des questions</h1>
    
    <nav>
        {{ $posts->links() }}
    </nav>

    @include('posts.list', ['posts' => $posts])
    
@endsection