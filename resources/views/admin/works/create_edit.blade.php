@extends('admin.layouts.master')

@section('meta')

@stop

@section('content')
<h1>Yangi portfolio yaratish</h1>
<form action="{{ route('admin.works.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input value="2.png" type="file" name="image">
    <input value="link" type="text" name="link" placeholder="keywods">
    <input value="ddddddddddddddddddddddddddddddddddddddddddddddddddddd" type="text" name="title" placeholder="description">
    <input value="ddddddddddddddddddddddddddddddddddddddddddddddddddddd" type="text" name="description" placeholder="description">
    <div class="form-group" name="keywords">
        <label>Multiple</label>
        <select name="keywords" id="" >
            <div></div>
            <option>Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
            <option value="" class="option"onclick="openNav()">  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
</option>

        </select>
    </div>
    <button  type="submit"  >Submit</button>

</form>
<!-- <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" on click="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<div id="main">
  <h2>Collapsed Sidebar</h2>
  <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p>
</div> -->





@stop

@section('scripts')
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
@stop