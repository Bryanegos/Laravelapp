@extends('layouts.app')

@section('content')
    <a href="/lsapp/public/posts" class="btn btn-primary">Go Back</a>
    <h1 class="title">{{$post->title}}</h1>    
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
  
@endsection