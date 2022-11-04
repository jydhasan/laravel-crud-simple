<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Welcome
    </h1>

    <table border="3px">
        <tr>
            <th>id</th>
            <th>fname</th>
            <th>lanme</th>
            <th>address</th>
            <th>delete data</th>
        </tr>
            @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->fname }}</td>
            <td>{{ $item->lname }}</td>
            <td>{{ $item->address }}</td>
            <td><a href="{{ $item->id }}"> Delete</a></td>
        </tr>
            @endforeach
    </table>

</body>
</html>