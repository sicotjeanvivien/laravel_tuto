@extends('layout.app')
@section('content')
    <form action="{{ Route('post.store') }} " method="post">
        @csrf
        <input type="text" name="title" id="">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="créer">
    </form>
@endsection
