@extends('layout')

@section('title')
    Comics
@endsection

@section('contentMain')
    <div class="bg-main">
        <a href="{{ route('comics.create') }}" class=" mb-5 btn btn-success"> ADD NEW</a>
        <div class="boxcontainer text-white">
            @foreach ($comics as $comic)
                <div class="cardcomic">
                    <a class="linkimgbox" href="{{ route('comics.show', $comic->id) }}">
                        <img class="imgbox" src="{{ $comic['thumb'] }}" alt="">
                    </a>
                    <div class="dettailslink">
                        <a class="btn btn-success w-50" href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                        <!-- all interno del form posso usare -> onsubmit="alert('do u want delete?')"  METODO PIU VELOCE -->
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                            onsubmit="askconfirm(event) ">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Cancella">
                        </form>
                    </div>
                    <h6 class="pe-4">{{ $comic['title'] }}</h6>
                </div>
            @endforeach
        </div>
        <button class="btn btn-primary">LOAD MORE</button>
    </div>
    <div class="main-blu">
        <div class="boxcontainer shop">
            <div class="shopcard">
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                <a href="">
                    <p>DIGITAL COMICS</p>
                </a>
            </div>
            <div class="shopcard">
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                <a href="">
                    <p>DC MERCHANDISE</p>
                </a>
            </div>
            <div class="shopcard">
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                <a href="">
                    <p>SUBSCRIPTION</p>
                </a>
            </div>
            <div class="shopcard">
                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                <a href="">
                    <p>COMIC SHOP LOCATION</p>
                </a>
            </div>
            <div class="shopcard">
                <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                <a href="">
                    <p>DC POWER VISA</p>
                </a>
            </div>
        </div>
    </div>
@endsection
