@extends('user.layouts.master')

@section('meta')
   
@stop

@section('content')
    <h1>Postlar</h1>
    @foreach ($posts as $post)
    
    <h1>{{$post->status}}</h1>
    <h1>{{$post->title}}</h1>
    <h1>{{$post->body}}</h1>
    <h1>{{$post->keywords}}</h1>
    <h1>{{$post->description}}</h1>
    <h1>{{$post->image}}</h1>
        @endforeach
@stop

@section('scripts')

@stop