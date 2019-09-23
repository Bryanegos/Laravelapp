@extends('layouts.app')

@section('content')
    <h3 class="title">Posts</h3>
    @if (count($posts) > 1)
        @foreach ($posts as $post )
            <ul class="list-group">
                <li class="list-group-item">
                    <h3><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</h3>
                    <small>Written on {{$post->created_at}}</small>
                </li>
            </ul>
        @endforeach
    @else 
    <p> no post found</p>
    @endif
@endsection