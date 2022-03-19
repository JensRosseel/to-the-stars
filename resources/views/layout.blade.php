<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>To the Stars</title>
</head>
<body>
    <div class="navbar">
        <div class="title">To the Stars</div>
        <div class="links">
            @foreach ($planets as $key => $planet)
                <a href={{ route('planet'); }}>{{ $planet->name }}</a>
            @endforeach

        </div>
    </div>
@section('content')
@show
</body>
</html>
