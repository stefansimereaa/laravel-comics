@extends('layouts.main')

@section('scss')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css'
        integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=='
        crossorigin='anonymous' />
@endsection

@section('main-content')
    <div class="container">
        <h1 class="text-center fw-bold  my-5">Add a new comic</h1>
        <hr class="my-2">
        @include('comics.form')
    </div>
@endsection
