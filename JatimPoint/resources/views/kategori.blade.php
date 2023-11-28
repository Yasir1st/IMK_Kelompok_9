<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
    <link rel="stylesheet" href="{{ asset('front/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('front/kategori.css') }}">

    <style>
        .nav ul li .kategori{
            border-bottom: 3px solid white;
        }
    </style>
</head>
<body>
    <div class="container">
        @section('header')
            @include('layout/header')
        @show

        <div class="main">
            <h1 class="titleKategori">Kategori Wisata Alam</h1>
            <div class="barKategori"></div>
            <div class="kategori">
                <a class="gunung" href="/gunung">Gunung</a>
                <a class="pantai" href="/pantai">Pantai</a>
                <a class="sungai" href="/sungai">Sungai</a>
                <a class="danau" href="/danau">Danau</a>
                <a class="hutan" href="/hutan">Hutan</a>
                <a class="airTerjun" href="/airTerjun">Air Terjun</a>
            </div>
        </div>

        @section('footer')
            @include('layout/footer')
        @show
    </div>
</body>
</html>