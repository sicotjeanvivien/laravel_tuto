@extends('layout.app')

@section('document-title')
    Article {{$post['id']}}
@endsection


@section('content')
    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>
@endsection
