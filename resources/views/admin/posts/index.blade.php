@extends('admin.layouts.master')

@section('meta')
<title>Muhammadamin portfolio - posts</title>
@stop

@section('content')
<h1>postlar</h1>
@foreach ($posts as $post)
<a href="{{route('admin.posts.edit', ['title' => $post->title])}}">
    <div class="post">
        <img src="{{ asset('storage/' . $post->image) }}" alt="no" class="post_image">
        <div class="post_titles">
            <h1 class="title">{{$post->title}}</h1>
            <p class="description">{{$post->body}}</p>
        </div>

    </div>
</a>
@endforeach
@stop

@section('scripts')

@stop