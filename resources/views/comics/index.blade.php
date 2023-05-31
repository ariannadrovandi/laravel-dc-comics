@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 style="margin-bottom: 35px">Comics</h1>
        <div class="row gy-4">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $comic->title }}</h5>
                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vai  al dettaglio</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>

                        </div>
                    </div>
                </div>
            @endforeach
            <a style="width: 5vw" class="btn btn-primary {{ Route::currentRouteName() == 'comics.create' ? 'active' : '' }}" href="{{ route('comics.create') }}">Create</a>
        </div>


    </section>
@endsection
