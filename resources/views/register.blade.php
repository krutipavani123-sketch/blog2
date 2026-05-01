<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.27.3/dist/bootstrap-table.min.css">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.27.3/dist/bootstrap-table.min.js"></script>

    <style>
        .main{
            text-align: center; 
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <form method="post" action="/register">
        <div class="main">
            <h1>Signup</h1>
            <label>Name</label><br>
            <input type="text" name="name"><br>

            <label>Email</label><br>
            <input type="text" name="email"><br>

            <label>Password</label><br>
            <input type="password" name="password"><br><br>

            <button name="btn" type="submit" class="btn btn-primary">Signup</button>
        </div>
    </form>
   
   
</body>
</html>