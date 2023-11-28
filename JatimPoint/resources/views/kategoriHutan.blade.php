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
            <h1 class="title_kategori">Wisata Hutan</h1>
            <div class="bar"></div>

            <div class="listPopuler">
                <div style="background-image: url('/img/alaspurwo.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Taman Nasional Alas Purwo</h3>
                        <div class="desk">          
                            <p>Taman Nasional Alas Purwo, yang terletak di Kecamatan Tegaldlimo dan Purwoharjo, Kabupaten Banyuwangi, Jawa Timur, Indonesia, merupakan suatu area lindungan alam yang berada di paling ujung timur Pulau Jawa. Tempat ini juga termasuk dalam Semenanjung Blambangan. </p>
                            <a href="" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/gemaharjo.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Hutan Pinus Gemaharjo</h3>
                        <div class="desk">          
                            <p>Hutan pinus merupakan salah satu wisata alam yang diandalkan dari kabupaten Pacitan. Lokasi hutan pinus Gemaharjo ini berjarak 40 kilometer dari pusat kota Pacitan. Hutan pinus ini sangat popular karena keindahan alamnya, yang terletak di Kecamatan Tegalombo, Desa GEmaharjo.</p>
                            <a href="" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/cengkong.webp');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Hutan Mangrove Pancer Cengkong</h3>
                        <div class="desk">          
                            <p>Hutan Mangrove Pancer Cengkrong, berlokasi di desa Karanggandu, Kecamatan Watulimom, Kabupaten Trenggalek, Jawa Timur, adalah salah satu tujuan wisata yang sangat direkomendasikan bagi pengunjung yang berada di Trenggalek.</p>
                            <a href="" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/djawatan.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Djawatan</h3>
                        <div class="desk">          
                            <p>De Djawatan adalah tempat wisata yang sejatinya merupakan kawasan hutan lindung milik perhutani. Tempat wisata ini menghadirkan pemandangan yang indah dengan udara yang sejuk sehingga menjadi tempat wisata pilihan yang aman dan nyaman.</p>
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