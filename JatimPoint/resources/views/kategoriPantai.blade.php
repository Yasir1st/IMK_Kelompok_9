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
            <h1 class="title_kategori">Wisata Pantai</h1>
            <div class="bar"></div>

    
            <div class="listPopuler">
                <div style="background-image: url('/img/balekambang.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Pantai Balekambang</h3>
                        <div class="desk">          
                            <p>Pantai Balekambang terletak sekitar 60 km selatan dari Kota Malang, di Dusun Sumber Jambe, Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Jawa Timur. Akses jalan ke pantai ini sangat nyaman, dengan pemandangan pohon yang memberikan rindang dan udara yang sejuk sepanjang perjalanan.</p>
                            <a href="balekambang" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/klayar.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Pantai Klayar</h3>
                        <div class="desk">          
                            <p>Pantai Klayar adalah sebuah surga alam yang terletak di Pacitan, sebuah wilayah yang membatasi Jawa Timur dan Jawa Tengah di sisi selatan Pulau Jawa. Pantai ini tepatnya terletak di Desa Sendang, Kecamatan Donorojo, Kabupaten Pacitan, sekitar 40 km ke arah barat dari Kota Pacitan. Pantai Klayar dikenal oleh pesona alamnya yang memukau.</p>
                            <a href="klayar" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/sukamande.jpeg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Pantai Sukamande</h3>
                        <div class="desk">          
                            <p>Pantai Sukamade merupakan salah satu obyek wisata favorit di TN Meru Betiri, Kabupaten Banyuwangi. Selain panorama pantai, taman nasional seluas 52.626 hektare tersebut juga menyimpan potensi flora dan fauna lainnya, seperti elang jawa, macan tutul, banteng, bunga padmosari atau rafflesia zollingeriana, dan sebagainya. </p>
                            <a href="sukamande" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/papuma.jpeg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Pantai Papuma</h3>
                        <div class="desk">          
                            <p>Pantai Papuma juga dikenal sebagai Pantai Tanjung Papuma karena letaknya menjorok ke laut yang disebut dengan tanjung. Nama Papuma merupakan akronim dari "pasir putih malikan". Malikan merupakan nama yang diberikan oleh Perhutani setelah membuka lokasi ini. </p>
                            <a href="papuma" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
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