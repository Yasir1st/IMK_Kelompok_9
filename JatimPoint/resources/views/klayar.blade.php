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
                <div class="hero" style="background-image: url('/img/klayar.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">PANTAI KLAYAR</h2>
                    <p class="desc">Pantai Klayar adalah sebuah surga alam yang terletak di Pacitan, sebuah wilayah yang membatasi Jawa Timur dan Jawa Tengah di sisi selatan Pulau Jawa. Pantai ini tepatnya terletak di Desa Sendang, Kecamatan Donorojo, Kabupaten Pacitan, sekitar 40 km ke arah barat dari Kota Pacitan. Pantai Klayar dikenal oleh pesona alamnya yang memukau.

                        Pantai ini memperlihatkan hamparan pasir putih yang meluas, disertai dengan ombak yang memecah dengan indah, seolah-olah kristal biru. Pantai Klayar diapit oleh dua bukit karang yang menghiasi pemandangan di sisi kanan dan kiri pantai. Pengunjung memiliki kesempatan untuk mendaki bukit karang di sebelah kanan pantai dan menikmati pemandangan panorama yang sangat indah dari sebuah gardu pandang. Dari sini, Anda bisa mengagumi keindahan laut, pasir putih, serta kekuatan alam yang mengagumkan yang ditawarkan oleh Pantai Klayar, menjadikannya tempat yang sangat cocok bagi para pencinta alam dan pecinta keindahan alam yang ingin merasakan keajaiban alam Pulau Jawa.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Pantai Klayar Pacitan</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62 813 5775 7298</p>
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
                        <h1>367 km</h1>
                        <p>Kabupaten Pacitan, Jawa Timur 63554</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1401060.2884588228!2d110.91746349385573!3d-7.974757689496833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bd0f9f35323fb%3A0x82af06ae57eb3c73!2sPantai%20Klayar!5e0!3m2!1sid!2sid!4v1701009254671!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">Homestay Dua Putra Pantai Klayar</p>
                            <p class="deskripsiPenginpan">Jl. Pantai Klayar No.7, Kendal, Sendang, Kec. Donorojo, Kabupaten Pacitan, Jawa Timur 63554</p>
                            <p>Kontak : 082228927231</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Larasati Homestay 1 & 2</p>
                            <p class="deskripsiPenginpan">Jl. Pantai Klayar, Kendal, Sendang, Kec. Donorojo, Kabupaten Pacitan, Jawa Timur 63554</p>
                            <p>Kontak : (021) 29707601</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">OYO 91988 Azka Homestay Klayar</p>
                            <p class="deskripsiPenginpan">Klayar beach Pacitan, 1, Kabupaten Pacitan, Jawa Timur 63554</p>
                            <p>Kontak : : (021) 29707601</p>
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
                            <p class="name">Sate Tuna</p>
                            <p>ate tuna adalah hidangan yang terdiri dari potongan daging tuna yang ditusuk dan dipanggang di atas bara api atau gril. Daging tuna tersebut biasanya telah direndam dalam bumbu atau marinasi khusus sebelum dipanggang.</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Sayur Kalakan </p>
                            <p>Hidangan ini mirip dengan sajian mangut ndas manyung khas Pati, yaitu sajian kepala ikan manyung yang diolah dengan kuah santan. Namun, sayur kalakan khas Pacitan tidak menggunakan kepala ikan manyung dalam sajian ini</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Sego Gobyos</p>
                            <p>rol tape adalah sejenis kue yang memiliki tekstur semi-basah dan terbuat dari bahan dasar tape yang dicampur dengan tepung terigu, margarin cair, tepung maizena, garam, gula, telur, serta susu cair.</p>
                            <h4>45 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Bakso Kabut</p>
                            <p>Ini adalah hidangan nasi yang disajikan dengan sayur ayam atau daging super pedas. Karena tingkat kepedasannya melebihi rata-rata, maka hidangan ini dinamakan sego gobyos, di mana keringat akan mengalir bercucuran</p>
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
                            <p class="nama">Festival Gebyar Klayar</p>
                            <p>Yayasan Pendidikan Astra - Michael D. Ruslim (YPA-MDR) telah berkolaborasi dengan Pemerintah Kabupaten Pacitan untuk menyelenggarakan Festival Gebyar Klayar. Festival ini merupakan sebuah perayaan budaya yang melibatkan sekolah-sekolah di Kecamatan Donorojo, dan diselenggarakan di Pantai Klayar, Desa Sendang, Kecamatan Donorojo.</p>
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