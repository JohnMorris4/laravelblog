@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>

        <div>
            {{$post->body}}
        </div>
        <a href="/posts" class="btn btn-success">Return</a>
        <hr>
    <small>Written on: {{ $post->created_at}}</small>
@endsection
