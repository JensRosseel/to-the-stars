@extends('layout')
@section('content')
    <div class="home">
        <div class="welcome">
            Choose a planet to know more about
        </div>
        <div class="planets">
            @foreach ($planets as $key => $planet)
                <a href={{ route('planet', ['page' => $planet->name ]) }}><img src={{ asset('img/' . $planet->name . '.jpg') }} alt={{ $planet->name }}></a>
            @endforeach
        </div>
    </div>
@endsection
