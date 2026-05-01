<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Send Mail</h1>
    <form action="mail" method="post">
        <label>
            TO
        </label>
        <input type="text" name="to"><br><br>

        <label>
            Subject
        </label>
        <input type="text" name="subject"><br><br>

        <label>
            Message
        </label>
        <textarea type="text" name="msg"></textarea><br><br>

        <button type="submit" name="btn">Send Mail</button>
    </form>
</body>
</html>