<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
    <link rel="stylesheet" href="{{ asset('front/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('front/populer.css') }}">

    <style>
        .nav ul li .populer{
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
            <h1 class="title_kategori">Wisata Air Terjun</h1>
            <div class="bar"></div>

            <div class="listPopuler">
                <div style="background-image: url('/img/tumpaksewu2.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Tumpak Sewu</h3>
                        <div class="desk">          
                            <p>Air Terjun Tumpak Sewu terletak di perbatasan Malang-Lumajang, Jawa Timur tepatnya berada pada dua desa yaitu Desa Sidomulyo, Kecamatan Pronojiwo, Kabupaten Lumajang dan Desa Sidorenggo Kecamatan Ampel Gading Kabupaten Malang Provinsi Jawa Timur. </p>
                            <a href="tumpaksewu" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/kapasbiru.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Air Terjun Kapas Biru</h3>
                        <div class="desk">          
                            <p>Coban Pelangi, merupakan salah satu destinasi wisata alam di Kabupaten Malang. Terletak pada ketinggian sekitar 1299,5 meter, di arah Desa Ngadas di kaki Gunung Semeru, air terjun ini memiliki ketinggian sekitar 110 meter. Di wilayah ini, suhu udara berkisar antara 19 hingga 23 derajat Celsius.</p>
                            <a href="" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/madakaripura.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Air Terjun Madakaripura</h3>
                        <div class="desk">          
                            <p>Air terjun Madakaripura, yang terletak di Kabupaten Probolinggo, Jawa Timur, adalah air terjun tertinggi di Pulau Jawa dan yang kedua tertinggi di Indonesia dengan ketinggian mencapai 200 meter. Terletak di kawasan Taman Nasional Bromo Tengger Semeru, tepatnya di lereng Gunung Bromo, air terjun ini menarik karena bentuknya yang mirip tirai. </p>
                            <a href="" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/pelangi.webp');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Coban Pelangi</h3>
                        <div class="desk">          
                            <p>Coban Pelangi, merupakan salah satu destinasi wisata alam di Kabupaten Malang. Terletak pada ketinggian sekitar 1299,5 meter, di arah Desa Ngadas di kaki Gunung Semeru, air terjun ini memiliki ketinggian sekitar 110 meter. Di wilayah ini, suhu udara berkisar antara 19 hingga 23 derajat Celsius. </p>
                            <a href="" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @section('footer')
            @include('layout/footer')
        @show
    </div>
</body>
</html>