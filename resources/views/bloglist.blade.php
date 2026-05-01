@extends('components.layout')
@section('title', 'Blog List')

@section('main')
<h1>Blog List</h1>

<form method="get" action="search">
    <div text-align="right">
        <input type="text" placeholder="serach with name" name="search" value="{{ @$search }}">
        <button>Search</button><br><br>
    </div>
        

    </form>
<a href="{{ url('add-blog') }}" class="btn btn-info" style="margin-bottom: 20px; color: white; text-decoration: none;">Add Blog</a>


    <table border="1" class="table table-bordered table-sm">
        <tr>
            <td>id</td>
            <td>Title</td>
            <td>Description</td>
            <td>Action</td>
        </tr>
    
    @foreach($data as  $datas)
   
        <tr>
            <td>{{ $datas->id }}</td>
            <td>{{ $datas->title }}</td>
            <td>{{ $datas->description }}</td>
            <td>
                <a href="{{ 'delete/'.$datas->id }}">Delete</a>
                <a href="{{ 'edit/'.$datas->id }}">Update</a>
            </td>
        </tr>
          @endforeach
    </table>
    @endsection
    
{{-- <div>
    <h1>Blog List</h1>

    <table border="1">
        <tr>
            <td>id</td>
            <td>Title</td>
            <td>Description</td>
            <td>Action</td>
        </tr>
    
    @foreach($data as  $datas)
   
        <tr>
            <td>{{ $datas->id }}</td>
            <td>{{ $datas->title }}</td>
            <td>{{ $datas->description }}</td>
            <td>
                <a href="{{ 'delete/'.$datas->id }}">Delete</a>
                <a href="{{ 'edit/'.$datas->id }}">Update</a>
            </td>
        </tr>
          @endforeach
    </table>
  
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div> --}}
