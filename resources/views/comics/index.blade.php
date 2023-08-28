@extends('layouts.main')

@section('scss')
    <link href="{{ Vite::asset('resources/scss/comics.scss') }}" rel="stylesheet" type="text/css">
@endsection

@section('main-content')
    {{-- Comics list --}}
    <section id='comics'>

        <div class="container">

            {{-- Current series --}}
            <div class="current-series button">CURRENT SERIES</div>

            <div class="flex-container">

                @foreach ($comics as $comic)
                    <div class="card">
                        <a href="{{ route('comics.show', $comic) }}">
                            <figure>
                                <img class="comic-thumb" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </figure>
                            <h4>{{ $comic['title'] }}</h4>
                        </a>
                    </div>
                @endforeach

            </div>

            {{-- Load more --}}
            <div class="button-container">
                <div class="button">LOAD MORE</div>
                <a href="{{ route('comics.create') }}" class="button">ADD COMIC</a>
            </div>

        </div>
    </section>

    {{-- Shop Items --}}
    <section id="shop">
        <div class="container">
            <ul>
                @foreach ($shop_items as $item)
                    <li>
                        <img src="{{ Vite::asset('resources/img/' . $item['img']) }}" alt="{{ $item['text'] }}">
                        <p>{{ $item['text'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
