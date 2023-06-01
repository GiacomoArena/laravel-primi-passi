<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>About us</h1>

    <ul>

    @foreach ($colors as $color )
        <li>{{$color}}</li>
    @endforeach

    </ul>

    <a href="{{route('home')}}"> about</a>
</body>
</html>
