@extends('layout')

@section('title', $post->title)

@section('content')
    <article>
        <header class="mb-3">
            <h1>{{ $post->title }}</h1>

            <small>
                Rédigé par {{ $post->user->name }} le {{ $post->created_at->format('d/m/Y H:i') }}
            </small>
        </header>
        {!! nl2br(e($post->content)) !!}
    </article>
    <aside>
        <h2>Réponse</h2>
        
        <form action="{{ route('posts.responses', ['id' => $post->id]) }}" method="post" class="mb-2">
            <fieldset>
                <legend>Ajouter un response</legend>
                @csrf
            
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    @if($errors->has('pseudo'))
                        <input id="pseudo" name="pseudo" value="{{ old('pseudo') }}" type="text" class="form-control is-invalid">
                        <div class="invalid-feedback">
                            {{ $errors->first('pseudo') }}
                        </div>
                    @else
                        <input id="pseudo" name="pseudo" value="{{ old('pseudo') }}" type="text" class="form-control">
                    @endif
                </div>
                <div class="form-group">
                    <label for="content">Contenu</label>
                    @if($errors->has('content'))
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control is-invalid">{{ old('content') }}</textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('content') }}
                        </div>
                    @else
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control">{{ old('content') }}</textarea>
                    @endif
                </div>
                <button class="btn btn-primary">Ajouter</button>
            </fieldset>
        </form>
        <ul class="list-unstyled">
            @foreach($responses as $response)
                <li>
                    <article>
                        <header>
                            Rédigé par {{ $response->pseudo }} le {{ $response->created_at->format('d/m/Y H:i') }}
                        </header>
                        
                        <p>{!! e(nl2br($response->content)) !!}</p>
                    </article>
                </li>
            @endforeach
        </ul>
    </aside>
@endsection