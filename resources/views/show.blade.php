@extends('layout.app')

@section('document-title')
    Article {{ $post->id }}
@endsection


@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>



    @if ($post->comments->count())
        @foreach ($post->comments as $comment)
            <p>{{ $comment->created_at->format('d/m/Y') }} : {{ $comment->content }} </p>
        @endforeach
    @endif

@endsection
