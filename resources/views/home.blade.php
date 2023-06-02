@extends('layouts.app')

@section('content')
    <section class="container wrapper" >
        <h1>Home Page</h1>
        {{-- @dd($comics) --}}
        @foreach ($comics as $comic)
            <h3>{{$comic->title}}</h3>
        @endforeach
        <div class="d-flex flex-row">
            <div id="carouselExample" class="carousel slide me-5" style="width: 260px">
                <div class="carousel-inner">
                    @foreach ($comics as $comic)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                            <img src="{{ $comic->thumb }}" class="d-block" style="height: 400px" alt="{{ $comic->title }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div id="carousel" class="carousel slide me-5" style="width: 260px">
                <div class="carousel-inner">
                    @foreach ($comics as $comic)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                            <img src="{{ $comic->thumb }}" class="d-block" style="height: 400px" alt="{{ $comic->title }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection
