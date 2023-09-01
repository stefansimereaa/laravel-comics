<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    <link href="{{ Vite::asset('resources/img/favicon.ico') }}" rel="icon" type="image/ico">



    @vite('resources/js/app.js')


    @yield('scss')

    <style>
        body {
            display: none;
        }
    </style>
</head>

<body>

    @include('../partials/header')
    @include('../partials/jumbo')

    @if (session('message'))
        <div id="flash-message">
            {{ session('message') }}
        </div>
    @endif

    <main>
        @yield('main-content')
    </main>

    @include('../partials/footer')

    @yield('scripts')
</body>

</html>
