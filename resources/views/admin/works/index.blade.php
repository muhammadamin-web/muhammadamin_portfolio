@extends('admin.layouts.master')

@section('meta')
   
@stop

@section('content')
    <h1>Yaratilgan portoliolar</h1>
    @foreach ($works as $work)
    <a href="works/{{$work->title}}/edit">
    <div class="work">
<h1>{{$work->title}}</h1>
<h1>{{$work->body}}</h1>
<h1>{{$work->description}}</h1>
<h1>{{$work->link}}</h1>

<h1>{{$work->keywords}}</h1>
<img src="{{ asset('storage/' . $work->image) }}" alt="no">
</div>
</a>
    @endforeach
@stop

@section('scripts')

@stop