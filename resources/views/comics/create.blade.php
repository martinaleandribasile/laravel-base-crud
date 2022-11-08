@extends('layout')

@section('title')
    Create new record
@endsection

@section('contentMain')
    <div class="boxcontainer">
        <h1 class="text-center text-uppercase text-success">Aggiungi un nuovo Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="box-input">
                <label for="title">Titolo:</label>
                <input type="text" name="title">
            </div>
            <div class="box-input">
                <label for="description">Descrizione:</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="box-input">
                <label for="thumb">Immagine Copertina:</label>
                <input type='text' name="thumb">
            </div>
            <div class="box-input">
                <label for="price">Prezzo:</label>
                <input type="float" name="price" min="0">
            </div>
            <div class="box-input">
                <label for="series">Serie:</label>
                <input type="text" name="series">
            </div>
            <div class="box-input">
                <label for="sale_date">Data Uscita:</label>
                <input type="date" name="sale_date">
            </div>
            <div class="box-input">
                <label for="type">Tipologia:</label>
                <input type="text" name="type">
            </div>
            <div class="box-input pt-5">
                <input type="submit" class="btn btn-success" value="Registra">
            </div>
        </form>
    </div>
@endsection
