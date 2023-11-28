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
                <div class="hero" style="background-image: url('/img/balekambang.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">PANTAI BALEKAMBANG</h2>
                    <p class="desc">Pantai Balekambang terletak sekitar 60 km selatan dari Kota Malang, di Dusun Sumber Jambe, Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Jawa Timur. Akses jalan ke pantai ini sangat nyaman, dengan pemandangan pohon yang memberikan rindang dan udara yang sejuk sepanjang perjalanan.

                        Pantai ini mempesona dengan pasir putih dan air laut yang jernih dan berwarna biru. Tapi yang membuatnya benar-benar istimewa adalah adanya Pura Luhur Amertha Jati yang terletak di sebuah pulau batu karang yang mirip dengan Pantai Tanah Lot di Bali. Untuk mengunjungi pura tersebut, pengunjung dapat menyeberangi jembatan sepanjang 70 meter yang menghubungkannya dengan Pulau Ismoyo. Selain Pulau Ismoyo, terdapat juga Pulau Anoman dan Wisanggeni yang berderet ke arah barat dari pantai ini. Pantai Balekambang menghadirkan kombinasi pesona alam dan nilai budaya yang membuatnya menjadi destinasi yang menarik untuk dikunjungi.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Pantai Belakambang</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62 811 3637 999</p>
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
                        <h1>61,5 km</h1>
                        <p>Jawa Timur</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505504.483067672!2d112.26102702852775!3d-8.177169994862203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a9458651084f%3A0x6b8da077d5b83e2f!2sPantai%20Balekambang!5e0!3m2!1sid!2sid!4v1701010831642!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">PHR_GT2 PENGINAPAN PANTAI BALEKAMBANG</p>
                            <p class="deskripsiPenginpan">Jl. Balekambang, Balaikambang, Srigonco, Kec. Bantur, Kabupaten Malang, Jawa Timur 65179</p>
                            <p>Kontak : 0812-5969-1387</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Penginapan Dhilpratis</p>
                            <p class="deskripsiPenginpan">Jl. Balekambang, Balaikambang, Srigonco, Kec. Bantur, Kabupaten Malang, Jawa Timur 65179</p>
                            <p>Kontak : 0823-3322-3335</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">HOMESTAY CARISTA</p>
                            <p class="deskripsiPenginpan">Ruko Pantai Balekambang Blok A10, Balaikambang, Srigonco, Kec. Bantur, Kabupaten Malang, Jawa Timur 65179</p>
                            <p>Kontak : : 0852-5779-0676</p>
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
                            <p class="name">Sate Klopo</p>
                            <p>Sate klopo adalah kuliner daging yang memakai kelapa dalam proses pembuatannya. Saat sate dipanggang, kelapa parut ditaburkan di atas tusukan daging./p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Seafood Bakar</p>
                            <p>Hidangan seafood bakar sangat populer di Indonesia, terutama di daerah pesisir yang kaya akan hasil laut. Kelezatan hidangan ini terletak pada beragam pilihan ikan</p>
                            <h4>40 m</h4>
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
                            <p class="nama">Upacara Suroan</p>
                            <p>Upacara Suroan adalah perayaan tradisional yang dirayakan oleh masyarakat Jawa, terutama yang beragama Hindu, untuk menyambut tahun baru Jawa atau Suro. Pantai Balekambang menjadi lokasi yang populer untuk pelaksanaan upacara Suroan ini. Dalam upacara ini, umat Hindu berkumpul untuk bersembahyang dan memohon berkah serta keselamatan di tahun yang baru. Ritual melibatkan berbagai perlengkapan dan sesajen yang dipersembahkan kepada para dewa, termasuk sesajen yang diletakkan di Pantai Balekambang.</p>
                        </div>
                    </div>

                    <div class="deskripsiEvent">
                        <div class="imgEvent"></div>
                        <div class="namaEvent">
                            <p class="nama">Upacara Jalanidhi Puja</p>
                            <p>Upacara Jalanidhi Puja adalah ritual yang melibatkan pemujaan dewa-dewi laut, terutama dalam konteks nelayan dan kelautan. Pantai Balekambang yang berlokasi di tepi laut menjadi tempat yang cocok untuk pelaksanaan upacara ini. Selama upacara, umat Hindu memuja Dewa Varuna, yang dianggap sebagai penguasa laut, serta Dewi Sri, dewi pertanian. Mereka berharap agar mendapatkan berkah keselamatan dalam menjalani profesi nelayan dan dalam menggantungkan hidup pada lautan.</p>
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