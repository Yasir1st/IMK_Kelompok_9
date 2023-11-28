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
                <div class="hero" style="background-image: url('/img/cinet.png');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">Kedung Cinet</h2>
                    <p class="desc">Kedung Cinet, sebuah destinasi alam terpencil di Jombang, memikat para pengunjung dengan pesonanya yang unik. Sungai ini terletak di tengah hutan, memberikan suasana alam yang tenang dan asri. Namun, yang benar-benar mengesankan para pengunjung adalah deretan bebatuan yang terletak di tepi sungai, yang seiring waktu terkikis dan membentuk struktur yang mengagumkan. Meskipun area ini tidak terlalu luas, batu-batuan berwarna cokelat muda dengan sentuhan nuansa cokelat tua hingga cokelat kemerahan sering dijuluki sebagai "Grand Canyon Mini." Keelokan Kedung Cinet juga tercermin dari aliran sungai yang jernih, dengan warna hijau berkilau seperti permata berharga yang memikat hati setiap pengunjung. Tempat ini adalah tempat yang sempurna untuk bersantai, menjelajahi keajaiban alam, atau sekadar menikmati ketenangan di tengah hutan yang alami dan indah.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Sungai Maron Pacitan</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62 853 3137 7611</p>
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
                        <h1>162 km</h1>
                        <p>H47M+6JP, Pojok Klitih, Plandaan, Tanggungan, Klitih, Kec. Plandaan, Kabupaten Jombang, Jawa Timur 61456</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506157.52822564315!2d112.09578813416056!3d-7.644846159100706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783b8db2cdd47f%3A0x9652c283b06081b0!2sKedung%20Cinet!5e0!3m2!1sid!2sid!4v1701185452876!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">Cempaka Mas Hotel</p>
                            <p class="deskripsiPenginpan">Jalan Cempaka 18A Jombang, Jawa Timur Indonesia, Jombang City Center, Jombang, Jawa Timur, Indonesia, 61481</p>
                            <p>Kontak : (0321) 864751</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Hotel Yusro Jombang (Family Hotel) Restaurant & convention</p>
                            <p class="deskripsiPenginpan">JL.SOEKARNO-HATTA,NO.25,NGLUNGGE,KEPLAKSARI,KEC.PETERONGAN, Peterongan, Jombang, Jawa Timur, Indonesia, 61481</p>
                            <p>Kontak : (0321) 878800</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Horison Yusro Jombang</p>
                            <p class="deskripsiPenginpan">Jalan Soekarno Hatta No.25, Peterongan, Jombang, Jawa Timur, Indonesia, 61481</p>
                            <p>Kontak : (0321) 878800</p>
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
                            <p class="name">Nasi Kikil Kuning Mojosongo</p>
                            <p>Nasi Kikil adalah makanan tradisional berupa nasi yang dihidangkan bersama dengan sayur lodeh kikil. Nasi Kikil ini biasanya disajikan dengan sederhana yaitu menggunakan daun pisang yang dipincuk. </p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Ketan Merdeka</p>
                            <p>Nama "Ketan Merdeka" terinspirasi dari perjuangan kemerdekaan Indonesia. Nama ini dipilih untuk menghormati para pahlawan yang berjuang untuk memerdekakan Indonesia dari penjajahan</p>
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
                            <p class="nama">Save Cinet</p>
                            <p>Sav cinet merupakan kegiatan yang diadakan oleh sekumpulan pemuda yang tergabung dalam wadah “Explore Jombang“ mengadakan giat yang bertajuk “Save Cinet“ yaitu membersihkan sampah yang ada di sekitar Kedung Cinet dan pelepasan ikan Guppy. </p>
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
                            <p class="komentator">Ayuu Main Yuk</p>
                            <p class="isiKomentar">Tempatnya indah walau aksesny untuk turun agak sulit, jalanny juga udh bagus menuju kesana apabila dgn motor cmn kmrn mobil kurang tinggi jdi ga bisa masuk krna jalannya banyak bebatuan</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Dhe Valcharry</p>
                            <p class="isiKomentar">Wisata kurang terawat, jembatannya sudah mulai lapuk kayunya jalannya juga ngeri soalnya sebelahnya lgsg jurang.. Mgkn karena udah ditutup tempat wisatanya</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">N3Y</p>
                            <p class="isiKomentar">Tempat wisata yg masih alami, bagus siiih...  Air penuh g bs smp tyrun ke bawah. Jalan menuju kesana masih tanah, licin kl ujan. Ati2 gaess.... Pake goggle map sampe kok....</p>
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