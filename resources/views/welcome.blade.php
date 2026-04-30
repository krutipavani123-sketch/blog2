@extends('components.layout')
@section('title', 'Blog Management')


<body>
 @section('main')   
 <div class="main">

<h1>
    Blog Management
</h1>
<form method="post" action="bloglist">

    <label>Title</label>
    <input type="text" name="title"><br><br> 

      <label>Description</label>
    <textarea type="text" name="description"></textarea><br><br> 
    
<button type="submit" name="btn" class="btn btn-info">Add</button>
</form>
 </div>

@endsection
</body>
</html>





