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
                <div class="hero" style="background-image: url('/img/sukamande.jpeg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">PANTAI SUKAMANDE</h2>
                    <p class="desc">Pantai Sukamade merupakan salah satu obyek wisata favorit di TN Meru Betiri, Kabupaten Banyuwangi. Selain panorama pantai, taman nasional seluas 52.626 hektare tersebut juga menyimpan potensi flora dan fauna lainnya, seperti elang jawa, macan tutul, banteng, bunga padmosari atau rafflesia zollingeriana, dan sebagainya. Keunikan Pantai Sukamade adalah pengalaman melihat penyu bertelur di malam hari yang tentunya tidak bisa didapat di sembarang pantai.  Seksi Pengendalian Ekosistem Hutan Madya Taman Nasional Meru Betir, Nur Rohmah mengatakan, hampir setiap malam terdapat penyu yang mendatangi kawasan Pantai Sukamade untuk bertelur. </p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Soni</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62 853 3615 8116</p>
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
                        <h1>155 km</h1>
                        <p>Jl. Sukamade No.99, Dusun Sukamande, Sarongan, Pesanggaran, Banyuwangi Regency, East Java 68488</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505246.33266110433!2d113.23401986752626!3d-8.378336013373277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd41a6bbe8f50ab%3A0x792ff9e7943dd560!2sPantai%20Sukamade!5e0!3m2!1sid!2sid!4v1701005970478!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">Java Turtle Lodge Meru Betiri</p>
                            <p class="deskripsiPenginpan">Jl. Sukamade No.100, Dusun Krajan, Sarongan, Pesanggaran, Banyuwangi Regency, East Java 68488</p>
                            <p>Kontak : 0851-3040-9245</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Sukamade Adventure</p>
                            <p class="deskripsiPenginpan">Jl. Sukomade Desa No.24, RT.01/RW.03, Dusun Krajan, Sarongan, Kec. Pesanggaran, Kabupaten Banyuwangi, Jawa Timur 68488</p>
                            <p>Kontak : 0811-3610-42</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">One South by Amithya</p>
                            <p class="deskripsiPenginpan">Jalan Sumber Agung Pesanggaran, Dusun Pancer, Sumberagung, Pesanggaran, Banyuwangi Regency, East Java 68488</p>
                            <p>Kontak : 0822-2895-9939 </p>
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
                            <p class="name">Nasi Tempong</p>
                            <p>Hidangan ini terdiri dari campuran sayuran seperti bayam, kenikir, dan daun kemangi yang telah direbus, disajikan dengan tahu, tempe, bakwan jagung goreng, dan ikan jambal goreng dengan tepung.</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Pindang Koyong</p>
                            <p>Pindang koyong merupakan salah satu makanan khas dari Banyuwangi yang mempunyai cita rasa pedas dan asam. Ikan pindang yang diolah dengan irisan belimbing wuluh dan cabai rawit membuatnya terasa segar.</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Botok Tawon</p>
                            <p>Botok tawon merupakan kuliner yang cukup unik karena berbahan dasar sarang tawon atau sarang lebah. Sarang tawon tersebut diolah dengan bumbu sederhana khas Indonesia</p>
                            <h4>45 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Kuliner 1</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi?</p>
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
                            <p class="nama">Melepaskan bayi penyu ke laut</p>
                            <p>Pengunjung yang datang dan menginap pasti akan mendapatkan kesempatan melepas liarkan tukik atau anak penyu di Pantai Sukamade, setelah selama hampir dua bulan ditetaskan secara semi alami di penangkaran. elain melepas liarkan tukik ke habitat aslinya di laut. Pengunjung juga bisa melihat penangkaran telur-telur penyu berbagai jenis di Sukamade. Mulai dari Penyu Hijau, Penyu Lekang, Penyu Sisik dan Penyu Belimbing.</p>
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
                            <p class="komentator">Haris Riyanto</p>
                            <p class="isiKomentar">Pantai sukamade.. cocok untuk orang orang yang berjiwa adventure... jalur melewati beberapa aliran sungai.. untuk fun off road cocok lah tetapi mobil dengan ground clearence rendah jangan memaksa kesini. Bisa menggunakan jasa sewa jeep yang di sediakan pengelola. Ada penginapan di pantainya. Pada saat malam juga bisa melihat penyu bertelur lalu paginya bisa melepaskan tukik.. jossss banget dah sukamade</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Dian Purwaningsihx</p>
                            <p class="isiKomentar">kl mau kesini saran saya nyewa jeep dulu soalnya bakal nyebrang sungai dan jalannya masih bebatuan. penginapan disukamade jg termasuk murah,dr tmpat observasi penyu ke pantai cm 700meter. ditemani mas junaidi n team</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Virgiawan Arighi</p>
                            <p class="isiKomentar">Tempat yang wajib di kunjungi khususnya untuk orang lokal wilayah Banyuwangi sendiri, lebih cocok dan lebih berkesan berkunjung bersama keluarga/teman, akses jalan menuju kesini cukup sulit apalagi pas musim hujan, selebihnya keren 😎 salam dari rombongan Ikatan Pecinta Alam SMAN 1 Genteng (IPASTU) 2017-2018 😁 🙏 …</p>
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