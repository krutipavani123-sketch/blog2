@extends('components.layout')
@section('title', 'Blog Update')
@section('main')

   

<form action="/edit/{{ $data->id }}" method="post">
      @csrf
        <input type="hidden" name="_method" value="put">
<div class="main">
   <h1>Update Data</h1>
    <label>Title</label><br>
    <input type="text" name="title" value="{{ $data->title }}"><br><br>
    <label>Description</label><br>
    <input type="text" name="description" value="{{ $data->description }}"><br><br>
    
<button name="btn">Update</button>


</form>

    <!-- He who is contented is rich. - Laozi -->
</div>
      @endsection