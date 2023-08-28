@extends('layouts.main')
@section('scss')
    <link href="{{ Vite::asset('resources/scss/comics.show.scss') }}" rel="stylesheet" type="text/css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css'
        integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw=='
        crossorigin='anonymous' />
@endsection

@section('main-content')
    <section id="comic-details">
        <div class="blue-stripe">
        </div>

        <div class="container">
            <div class="comic-cover">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <a class="gallery-link" href="{{ route('comics.index') }}">VIEW GALLERY</a>
            </div>
        </div>

        <div class="container">
            <div class="wrapper">
                <div class="comic-details">
                    <h1 class="uppercase">{{ $comic['title'] }}</h1>
                    <div class="price-and-avail">
                        <div class="left">
                            <div>U.S Price: <span class="price">{{ $comic['price'] }}</span></div>
                            <div class="availability">AVAILABLE</div>
                        </div>
                        <div class="right">
                            <span>Check Availability</span>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <p class="description">{{ $comic['description'] }}</p>
                </div>
                <figure class="advertisement">
                    <figcaption>ADVERTISEMENT</figcaption>
                    <img src="{{ Vite::asset('resources/img/test.jpg') }}" alt="advertisement">
                </figure>
            </div>
        </div>
    </section>

    <section id="talent-and-specs">
        <div class="container">

            <div class="talent">
                <h3>Talent</h3>
                <div class="row">
                    <h4>Art by:</h4>
                    <div class="artists list">
                        @foreach ($comic['artists'] as $artist)
                            <a href="#">{{ $artist }}</a>
                            @unless ($loop->last)
                                ,
                            @endunless
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <h4>Written by:</h4>
                    <div class="writers list">
                        @foreach ($comic['writers'] as $writer)
                            <a href="#">{{ $writer }}</a>
                            @unless ($loop->last)
                                ,
                            @endunless
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="row">
                    <h4>Series:</h4>
                    <div class="uppercase"><a href="#">{{ $comic['series'] }}</a></div>
                </div>
                <div class="row">
                    <h4>U.S. Price:</h4>
                    <div>{{ $comic['price'] }}</div>
                </div>
                <div class="row">
                    <h4>On Sale Date:</h4>
                    <div>{{ $comic['sale_date'] }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection
