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
                <div class="hero" style="background-image: url('/img/ijen.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">Kawah Ijen</h2>
                    <p class="desc">Gunung Ijen adalah sebuah gunung berapi yang terletak di perbatasan Kabupaten Banyuwangi dan Kabupaten Bondowoso, Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.386 mdpl. Gunung Ijen terkenal dengan kawah berwarna biru yang mempesona dan memiliki danau asam yang terpancar oleh api biru alami yang berasal dari gas belerang. Pengunjung dapat menikmati pendakian ke puncak gunung untuk menyaksikan pemandangan kawah, danau, serta mengagumi keindahan alam sekitar. Selain itu, Gunung Ijen juga terkenal dengan tambang belerang tradisional yang dilakukan oleh para penambang lokal. Wisatawan sering datang ke sini untuk berpetualang dan menikmati pesona alam yang unik ini.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Banyuwangi Tourism</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62 812 1640 874</p>
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
                        <p>Jl. Kawah Ijen, Tamansari, Licin, Kabupaten Banyuwangi, Jawa Timur 68454</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31603.340147832554!2d114.2527131!3d-8.0588236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd149f2110ae607%3A0x7c04ef029d5e39bc!2sGn.%20Ijen!5e0!3m2!1sid!2sid!4v1700669167912!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            {{-- Penginapan --}}
            <div class="penginapan">
                <h2 class="title">Penginapan Terdekat</h2>
                <div class="bar"></div>
                <div class="listPenginapan">

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/avrila.jpg');">
                        <p class="jarak">50,6 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Avrila Ijen Cool Homestay</p>
                            <p class="deskripsiPenginpan">Perk. Sri Wulung, Tamansari, Kec. Licin, Kabupaten Banyuwangi, Jawa Timur 68454</p>
                            <p>Kontak : 0822-4050-1888</p>
                        </div>
                    </div>

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/iglam.jpg');">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">I-glam Ijen</p>
                            <p class="deskripsiPenginpan">Jl. Kawah Ijen, Dusun Ampelgading, Paltuding, Kec. Licin, Kabupaten Banyuwangi, Jawa Timur 68454</p>
                            <p>Kontak : 0852-1731-0289</p>
                        </div>
                    </div>

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/ijen.jpg');">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Pesona Java Ijen Homestay</p>
                            <p class="deskripsiPenginpan">RT./RW.001/002, Dusun Krajan, Tamansari, Kec. Licin, Kabupaten Banyuwangi, Jawa Timur 68485</p>
                            <p>Kontak : 0858-4650-7820</p>
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
                        <div class="imgKuliner" style="background-image: url('/imgKuliner/rujaksoto.jpeg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Rujak Soto</p>
                            <p>Rujak soto merupakan perpaduan antara rujak janganan dan soto. Jadi, rujak soto dibuat dari berbagai sayuran, kacang, cingur, dan petis, kemudian disiram kuah soto berisi soto babat/daging berwarna kuning di atasnya. </p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner" style="background-image: url('/imgKuliner/tempong.jpeg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Nasi Tempong</p>
                            <p>Nasi tempong, juga dikenal sebagai sego tempong, merupakan hidangan khas dari Kabupaten Banyuwangi. Hidangan ini terdiri dari campuran sayuran seperti bayam, kenikir, dan daun kemangi yang telah direbus.</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner" style="background-image: url('/imgKuliner/leroban.jpeg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Jangan Leroban</p>
                            <p>Leroban atau sambal blotong merupakan sayur khas penduduk Desa Licin, yang berada di kaki Gunung Ijen. Jangan Leroban adalah sebuah hidangan sayuran berkuah yang disajikan dengan menggunakan bahan-bahan sederhana.</p>
                            <h4>45 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner" style="background-image: url('/imgKuliner/kelang.jpeg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Rujak Kelang</p>
                            <p>Rujak kelang terdiri dari potongan buah mangga, ketimun, pepaya, dan bengkoang yang dicacah. Kemudian dicampur dengan kuah pindang ikan yang hangat. Sebagai pelengkap, ditambahkan potongan tahu goreng dan kerupuk</p>
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
                        <div class="imgEvent" style="background-image: url('/imgEvent/flembahijen.jpeg');"></div>
                        <div class="namaEvent">
                            <p class="nama">Festival Lembah Ijen</p>
                            <p>JFestival Lembah Ijen adalah acara tahunan di Gunung Ijen, Banyuwangi, yang bertujuan mempromosikan potensi pariwisata alam dan budaya di daerah tersebut. Festival ini menampilkan beragam atraksi, termasuk pertunjukan seni, lomba tradisional, dan pameran seni. Salah satu daya tarik utamanya adalah blue fire di Kawah Ijen. Selain sebagai hiburan, festival ini mendukung pelestarian lingkungan dan pemberdayaan masyarakat lokal.</p>
                        </div>
                    </div>

                    <div class="deskripsiEvent">
                        <div class="imgEvent" style="background-image: url('/imgEvent/blufirec.jpeg');"></div>
                        <div class="namaEvent">
                            <p class="nama">Banyuwangi Bluefire Ijen Kom Challenge 2023</p>
                            <p>Banyuwangi Blue Fire Ijen KOM adalah sebuah acara bersepeda (KOM singkatan dari "King of the Mountain") yang diselenggarakan di sekitar Gunung Ijen, Banyuwangi. Para peserta bersepeda di lintasan trail yang menantang dengan pemandangan alam yang spektakuler, termasuk kemungkinan melihat fenomena blue fire di kawah Gunung Ijen. Event ini menggabungkan olahraga sepeda dengan eksplorasi alam yang menakjubkan di sekitar Gunung Ijen. </p>
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
                            <p class="komentator">Pramishvary Aisyah H</p>
                            <p class="isiKomentar">Pertama kali ke gunung sbg org Banyuwangi, cantik bgt pemandangannya, walau ngga ke kejar sunrise. Jalannya juga ngga terlalu sulit, banyak spot rehat dan ada taxi naik turun dg harga yaa serupa dg effort bapak-bapaknya. Anginnya lumayan kenceng di atas jadi gabisa melek lama-lama. Dan tentu aja sangat dingin. Sekitar jam 7-an, asap belerang juga udh mulai naik, jadinya perlu lebih cepet lagi untuk naik ke sana.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Ardi Setianto</p>
                            <p class="isiKomentar">Akses ke paltuding cukup bagus, namun tetap hati-hati jika melakukan perjalanan malam untuk mengejar sunrise. Kawasan paltuding di waktu dini hari sangat ramai, beragam penyedia layanan porter. Pemandangan sebelum sunrise sangat indah. Angin di puncak cukup besar.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Naufal Rizky</p>
                            <p class="isiKomentar">Tempat nya bagus, tergantung cuaca.
                                Dari basecamp ke puncak cuma 2 jam kalau hike, buat yang pengen naik becak juga bisa ke atas.</p>
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