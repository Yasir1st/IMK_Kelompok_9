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
            <h1 class="title_kategori">Wisata Gunung</h1>
            <div class="bar"></div>

            <div class="listPopuler">
                <div style="background-image: url('/img/bromo2.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Gunung Bromo</h3>
                        <div class="desk">          
                            <p>Gunung Bromo, terletak di Kabupaten Probolinggo, Jawa Timur, adalah salah satu gunung berapi paling ikonik di Indonesia. Dengan ketinggian sekitar 2.392 meter di atas permukaan laut, gunung ini menawarkan pengalaman alam yang luar biasa.</p>
                            <a href="/bromo" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/ijen.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Kawah Ijen</h3>
                        <div class="desk">          
                            <p>Gunung Ijen adalah sebuah gunung berapi yang terletak di perbatasan Kabupaten Banyuwangi dan Kabupaten Bondowoso, Jawa Timur, Indonesia dengan ketinggian 2.386 mdpl yang terkenal dengan kawah berwarna biru yang mempesona</p>
                            <a href="/ijen" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/semeru.jpg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Gunung Semeru</h3>
                        <div class="desk">          
                            <p>Gunung Semeru, juga dikenal sebagai Gunung Meru, adalah gunung berapi kerucut tertinggi di Pulau Jawa, Indonesia. Dengan puncaknya, Mahameru, mencapai ketinggian 3.676 mdpl yang menjadi salah satu puncak tertinggi di Indonesia.</p>
                            <a href="/semeru" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="listPopuler">
                <div style="background-image: url('/img/arjuno.jpeg');" class="boxpopuler">
                    <div class="deskripsi_list">
                        <h3>Gunung Arjuno</h3>
                        <div class="desk">          
                            <p>Gunung Arjuno Welirang, salah satu puncak tertinggi di Pulau Jawa, menjadi tujuan favorit para pendaki di wilayah Jawa Timur. Dikenal sebagai pasangan Gunung Welirang, meskipun Gunung Arjuno tidak memiliki kawah.</p>
                            <a href="/arjuno" ><img class="arrow" src="{{ asset('logo/next.png') }}"></a>
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