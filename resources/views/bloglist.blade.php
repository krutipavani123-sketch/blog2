<div>
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
                <a href="{{ 'update/'.$datas->id }}">Update</a>
            </td>
        </tr>
          @endforeach
    </table>
  
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
</div>
