@extends('layout')

@section('title')
    Comics
@endsection

@section('contentMain')
    <h1 class="title">COMICS</h1>
    <div class="main">
        <table style="width: 100%">
            <thead>
                <tr>
                    <th class="poster">
                        <h2>POSTER:</h2>
                    </th>
                    <th>
                        <h2>TITOLO:</h2>
                    </th>
                    <th>
                        <h2>PREZZO:</h2>
                    </th>
                    <th>
                        <h2>DETTAGLI:</h2>
                    </th>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($comics as $comic)
                    <tr>
                        <td>
                            <p class="imgposter"><img src="{{ $comic->thumb }}" alt=""></p>
                        </td>
                        <td>
                            <h3>{{ $comic->title }}</h3>
                        </td>

                        <td>
                            <h3>{{ $comic->price }}</h3>
                        </td>
                        <td>
                            <a href="">Dettagli</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
