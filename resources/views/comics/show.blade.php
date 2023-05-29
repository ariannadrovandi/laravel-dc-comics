@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{ $product->title }}</h1>
        <div class="card">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title"> {{ $comic->title }}</h5>
                <p class="card-text">{!! $comic->description !!}</p>
                <p class="card-text">
                    <strong>Price:</strong> {{ $comic->price }} - <strong>Series:</strong> {{ $comic->series }} - <strong>Sale date:</strong> {{ $comic->sale_date }} - <strong>Type:</strong> {{ $comic->type }} - <strong>Artists:</strong> {{ $comic->srtists }} - <strong>Writers:</strong> {{ $comic->writers }}
                </p>
            </div>
        </div>
    </section>
@endsection
