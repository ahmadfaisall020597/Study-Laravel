@extends('layouts.main')

@section('container')

        <h1 class="mb-5">{{ $post->title }}</h1>

        <h5>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>

        {!! $post->body !!}

        <br>
    <a href="/posts" class="d-block mt-3">Back</a>

@endsection
