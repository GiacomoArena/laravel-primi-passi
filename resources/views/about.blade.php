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
    <a href="{{route('home')}}"> about</a>

    <ul>

    @foreach ($colors as $color )
        <li>{{$color}}</li>
    @endforeach

    </ul>

    @for ($i=1; $i < $goal; $i++)
        <h3>{{$i}}</h3>
    @endfor
</body>
</html>
