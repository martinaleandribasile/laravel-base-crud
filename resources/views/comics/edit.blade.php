@extends('layout')

@section('title')
    Edit record
@endsection

@section('contentMain')
    <div class="boxcontainer">
        <h1 class="text-center text-uppercase text-success">Aggiungi un nuovo Comic</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="box-input">
                <label for="title">Titolo:</label>
                <input type="text" name="title" value="{{ old('title', $comic->title) }}" required maxlength="190"
                    minlength="1" />
                @error('title')
                    <div class='alert alert-danger p-1 ms-3 mb-0'>
                        {{ __($message) }}
                        <!-- i __ sono per aggiungere le traduzioni per le lingue-->
                    </div>
                @enderror
            </div>
            <div class="box-input">
                <label for="description">Descrizione:</label>
                <textarea name="description" id="" cols="30" rows="10" required minlength="1">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class='alert alert-danger p-1 ms-3 mb-0'>
                        {{ __($message) }}
                        <!-- i __ sono per aggiungere le traduzioni per le lingue-->
                    </div>
                @enderror
            </div>
            <div class="box-input">
                <label for="thumb">Immagine Copertina:</label>
                <input type="url" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
                @error('thumb')
                    <div class='alert alert-danger p-1 ms-3 mb-0'>
                        {{ __($message) }}
                        <!-- i __ sono per aggiungere le traduzioni per le lingue-->
                    </div>
                @enderror
            </div>
            <div class="box-input">
                <label for="price">Prezzo:</label>
                <input type="number" name="price" step="0.01" min="0" value="{{ old('price', $comic->price) }}"
                    required />
                @error('price')
                    <div class='alert alert-danger p-1 ms-3 mb-0'>
                        {{ __($message) }}
                        <!-- i __ sono per aggiungere le traduzioni per le lingue-->
                    </div>
                @enderror
            </div>
            <div class="box-input">
                <label for="series">Serie:</label>
                <input type="text" name="series" value="{{ old('series', $comic->series) }}" maxlength="90"
                    minlength="1" required />
                @error('series')
                    <div class='alert alert-danger p-1 ms-3 mb-0'>
                        {{ __($message) }}
                        <!-- i __ sono per aggiungere le traduzioni per le lingue-->
                    </div>
                @enderror
            </div>
            <div class="box-input">
                <label for="sale_date">Data Uscita:</label>
                <input type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required />
                @error('sale_date')
                    <div class='alert alert-danger p-1 ms-3 mb-0'>
                        {{ __($message) }}
                        <!-- i __ sono per aggiungere le traduzioni per le lingue-->
                    </div>
                @enderror
            </div>
            <div class="box-input">
                <label for="type">Tipologia:</label>
                <input type="text" name="type" value="{{ old('type', $comic->type) }}" maxlength="90" minlength="1"
                    required />
                @error('type')
                    <div class='alert alert-danger p-1 ms-3 mb-0'>
                        {{ __($message) }}
                        <!-- i __ sono per aggiungere le traduzioni per le lingue-->
                    </div>
                @enderror
            </div>
            <div class="box-input pt-5">
                <input type="submit" class="btn btn-success" value="Aggiorna">
            </div>
        </form>
    </div>
@endsection
