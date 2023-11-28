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
            <h1 class="title_kategori">Wisata Sungai</h1>
            <div class="bar"></div>

            <div class="listPopuler">
                <div style="background-image: url('/img/sungaimaron.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Sungai Maron</h3>
                        <div class="desk">          
                            <p>Sungai maron memiliki air sungai berwarna hijau kebiruan yang merupakan refleksi dari cahaya dari rerimbunan pohon di sekitar sungai. Air Sungai Maron sangat jernih. Pemandangan Sungai Maron berupa pepohonan hijau yang terdapat di tepian sungai selama perjalanan susur sungai, sehingga suasananya sangat sejuk. </p>
                            <a href="maron" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/cinet.png');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Kedung Cinet</h3>
                        <div class="desk">          
                            <p>Kedung Cinet, sebuah destinasi alam terpencil di Jombang, memikat para pengunjung dengan pesonanya yang unik. Sungai ini terletak di tengah hutan, memberikan suasana alam yang tenang dan asri. Namun, yang benar-benar mengesankan para pengunjung adalah deretan bebatuan yang terletak di tepi sungai, yang seiring</p>
                            <a href="cinet" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/sumberm.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Sumber Maron</h3>
                        <div class="desk">          
                            <p>Sumber Maron adalah kompleks destinasi wisata air yang terletak di Kecamatan Pagelaran, Kabupaten Malang, berjarak sekitar 5 kilometer di sebelah barat Kecamatan Gondanglegi, Kabupaten Malang. Sumber Maron dikenal dengan mata airnya yang sangat jernih, sehingga dari kejauhan, airnya tampak berwarna hijau.</p>
                            <a href="" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/kalimas.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Sungai Kalimas</h3>
                        <div class="desk">          
                            <p>Sungai Kalimas kini menjadi daya tarik utama sebagai destinasi wisata air yang baru di Kota Surabaya. Terletak di pusat kota, sungai ini telah mengalami transformasi menjadi tempat yang memikat dengan suasana yang romantis. Pemerintah Kota Surabaya dengan cermat merapihkan tepian sungai, memberikan tampilan</p>
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