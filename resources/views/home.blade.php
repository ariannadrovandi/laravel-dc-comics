@extends('layouts.app')

@section('content')
    <main class="container wrapper" >
        <h1>Home Page</h1>
        {{-- @dd($comics) --}}
        @foreach ($comics as $comic)
            <h3>{{$comic->title}}</h3>
        @endforeach
    </main>
@endsection
