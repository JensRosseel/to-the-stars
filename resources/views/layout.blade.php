<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>To the Stars</title>
</head>
<body>
    <div class="navbar">
        <a href={{ route('home') }} class="title">To the Stars</a>
        <div class="links">
            @foreach ($planets as $key => $planet)
                <a href={{ route('planet', ['page' => $planet->name ]) }}>{{ $planet->name }}</a>
            @endforeach

        </div>
    </div>
    @section('content')
    @show
</body>
</html>
