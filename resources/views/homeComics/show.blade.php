@extends('layout')

@section('title')
    Comic Dettail
@endsection

@section('contentMain')
    <div class="main">
        <div class="dettailTitle">
            <h1>{{ $comic['title'] }}</h1>
            <p>{{ $comic['description'] }}</p>
        </div>

        <div class="dettailBox">
            <div class="dettailPoster">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
            <div class="box">
                <div class="dettailBox">
                    <p class="tagdettail">Price: </p>
                    <span> {{ $comic['price'] }} $</span>
                </div>
                <div class="dettailBox">
                    <p class="tagdettail">Type: </p>
                    <span> {{ $comic['type'] }} </span>
                </div>
                <div class="dettailBox">
                    <p class="tagdettail">Series: </p>
                    <span> {{ $comic['series'] }} </span>
                </div>
                <div class="dettailBox">
                    <p class="tagdettail">Sale Date: </p>
                    <span> {{ $comic['sale_date'] }} </span>
                </div>
            </div>
        </div>
        <div class='return'>
            <a href="/homeComics">HOME PAGE</a>
        </div>
    </div>
@endsection
