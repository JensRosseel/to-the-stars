@extends('layout')
@section('content')
    <div class="data">
        <h1 class="planet">{{ $data->name }}</h1>
        <img src={{ asset('img/' . $data->name . '.jpg') }} alt={{ $data->name }}>
        <div class="description">{{ $data->description }}</div>
    </div>
@endsection
