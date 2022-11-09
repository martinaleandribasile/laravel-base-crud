@extends('layout')

@section('title')
    Edit record
@endsection

@section('contentMain')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="boxcontainer">
        <h1 class="text-center text-uppercase text-success">Aggiungi un nuovo Comic</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="box-input">
                <label for="title">Titolo:</label>
                <input type="text" name="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="box-input">
                <label for="description">Descrizione:</label>
                <textarea name="description" id="">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="box-input">
                <label for="thumb">Immagine Copertina:</label>
                <input type='text' name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="box-input">
                <label for="price">Prezzo:</label>
                <input type="float" name="price" min="0" value="{{ old('price', $comic->price) }}">
            </div>
            <div class="box-input">
                <label for="series">Serie:</label>
                <input type="text" name="series" value="{{ old('series', $comic->series) }}">
            </div>
            <div class="box-input">
                <label for="sale_date">Data Uscita:</label>
                <input type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="box-input">
                <label for="type">Tipologia:</label>
                <input type="text" name="type" value="{{ old('type', $comic->type) }}">
            </div>
            <div class="box-input pt-5">
                <input type="submit" class="btn btn-success" value="Aggiorna">
            </div>
        </form>
    </div>
@endsection
