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
                <div class="hero" style="background-image: url('/img/semeru.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">Gunung Semeru</h2>
                    <p class="desc">Gunung Semeru, juga dikenal sebagai Gunung Meru, adalah gunung berapi kerucut tertinggi di Pulau Jawa, Indonesia. Dengan puncaknya, Mahameru, mencapai ketinggian 3.676 meter di atas permukaan laut, gunung ini menjadi salah satu puncak tertinggi di Indonesia. Gunung Semeru terletak di Provinsi Jawa Timur dan termasuk dalam wilayah Kabupaten Malang dan Kabupaten Lumajang. Kawah di puncaknya dikenal sebagai Jonggring Saloko. Gunung Semeru adalah bagian dari Taman Nasional Bromo Tengger Semeru dan memiliki variasi ekosistem yang mencakup hutan Dipterokarp, hutan Montane, dan hutan gunung Ericaceous. Selain menawarkan keindahan alam yang menakjubkan, Gunung Semeru juga memiliki nilai spiritual yang tinggi bagi masyarakat setempat.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Dinas Pariwisata Kabupaten Lumajang</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>(0334) 882-058</p>
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
                        <h1>65.7 km</h1>
                        <p>Ngampo, Pasrujambe, Kec. Pasrujambe, Kabupaten Lumajang, Jawa Timur</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31599.510230759395!2d112.90176482497233!3d-8.107716530791059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd63e89e1d817bb%3A0x9c14d4ed3c488f54!2sGn.%20Semeru!5e0!3m2!1sid!2sid!4v1700672059516!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">Pak Tasrip Homestay</p>
                            <p class="deskripsiPenginpan">Dsn.Besaran, RT.01/rw01, Ranupane Satu, Ranupani, Kec. Senduro, Kabupaten Lumajang, Jawa Timur 67361</p>
                            <p>Kontak : 081249423768</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Artha Cottages</p>
                            <p class="deskripsiPenginpan">Jl. Sultan Agung No.Raya, Kalibening, Pronojiwo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374</p>
                            <p>Kontak : 0811213347</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Mountain Ecolodge</p>
                            <p class="deskripsiPenginpan">Dusun Besuki Kidul, Besuki Selatan, Wringinanom, Kec. Poncokusumo, Kabupaten Malang, Jawa Timur 16510</p>
                            <p>Kontak : 0812-8616-919</p>
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
                            <p class="name">Lontong Petis</p>
                            <p>Lontong petis adalah hidangan yang terdiri dari lontong (nasi ketan yang dibungkus daun pisang), tahu, tempe, sayuran, dan ayam yang disajikan dengan kuah kacang yang telah dicampur dengan petis.</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Bledus</p>
                            <p>Bledus adalah hidangan khas Lumajang yang terbuat dari jagung pipil kering. Meskipun secara tampilan mirip dengan jagung rebus biasa, bledus memiliki perbedaan utama. Proses perebusannya lebih lama.</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Kue Latok</p>
                            <p>Kue latok biasanya terbuat dari bahan dasar ketan atau beras ketan yang direbus dan kemudian digoreng hingga mengembang. Proses penggorengan ini membuat kue latok menjadi garing di luar, sementara tetap lembut di dalam.</p>
                            <h4>45 m</h4>
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
                            <p class="nama">Tengger Festival</p>
                            <p>Tengger festival digelar di Ampiteater Ranupane, yang terletak di Desa Ranupane, Kecamatan Senduro, Kabupaten Lumajang, Jawa Timur. Ampiteater ini adalah tempat seni yang terletak dekat dengan pintu masuk pendakian Gunung Semeru, salah satu gunung tertinggi di Jawa Timur.</p>
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
                            <p class="komentator">Safin Asa</p>
                            <p class="isiKomentar">Pemandangannya luar biasa, sangat direkomendasikan saat kamu mau melihat Bintang di Langit atau mau naik jip lama ke bukit terbakar. Juga ada jembatan kaca yang dipastikan kuat dan memiliki tampak yang indah. Pantas untuk 5 bintang!</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Jelajah Geografi</p>
                            <p class="isiKomentar">Puncak tertinggi di jawa, jalur pendakiannya lumayan panjang. Sayang banyak pungli yg cukup menguras kantong, tapi terbayarkan dengan keindahannya</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Marshanda Andriani Whisnutama</p>
                            <p class="isiKomentar">Puncak tertinggi dipulau jawa.. kangen banget sama semeru ini kapan buka lagi ya?? Terakhir kesana cuma sampai kalimati, ga ikut summit🥲🥲 bagussss bangettttttt dari bawah sampai atassss</p>
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