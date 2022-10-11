@extends('layout.app')

@section('document-title')
    Accueil
@endsection


@section('content')
    <h1>Liste des articles</h1>
    @if ($posts->count() > 0)
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('show', ['id' => $post->id]) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    @else
    <div>aucun article</div>
    @endif
@endsection
