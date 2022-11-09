@extends('layout')

@section('title')
    Create new record
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
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="box-input">
                <label for="title">Titolo:</label>
                <input type="text" name="title" value='{{ old('title', '') }}' required />
            </div>
            <div class="box-input">
                <label for="description">Descrizione:</label>
                <textarea name="description" id="" cols="30" rows="10">{{ old('description', '') }}</textarea>
            </div>
            <div class="box-input">
                <label for="thumb">Immagine Copertina:</label>
                <input type='text' name="thumb" value='{{ old('thumb', '') }}' />
            </div>
            <div class="box-input">
                <label for="price">Prezzo:</label>
                <input type="float" name="price" min="0" value='{{ old('price', '') }}' required />
            </div>
            <div class="box-input">
                <label for="series">Serie:</label>
                <input type="text" name="series" value='{{ old('series', '') }}' />
            </div>
            <div class="box-input">
                <label for="sale_date">Data Uscita:</label>
                <input type="date" name="sale_date" value='{{ old('sale_date', '') }}' />
            </div>
            <div class="box-input">
                <label for="type">Tipologia:</label>
                <input type="text" name="type" />
            </div>
            <div class="box-input pt-5">
                <input type="submit" class="btn btn-success" value="Registra">
            </div>
        </form>
    </div>
@endsection
