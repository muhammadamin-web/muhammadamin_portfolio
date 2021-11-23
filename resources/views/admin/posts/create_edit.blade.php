@extends('admin.layouts.master')

@section('meta')
   
@stop

@section('content')
    <h1>Yangi post yaratish va o'zgartirish</h1>
    @foreach ($postlar as $post)
    <form action="" method="POST">
        <select name="status" id="">
            <option value="published">published</option>
            <option value="draft">draft</option>
        </select>
        <input type="text"va>
    </form>

    @endforeach 
@stop

@section('scripts')

@stop