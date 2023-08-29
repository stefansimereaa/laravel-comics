@extends('layouts.main')

@section('scss')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css'
        integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=='
        crossorigin='anonymous' />

    {{-- alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('main-content')
    <div x-data="{
        title: '{{ old('title', $comic->title) }}',
        thumbnail: '{{ old('thumbnail', $comic->thumb) }}'
    }">

        <div class="container my-5 d-flex align-items-center justify-content-center gap-4">
            <img class="img-fluid" style="height: 150px" :src="thumbnail" :alt="title">
            <h1 x-text="title" class="text-center">EDIT {{ $comic->title }}</h1>
        </div>


        <form method="POST" action="{{ route('comics.update', $comic) }}" id="comic-form" novalidate>
            @method('put')
            @include('comics.form')
        </form>
    </div>
@endsection