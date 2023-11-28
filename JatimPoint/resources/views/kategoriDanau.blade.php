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
            <h1 class="title_kategori">Wisata Danau</h1>
            <div class="bar"></div>

            <div class="listPopuler">
                <div style="background-image: url('/img/sarangan.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Telaga Sarangan</h3>
                        <div class="desk">          
                            <p>Telaga Ngebel adalah sebuah danau alami yang terletak di Kecamatan Ngebel, berjarak 23 kilometer dari pusat kota Ponorogo atau sekitar 40 menit perjalanan.Dengan diameter mencapai 5 kilometer, luas Telaga Ngebel mencapai 150 hektar, menjadikannya lebih luas hampir lima kali dari Telaga Sarangan di Kabupaten Magetan. </p>
                            <a href="sarangan" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/gumbolo.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Ranu Gumbolo</h3>
                        <div class="desk">          
                            <p>Nama Ranu Gumbolo Tulungagung sendiri berasal dari Ranu Kumbolo atau danau terkenal di jalur pendakian Gunung Semeru. Sekilas, tampilan Ranu Gumbolo Tulungagung memang mirip dengan danau Ranu Kumbolo.</p>
                            <a href="gumbolo" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/regulo.jpeg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Ranu Regulo</h3>
                        <div class="desk">          
                            <p>Ranu Regulo adalah sebuah danau yang terbentuk secara alami dengan warna air biru kehijauan. Luas Ranu Regulo kurang dari satu hektar. Ranu Regulo dikelilingi pebukitan dan pepohonan hijau sehingga tampak cantik pada saat matahari terbit. </p>
                            <a href="" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="listPopuler">
                <div style="background-image: url('/img/ranukumbolo.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Ranu Kumbolo</h3>
                        <div class="desk">          
                            <p>Ranu Kumbolo (bahasa Indonesia: Danau Kumbolo) adalah sebuah danau yang terletak di dalam Taman Nasional Bromo Tengger Semeru, Jawa Timur, Indonesia. Danau ini merupakan bagian dari rute termudah yang berasal dari Ranu Pani menuju puncak Gunung Semeru.</p>
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