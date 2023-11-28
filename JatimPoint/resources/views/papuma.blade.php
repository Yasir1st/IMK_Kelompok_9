<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
    <link rel="stylesheet" href="{{ asset('front/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('front/wisata.css') }}">

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
            {{-- Wisata Deskripsi --}}
            <div class="deskripsi">
                <div class="hero" style="background-image: url('/img/papume.jpeg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">PANTAI PAPUMA</h2>
                    <p class="desc">Pantai Papuma juga dikenal sebagai Pantai Tanjung Papuma karena letaknya menjorok ke laut yang disebut dengan tanjung. Nama Papuma merupakan akronim dari "pasir putih malikan". Malikan merupakan nama yang diberikan oleh Perhutani setelah membuka lokasi ini. Pantai Papuma dinobatkan sebagai salah satu pantai terindah di Indonesia pada TripAdvisor Traveler Choice 2015 lalu, bersanding dengan pantai-pantai kenamaan di Bali. Berbagai aktivitas wisata yang bisa dilakukan diantara lain berfoto, bermain pasir dan ombak, menikmati panorama lanskap pantai dari ketinggian di bukit Siti Hinggil, menjelajahi pulau dengan menggunakan perahu nelayan, menikmati hidangan seafood.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Papuma Beach</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62 838 4768 4328</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Lokasi --}}
            <div class="lokasi">
                <h2 class="title">Lokasi</h2>
                <div class="bar"></div>
                <div class="alamat">
                    <div class="jarak">
                        <h1>158 km</h1>
                        <p>Jawa Timur</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1162011.5209969948!2d112.59269035536003!3d-7.944819363381297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd682a6a4b5cd8d%3A0xb9c242f3a09e2d2e!2sPantai%20Papuma!5e0!3m2!1sid!2sid!4v1701008561883!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            {{-- Penginapan --}}
            <div class="penginapan">
                <h2 class="title">Penginapan Terdekat</h2>
                <div class="bar"></div>
                <div class="listPenginapan">

                    <div class="penginapanBox">
                        <p class="jarak">50,6 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Foresta Resort Tanjung Papuma</p>
                            <p class="deskripsiPenginpan">Jl. Raya, Area Kebun, Lojejer, Wuluhan, Jember Regency, East Java 61374</p>
                            <p>Kontak : 082332788725</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Bening Guest House Ambulu</p>
                            <p class="deskripsiPenginpan">Jl. Kotta Blater Km  2, Andongsari, Ambulu, Ambulu, Jember, Jawa Timur, Indonesia, 68172</p>
                            <p>Kontak : 081330865120</p>
                        </div>
                    </div>

                    <a class="next" href=""><img src="{{ asset('logo/next.png') }}" alt=""></a>
                </div>
            </div>

            {{-- Kuliner --}}
            <div class="kuliner">
                <h2 class="title">Kuliner</h2>
                <div class="bar"></div>
                <div class="daftarKuliner">

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Pecel Gudeg</p>
                            <p>Pecel gudeg merupakan perpaduan masakan pecel dan gudeg, terdiri dari nasi putih dengan potongan kacang panjang yang disiram dengan bumbu pecel dan diberi tambahan gudeg nangka muda,</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Bakso Kabut</p>
                            <p>Bakso kabut merupakan bakso yang dibungkus dengan telur layaknya kabut tebal. Ini menjadi keunikan tersendiri karena berbeda dengan bakso lain yang biasanya telurnya dibungkus di dalam bakso.</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Prol Tape</p>
                            <p>rol tape adalah sejenis kue yang memiliki tekstur semi-basah dan terbuat dari bahan dasar tape yang dicampur dengan tepung terigu, margarin cair, tepung maizena, garam, gula, telur, serta susu cair.</p>
                            <h4>45 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Bakso Kabut</p>
                            <p>Bakso kabut merupakan bakso yang dibungkus dengan telur layaknya kabut tebal. Ini menjadi keunikan tersendiri karena berbeda dengan bakso lain yang biasanya telurnya dibungkus di dalam bakso.</p>
                            <h4>67 m</h4>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Event --}}
            <div class="event">
                <h2 class="title">Event</h2>
                <div class="bar"></div>
                <div class="daftarEvent">

                    <div class="deskripsiEvent">
                        <div class="imgEvent"></div>
                        <div class="namaEvent">
                            <p class="nama">Papuma Fashion Week</p>
                            <p>Papuma Fashion Week (PFW) adalah sebuah acara fashion yang diselenggarakan oleh Perhutani Kesatuan Bisnis Mandiri (KBM) Ekowisata Jawa Timur di Pantai Papuma, Jember. Acara peragaan busana ini menawarkan pengalaman unik dengan latar belakang pantai yang dihiasi oleh tebing-tebing batu karang yang menjulang setinggi sekitar 14 meter.</p>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Ulasan --}}
            <div class="ulasan">
                <h2 class="title">Ulasan</h2>
                <div class="bar"></div>
                <div class="pengisianUlasan">
                    <div class="inputUlasan">
                        <input placeholder="Nama ...." type="text" class="in">
                        <textarea placeholder="Masukkan Ulasan Disini ...." cols="30" rows="10"></textarea>
                        <input class="submit" type="submit">
                    </div>
                    <div class="listKomentar">
                        <div class="komentar">
                            <p class="komentator">Iwan Ambriantono</p>
                            <p class="isiKomentar">datang saat cuti di hari kerja bersama keluarga, alhamdulillah sangat menikmati & menyenangkan....
                                Pantai berpasir putih yg sangat bagus indah dan bersih, cakep banget dgn view perahu yg berderet, dan mobil kita bisa parkir sangat dekat dgn pasir putihnya.
                                Tiket hari kerja Rp 18.000,- & parkir mobil Rp 10.000,- (bisa parkir dimana saja).
                                ngga cobain makanan setempat krn selalu bawa bekal sendiri 😉</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Wiwik Afiefah</p>
                            <p class="isiKomentar">Pantai yg indah.. Deburan ombaknya cantik.. Berpadu dg tebing cadas dan bukit hijaunya.. Akses jalannya agak jelek/p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Rian Hidayat</p>
                            <p class="isiKomentar">Kurang lampu penerangan kalau malem, jalan masuk menuju loketnya aja yang bagus. Selebihnya pemandangannya mantap (tiket mahal)</p>
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