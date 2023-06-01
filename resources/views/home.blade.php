<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>

    <ul>
    @foreach ($names as $name )
        <li>{{$name}}</li>
    @endforeach
    </ul>

    <a href="{{route('about')}}">vai su about</a>
</body>
</html>
