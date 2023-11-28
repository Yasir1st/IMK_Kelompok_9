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
                <div class="hero" style="background-image: url('/img/bromo2.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">BROMO</h2>
                    <p class="desc">Gunung Bromo, terletak di Kabupaten Probolinggo, Jawa Timur, adalah salah satu gunung berapi paling ikonik di Indonesia. Dengan ketinggian sekitar 2.392 meter di atas permukaan laut, gunung ini menawarkan pengalaman alam yang luar biasa. Yang membuatnya begitu menarik adalah kawahnya yang aktif, yang menjadi objek utama yang sering dikunjungi oleh wisatawan asing maupun lokal.

                        Untuk mencapai bibir kawah, para pengunjung harus menaiki serangkaian tangga yang cukup panjang, yang menghadirkan petualangan tersendiri. Saat mencapai puncak kawah, pengunjung akan disuguhi pemandangan luar biasa dari kawah yang mengeluarkan asap dan abu, menciptakan suasana mistis yang memukau.
                        
                        Selain itu, Gunung Bromo juga dikenal sebagai salah satu tempat terbaik untuk menikmati matahari terbit dan terbenam. Keindahan panorama alam yang dipadu dengan cahaya matahari yang memancar di atas kabut dan asap gunung menciptakan momen yang tak terlupakan bagi para pengunjung. Ini adalah tempat yang sempurna untuk fotografi dan merasakan keajaiban alam yang luar biasa.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Agen Wisata Bromo</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62 813 3289 9993</p>
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
                        <p>Area Gn. Bromo, Podokoyo, Kec. Tosari, Pasuruan, Jawa Timur</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.18086528585!2d112.9427124340608!3d-7.942472071298274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sGn.%20Bromo!5e0!3m2!1sid!2sid!4v1698833034296!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            {{-- Penginapan --}}
            <div class="penginapan">
                <h2 class="title">Penginapan Terdekat</h2>
                <div class="bar"></div>
                <div class="listPenginapan">

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/bilh.jpg');">
                        <p class="jarak">50,6 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Bromo Indah Lestari Homestay</p>
                            <p class="deskripsiPenginpan">Jl. Bromo No.9,Wonokitri, Kecamatan Tosari, Kabupaten Pasuruan, Jawa Timur 67177</p>
                            <p>Kontak : 0813-3474-2064</p>
                        </div>
                    </div>

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/oyo.jpg');">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">OYO 1966 Bromo Hill</p>
                            <p class="deskripsiPenginpan">Jl. Ps. Sayur No.7, Watulumpang, Sukapura, Keca. Sukapura, Kab. Probolinggo, Jawa Timur 67254</p>
                            <p>Kontak : 0857-5557-3382</p>
                        </div>
                    </div>

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/homestayAB.jpg');">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Homestay Anggun Bromo</p>
                            <p class="deskripsiPenginpan">Jl. Ringgit, Ponjol, Wonokerto, Kec. Sukapura, Kabupaten Probolinggo, Jawa Timur 67254</p>
                            <p>Kontak : 0823-0247-7773</p>
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
                        <div class="imgKuliner" style="background-image: url('/imgKuliner/aron.jpeg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Nasi Aron</p>
                            <p>Nasi Aron terbuat dari jagung berbiji putih yang hanya terdapat di kawasan Gunung Bromo. Keunikan makanan ini terletak pada rasa gurih dan teksturnya yang lembut.</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner" style="background-image: url('/imgKuliner/sawut.jpeg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Sawut Kabut</p>
                            <p>Sawut Kabut adalah hidangan khas Gunung Bromo yang terbuat dari ubi yang diparut dan irebus hingga menghasilkan tekstur yang kenyal dan cita rasa yang gurih.</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner" style="background-image: url('/imgKuliner/pokak.jpeg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Pokak</p>
                            <p>Wedang Pokak, adalah minuman tradisional yang sangat populer di Jawa Timur. Minuman ini biasanya disajikan dalam bentuk sirup yang mudah diseduh.</p>
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
                            <p class="nama">Jazz Gunung Bromo</p>
                            <p>Jazz Gunung Bromo 2023 adalah pementasan musik jazz dengan tingkat internasional yang secara rutin diadakan setiap tahun di kawasan pegunungan Tengger, khususnya di amfiteater Hotel Jiwa Jawa Resort Bromo. Acara ini telah menjadi wadah unik di mana musik jazz dengan unsur etnik terpadu menghiasi panggung terbuka di bawah langit terbuka yang mempesona, dengan latar belakang keindahan alam Gunung Bromo.</p>
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
                            <p class="komentator">Esrii 32</p>
                            <p class="isiKomentar">Gak usah banyak ina inu, langsung gass aja yang mau ke Bromo, backpaker-an atau ikut open trip udah gampil banget ke Bromo mah.
                                Penginapan, akomodasi, sewa motor/mobil, makanan udah ga perlu dijelasin lagi, banyak!!!
                                Rekomen buat stay beberapa hari sih kalo ke Bromo, biar sekalian explore tempat wisata lainnya daerah Malang, Batu dll.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Selin Tia</p>
                            <p class="isiKomentar">Gaada planning dari jauh hari buat kesini, jadi tiba2 pengen ke Bromo , langsung cari hotel dan sewa Jeep untung dapet ahaha, akhirnya ke Bromo juga, happy banget, tour guide disini ramah2 dan bener2 puas deh holiday di Bromo, bagus banget view-nya, pokoknya harus ke Bromo lagi.. emang bowleh secandu ituuuu.. oh ya makanan yg dijual disana juga harga normal guys jgn takut.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Fikri Indrawan</p>
                            <p class="isiKomentar">Salah satu gunung terbaik di pulau jawa. Susananya masih asri. Udara sejuk. Menggunakan jasa jeep untuk sampai ke puncak. Pemandangan luar biasa indah.
                                Salah satu gunung terbaik di pulau jawa. Susananya masih asri. Udara sejuk. Menggunakan jasa jeep untuk sampai ke puncak. Pemandangan luar biasa indah.</p>
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