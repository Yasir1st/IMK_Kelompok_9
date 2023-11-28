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
                <div class="hero" style="background-image: url('/img/gumbolo.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">RANU GUMBOLO</h2>
                    <p class="desc">Nama Ranu Gumbolo Tulungagung sendiri berasal dari Ranu Kumbolo atau danau terkenal di jalur pendakian Gunung Semeru. Sekilas, tampilan Ranu Gumbolo Tulungagung memang mirip dengan danau Ranu Kumbolo. Sehingga, dinamai mirip dengan Ranu Kumbolo. Sebelum menjadi destinasi wisata Tulungagung yang hits seperti sekarang, Ranu Gumbolo hanya dimanfaatkan untuk irigasi, sama seperti Waduk Wonorejo. Sejarah Ranu Gumbolo Tulungagung dibuka sebagai destinasi wisata hingga sekarang dimulai pada tahun 2016.
                        Nama "Ranu Gumbolo Tulungagung" diambil dari Ranu Kumbolo, danau terkenal di jalur pendakian Gunung Semeru. Secara sekilas, Ranu Gumbolo Tulungagung memiliki tampilan yang mirip dengan Ranu Kumbolo, sehingga dinamai dengan serupa. Awalnya, Ranu Gumbolo hanya digunakan untuk keperluan irigasi, mirip dengan fungsi awal Waduk Wonorejo. Sejarahnya sebagai destinasi wisata dimulai sekitar tahun 2016. Terletak di Desa Bantengan, Mulyosari, Pagerwojo, Kabupaten Tulungagung, Provinsi Jawa Timur, Ranu Gumbolo Tulungagung kini menjadi salah satu tujuan wisata terkenal. Lokasinya berada di sebelah barat Tulungagung.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Dinas Kebudayaan dan Pariwisata Kabupaten Tulungagung</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>(0335)5237600</p>
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
                        <h1>130 km</h1>
                        <p>Bantengan, Mulyosari, Kec. Pagerwojo, Kabupaten Tulungagung, Jawa Timur 66291</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505657.48271235544!2d111.88937944470615!3d-8.055589535501221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e4655d4199f7%3A0x9b16e5d3d33fd39!2sRanu%20Gumbolo%20Tulungagung!5e0!3m2!1sid!2sid!4v1701189655652!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">Swaloh Resort & Spa</p>
                            <p class="deskripsiPenginpan">Bendungan Wonorejo, Bantengan, Mulyosari, Kec. Pagerwojo, Kabupaten Tulungagung, Jawa Timur 66262</p>
                            <p>Kontak :  (0355) 335500</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama"> Wonorejo Hotel & Resort</p>
                            <p class="deskripsiPenginpan">Jl. Raya Waduk Wonorejo, Bantengan, Mulyosari, Kec. Pagerwojo, Kabupaten Tulungagung, Jawa Timur 66262</p>
                            <p>Kontak : 0812-1747-8911</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">SUPER OYO 91568 Trisna Srabah Resort Homestay & Resto</p>
                            <p class="deskripsiPenginpan">Rain Station, Bus Station, 30, Tulung, Bolorejo, Kabupaten Tulungagung, Jawa Timur 66215</p>
                            <p>Kontak : (021) 29707601</p>
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
                            <p class="name">Sate Ayam Pak Sadi</p>
                            <p>Sate ayam adalah kuliner khas Indonesia yang terbuat dari daging ayam yang dibumbui dan kemudian ditusuk dengan tusuk sate. Sate ayam umumnya disajikan dengan bumbu kacang, lontong, dan kerupuk.</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Nasi Pecel Bu Yati</p>
                            <p>Pecel adalah kuliner khas Jawa Timur yang terdiri dari nasi, sayuran, dan bumbu pecel. Pecel umumnya disajikan dengan berbagai macam sayuran, seperti kangkung, bayam, tauge, kacang panjang, dan mentimun.</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Bakso Pak Slamet</p>
                            <p>Bakso adalah kuliner khas Indonesia yang terbuat dari daging sapi giling. Bakso umumnya disajikan dengan kuah kaldu, mie, bihun, tahu, dan telur.</p>
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
                            <p class="nama">Festival Ranu Gumbolo</p>
                            <p>Festival Ranu Gumbolo adalah acara tahunan yang diadakan pada bulan Juli. Festival ini merayakan budaya dan tradisi masyarakat setempat. Ada banyak acara yang berlangsung selama festival termasuk tarian tradisional, musik, dan stan makanan.</p>
                        </div>
                    </div>

                    <div class="deskripsiEvent">
                        <div class="imgEvent"></div>
                        <div class="namaEvent">
                            <p class="nama">Kompetisi Memancing Ranu Gumbolo</p>
                            <p>Kompetisi Memancing Ranu Gumbolo merupakan acara tahunan yang diadakan pada bulan Agustus. Kompetisi ini terbuka untuk penduduk lokal dan wisatawan. Pemenang kompetisi ini adalah orang yang berhasil menangkap ikan terbesar.</p>
                        </div>
                    </div>

                    <div class="deskripsiEvent">
                        <div class="imgEvent"></div>
                        <div class="namaEvent">
                            <p class="nama">Festival Mengamati Burung Ranu Gumbolo </p>
                            <p>Festival Mengamati Burung Ranu Gumbolo adalah acara tahunan yang diadakan pada bulan September. Festival ini merupakan kesempatan yang bagus untuk melihat beberapa spesies burung yang hidup di daerah tersebut. </p>
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
                            <p class="komentator">Shofiana</p>
                            <p class="isiKomentar">jalan kesini masih yaaa... begitulahh, tapi plus nya mudah dicari, lingkungan asri, rumput hijaunya luas, cocok kalau mau piknik sama temen-temen, atau sama keluarga, mau cari inspirasi juga cocokk, hawanya juga sejuk (tergantung kesana jam berapa)</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Gina Atikah</p>
                            <p class="isiKomentar">Jalan menuju tempat masih bnyak yg rusak, namun pemandangan bagus, tempat tidak sedingin yg saya kira, bagus untuk camping, terdapat sewa kursi dan meja lipat per item 5k, fee masuk 8k, parkir 2k</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Lindut Channel</p>
                            <p class="isiKomentar">Pemandangannya indah sejuk
                                Tiket masuk dan parkir juga terjangkau
                                Saran jangan kesiangan kalo kesini soalnya puanass pol, enakan pagi dan sore lihat sunset</p>
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