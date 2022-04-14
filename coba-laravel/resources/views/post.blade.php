@extends('layouts.main')

@section('container')

        <h1 class="mb-5">{{ $post->title }}</h1>

        <h5>By. Ahmad Faisal in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>

        {!! $post->body !!}

        <br>
    <a href="/posts">Back</a>

@endsection
