@extends('admin.layouts.master')

@section('meta')
<title>Muhammadamin portfolio - posts</title>
@stop

@section('content')
    <h1>postlar</h1>
    @foreach ($posts as $post)
    <a href="{{route('admin.posts.edit', ['title' => $post->title])}}">
    <div class="post">
<h1>{{$post->title}}</h1>
<h1>{{$post->body}}</h1>
<img src="{{ asset('storage/' . $post->image) }}" alt="no">

</div>
</a>
    @endforeach
@stop   

@section('scripts')

@stop


