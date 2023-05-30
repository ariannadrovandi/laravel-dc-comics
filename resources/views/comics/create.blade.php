@extends('layouts.app');

@section('content')
    <section class="container">
        <h1>Inserisci Nuovo prodotto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                <div id="titleHelp" class="form-text">Inserisci un titolo</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="imageHelp">
                <div id="imageHelp" class="form-text">Inserisci immagine</div>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp">
                <div id="priceHelp" class="form-text">Inserisci il prezzo</div>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelp">
                <div id="seriesHelp" class="form-text">Inserisci la serie</div>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelp">
                <div id="sale_dateHelp" class="form-text">Inserisci la data di rilascio</div>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp">
                <div id="typeHelp" class="form-text">Inserisci il tipo</div>
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists" id="artists" aria-describedby="artistsHelp">
                <div id="artistsHelp" class="form-text">Inserisci gli artisti</div>
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers" id="writers" aria-describedby="writersHelp">
                <div id="writersHelp" class="form-text">Inserisci gli scrittori</div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
