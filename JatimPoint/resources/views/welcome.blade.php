<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('front/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('front/home.css') }}">

    <style>
        .nav ul li .home{
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
            <div class="left">
                <div class="img"></div>
                <h3>Deskripsi Wisata Alam Jatim</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi atque adipisci praesentium, eos sed temporibus consequuntur enim. Voluptatibus explicabo, eius sapiente voluptate vel error non, totam nesciunt hic eligendi amet nulla cupiditate repudiandae itaque accusantium culpa veritatis velit. Ea non ducimus perspiciatis doloribus vero necessitatibus! Quam, ipsam! Eos fugit aspernatur animi temporibus velit. Illo reiciendis libero molestiae veniam ex a, hic veritatis sed voluptates corrupti amet iusto velit repellat omnis sunt. Quo voluptatum dolore error ratione voluptate architecto ea ex quam repudiandae odio reiciendis quos quidem optio, eos ducimus dolores. Eligendi voluptatem voluptatibus dignissimos ducimus dolorem error recusandae explicabo temporibus!</p>
            </div>

            <div class="right">
                <div class="berita">
                    <h3>Berita</h3>
                    <div class="bar"></div>
                    <div class="wrapBerita berita1">
                        <p class="judulBerita">Kebakaran Bromo</p>
                        <div></div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi expedita qui molestiae nemo quam, aperiam perferendis nostrum iste excepturi amet.</p>
                        <a href=""><img src="{{ asset('logo/next.png') }}" alt=""></a>
                    </div>

                    <div class="wrapBerita berita2">
                        <p class="judulBerita">Banjir Lumajang  </p>
                        <div></div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi expedita qui molestiae nemo quam, aperiam perferendis nostrum iste excepturi amet.</p>
                        <a href=""><img src="{{ asset('logo/next.png') }}" alt=""></a>
                    </div>
                </div>

                <div class="terdekat">
                    <h3>Wisata Terdekat</h3>
                    <div class="bar"></div>
                    <div class="wrapTerdekat">
                        <div class="listWisataTerdekat">
                            <a href="">
                                <h4>Bukit Kuneer</h4>
                                <p class="jarakWisata">16 km</p>
                            </a>
                            <a href="">
                                <h4>Coban Rondo</h4>
                                <p class="jarakWisata">17 km</p>
                            </a>
                            <a href="">
                                <h4>Sumbermaroon</h4>
                                <p class="jarakWisata">24 km</p>
                            </a>
                            <a href="">
                                <h4>Coban Talun</h4>
                                <p class="jarakWisata">25 km</p>
                            </a>
                            <a href="">
                                <h4>Pantai Balekambang</h4>
                                <p class="jarakWisata">61 km</p>
                            </a>
                        </div>
                        <a class="seeMoreTerdekat" href="">Lihat Selengkapnya</a>
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