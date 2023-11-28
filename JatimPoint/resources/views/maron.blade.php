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
                <div class="hero" style="background-image: url('/img/sungaimaron.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">Sungai Maron</h2>
                    <p class="desc">Sungai maron memiliki air sungai berwarna hijau kebiruan yang merupakan refleksi dari cahaya dari rerimbunan pohon di sekitar sungai. Air Sungai Maron sangat jernih. Pemandangan Sungai Maron berupa pepohonan hijau yang terdapat di tepian sungai selama perjalanan susur sungai, sehingga suasananya sangat sejuk. Karena keindahan alamnya, Sungai Maron mendapat julukan Green Canyon Pacitan dan Sungai Amazon Pacitan.
                        Jarak tempuh Sungai Maron dari pusat Pacitan sekitar 38,8 kilometer dalam waktu tempuh sekitar satu jam 13 menit. Perjalanan akan melewati Jalan Nasional 3, Jalan Basuki Rahmat, Jalan Gatot Subroto, Jalan WR Supratman, dan Jalan Raya Tompak Rinjing. Sedangkan, jarak tempuh Sungai Maron dari Solo sekitar 102,8 kilometer dengan waktu tempuh kurang lebih tiga jam. Rute perjalanan sama dengan rute menuju Goa Gong, kemudian meneruskan perjalanan sejauh 15 kilometer ke arah Selatan. Kondisi jalan cukup bagus, namun mendekati tepi sungai kondisi jalan menjadi kurang bagus dan sedikit menanjak sehingga perlu berhati-hati. Lokasi wisata dekat dengan Pantai Klayar, sehingga wisatawan dapat juga menyambangi dua tempat wisata tersebut.</p>
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
                        <h1>306 km</h1>
                        <p>Maron, Dersono, Kec. Pringkuku, Kabupaten Pacitan, Jawa Timur 63552</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2325519.0847327686!2d110.50528013441317!3d-7.67601757012881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bdc5940de0881%3A0x385aa8482534e59a!2sSungai%20Maron%20Pacitan!5e0!3m2!1sid!2sid!4v1701181301475!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">OYO 91988 Azka Homestay Klayar</p>
                            <p class="deskripsiPenginpan">Klayar beach Pacitan, 1, Kabupaten Pacitan, Jawa Timur 63554</p>
                            <p>Kontak : (021) 29707601</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">OYO 92183 Komang Resort Klayar</p>
                            <p class="deskripsiPenginpan">Jl. Pantai Klayar, Kendal, Sendang, Kec. Donorojo, Kabupaten Pacitan, Jawa Timur 61156</p>
                            <p>Kontak : 0817788016</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Watukarung Ristu Homestay</p>
                            <p class="deskripsiPenginpan">Ketro, Watukarung, Kec. Pringkuku, Kabupaten Pacitan, Jawa Timur 63552</p>
                            <p>Kontak : 082136084343</p>
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
                            <p class="name">Sayur Kalakan </p>
                            <p>Hidangan ini mirip dengan sajian mangut ndas manyung khas Pati, yaitu sajian kepala ikan manyung yang diolah dengan kuah santan. Namun, sayur kalakan khas Pacitan tidak</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Sego Gobyos</p>
                            <p>Sawut Kabut adalah hidangan khas Gunung Bromo yang terbuat dari ubi yang diparut dan irebus hingga menghasilkan tekstur yang kenyal dan cita rasa yang gurih.Ini adalah </p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Punten</p>
                            <p>Punten merupakan makanan khas Pacitan yang berbahan dasar beras. Beras ini dimasak dengan menambahkan santan, bumbu seperti garam dan daun salam.</p>
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
                            <p class="nama">Susur Sungai</p>
                            <p>Susur sungai di Sungai Maron menawarkan pengalaman yang memikat dengan aliran air yang cukup tenang, memungkinkan pengunjung untuk menyusuri sungai dengan naik perahu. Saat Anda menjelajahi sungai ini, Anda akan dikelilingi oleh keindahan alam Pacitan yang memukau. Perjalanan ini sepanjang 4,5 kilometer akan membawa Anda ke Pantai Ngiroboyo, di mana perahu biasanya tiba. </p>
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
                            <p class="komentator">Dewi Wiu</p>
                            <p class="isiKomentar">pemandangannya bagus bgtt, seru sih spot healing terbaikk. Menelusuri air dengan perahuu, bayar 100k untuk sewa perahunyaa. Tenang aman ga ada buayanya atau ular kobraa wwk</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Gatot Pitoyo</p>
                            <p class="isiKomentar">Sebuah pengalaman yang sangat menyenangkan terutama bagi yang sibuk bekerja, serasa seperti di isi ulang kembali segar dan fresh, kondisi sungai yg tenang, air yang jernih seakan di dunia lain, lokasi mudah dijangkau berdekatan dengan pantai Klayar dan pantai Karung. Tidak  disarankan untuk kendaraan besar berpenumpang lebih dari 16 orang, jalan agak sempit sulit bermanuver.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Desti Anggina</p>
                            <p class="isiKomentar">Dilihat dr pintu masuk meragukan karna airnya dangkal, eh begitu naik perahunya ternyata sungainya dalam n banyak airnya. Pemandangannya indah bat, bisa liat pantai ngiroboyo jg. 1 perahu 100 rb, 4 KM an. Mantap pokok 😍😍😍 …</p>
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