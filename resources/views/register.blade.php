<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="post">
        @csrf
        <input name="fname" id="fname" class="fname" type="text">
        <input name="lname" id="lname" class="lname" type="text">
        <input name="address" id="address" class="address" type="text">
        <input type="submit" value="Submit">
    </form>
</body>
</html>