@extends('admin.layouts.master')

@section('meta')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

@stop

@section('content')
    <h1>Yangi post yaratish va o'zgartirish</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <select name="status" id="">
            <option value="published">published</option>
            <option value="draft">draft</option>
        </select>
        <input value="ddddddddddddddddddddddddddd" type="text" name="title"placeholder = "title10">
        <input value="ddddddddddddddddddddddddddddddddddddddddddssssssssssssssssssssssssssssss" type="text" name="body"placeholder = "body50">
        <input value="ddddddddddddddddddddddddddddddddddddddddd" type="text" name="keywords"placeholder = "keywods">
        <input value="ddddddddddddddddddddddddddddddddddddddddddddddddddddd" type="text" name="description"placeholder = "description">
        <input value="2.png" type="file" name="image" />
        <button type="submit" class="btn btn-primary">Submit</button>
        

    </form>     
    <script></script>

@stop

@section('scripts')
<!-- include libraries(jQuery, bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@2.0.0

"></script>
@stop