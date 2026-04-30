<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.27.3/dist/bootstrap-table.min.css">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.27.3/dist/bootstrap-table.min.js"></script>

    <title>Blog Management</title>
</head>
<body>
    
<h1>
    Blog Management
</h1>
<form method="post" action="/update/{{ $data->id }}">
@csrf
    <label>Title</label>
    <input type="text" name="title" value="{{ $data->title}}"><br><br> 

      <label>Description</label>
    <textarea type="text" name="description" value="{{ $data->description}}"></textarea><br><br> 
    
<button type="submit" name="btn" class="btn btn-primary">Update</button>
</form>
</body>
</html>

