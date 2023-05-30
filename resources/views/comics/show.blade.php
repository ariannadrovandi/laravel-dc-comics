@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="card">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title"> {{ $comic->title }}</h5>
                <p class="card-text">{!! $comic->description !!}</p>
                <p class="card-text">
                    <strong>Price:</strong> {{ $comic->price }} <br> <strong>Series:</strong> {{ $comic->series }} <br> <strong>Sale date:</strong> {{ $comic->sale_date }} <br> <strong>Type:</strong> {{ $comic->type }} <br> <strong>Artists:</strong> {{ $comic->srtists }} <br> <strong>Writers:</strong> {{ $comic->writers}}
                </p>
            </div>
        </div>
    </section>
@endsection
