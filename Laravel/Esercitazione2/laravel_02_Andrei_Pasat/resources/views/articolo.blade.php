<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/miostile.css">
</head>
<body>
    {{-- seleziono il titolo presente nell'array --}}
    <h1>{{$article['title']}}</h1>
    {{-- seleziono il body presente nell'array --}}
    <p>{{$article['body']}}</p>
</body>
</html>