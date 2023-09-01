@extends('layouts.main')


@section('main-content')
    <div class="container">

        {{-- TEMPORARY STYLES INLINE FOR TOEMPORARY PAGES :D --}}
        <h1 style="text-transform:uppercase; margin: 2rem 0">
            {{ Route::currentRouteName() }} - GO TO <a href="{{ route('comics.index') }}">COMICS</a> FOR MORE CONTENT
        </h1>
    </div>
@endsection
