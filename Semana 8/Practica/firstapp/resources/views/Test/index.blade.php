<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- blade permite utilizar variables --}}
    @include("nav")
    <h1>{{$title}}</h1>
    <h2>{{$description}}</h2>
    <h3>{{$studentName}}</h3>
</body>
</html>