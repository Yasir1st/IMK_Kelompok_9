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
                <div class="hero" style="background-image: url('/img/tumpaksewu.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">TUMPAK SEWU</h2>
                    <p class="desc">Air Terjun Tumpak Sewu terletak di perbatasan Malang-Lumajang, Jawa Timur tepatnya berada pada dua desa yaitu Desa Sidomulyo, Kecamatan Pronojiwo, Kabupaten Lumajang dan Desa Sidorenggo Kecamatan Ampel Gading Kabupaten Malang Provinsi Jawa Timur. Air Terjun Tumpak Sewu atau disebut juga Coban Sewu adalah sebuah air terjun berketinggian sekitar 120 meter.
                        Air Terjun Tumpak Sewu menyuguhkan keindahan yang tiada tara. Formasinya terbilang unik karena memiliki aliran air yang melebar seperti tirai. Bahkan, Air Terjun Tumpak Sewu disebut mirip dengan Air Terjun Niagara di Amerika Serikat. Nama Tumpak Sewu sendiri memiliki arti air terjun yang bertumpuk-tumpuk, maksudnya adalah bahwa Air Terjun Tumpak Sewu Semeru adalah gabungan dari banyaknya air terjun yang ada sehingga sangat menakjubkan.
                        Adapun Fasilitas yang ada di dalam obyek wisata meliputi, Pakir, Toilet,Pusat Informasi,Layanan Kesehatan, Rest Area, Mushola, Rumah Makan, Pusat Perbelanjaan, Homestay, Ojek Wisata, Jaringan Handphone, Tempat Sampah, Petunjuk Arah. Dan aksesebilitas Jalan beraspal dapat ditempuh dengan kendaraan roda 2 dan roda 4 hanya sampai di parkiran. Setelah sampai di parkiran kendaraan, menuju ke View Point berjalan kaki sejarak ± 400 KM</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Pemerintah Kabupaten Lumajang</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>0334-881146-881255</p>
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
                        <h1>72,1 km</h1>
                        <p>Jl. Raya Dampit-Lumajang No.16, Besukcukit, Sidomulyo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252803.1406131305!2d112.5945759148823!3d-8.096478456386375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd613f7dbd3426f%3A0x7c73adc5c97d11c2!2sAir%20Terjun%20Tumpak%20Sewu!5e0!3m2!1sid!2sid!4v1701192526274!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            {{-- Penginapan --}}
            <div class="penginapan">
                <h2 class="title">Penginapan Terdekat</h2>
                <div class="bar"></div>
                <div class="listPenginapan">

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/tumpaksewucottage.jpg');">
                        <p class="jarak">50,6 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Tumpak Sewu Cottages</p>
                            <p class="deskripsiPenginpan">Besukcukit, Sidomulyo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374</p>
                            <p>Kontak : 0853-3123-8963</p>
                        </div>
                    </div>

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/dcorner.jpg');">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">D'Corner Homestay</p>
                            <p class="deskripsiPenginpan">Besuk cukit, RT.7/RW.12, Besukcukit, desa sidomulyo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374</p>
                            <p>Kontak : 0823-3550-0653</p>
                        </div>
                    </div>

                    <div class="penginapanBox" style="background-image: url('/imgPenginapan/dear.jpg');">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Dear Traveller Guest House and Glamping</p>
                            <p class="deskripsiPenginpan">Krajan, RT.3/RW.11, Krajan, Sidomulyo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374</p>
                            <p>Kontak : 0813-2803-1330</p>
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
                        <div class="imgKuliner"  style="background-image: url('/imgKuliner/empok.jpeg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Sego Empok</p>
                            <p>Nasi empok adalah nasi jagung yang dicampur dengan nasi putih (beras), dan biasanya dimakan bersama sayur nangka muda, kemangi dan urap-urap. Lauknya pun beragam, ada tempe, mendol, dan dadar jagung. </p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner" >
                        <div class="imgKuliner" style="background-image: url('/imgKuliner/peceltelo.jpg');"></div>
                        <div class="nameKuliner">
                            <p class="name">Pecel Telo</p>
                            <p>Pecel telo merupakan kuliner khas Lumajang, Jawa Timur. Satu porsi hidangan ini biasanya berisi aneka sayuran seperti jantung pisang, semanggi, genjer, kacang panjang dan kecambah.</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"  style="background-image: url('/imgKuliner/tapepisang.webp');"></div>
                        <div class="nameKuliner">
                            <p class="name">Tape Pisang</p>
                            <p>Tape pisang merupakan makanan khas daerah Lumajang. Tape pisang ini harus dibuat menggunakan pisang kepok yang matang dari pohon dengan kematangna yang pas,</p>
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
                        <div class="imgEvent" style="background-image: url('/imgEvent/sadarwisatats.jpg');"></div>
                        <div class="namaEvent">
                            <p class="nama">Gerakan sadar wisata dan Aksi Sapta Pesona di Tumpak Sewu</p>
                            <p>Provinsi Jawa Timur kembali menyelenggarakan kampanye sadar wisata dan mengaktifkan Sapta Pesona di Tumpak Sewu Waterfall, Pronojiwo. Acara dimulai dengan kata sambutan dari kepala bidang Destinasi Pariwisata, dilanjutkan dengan tindakan Sapta Pesona seperti penanaman pohon pucuk merah dan membersihkan sekitar area wisata Tumpak Sewu. </p>
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
                            <p class="komentator">Fristian Fringz</p>
                            <p class="isiKomentar">Mantap air terjun yg keren dan menakjubkan apalagi rute2 menuju air terjunya sangat2 keren dengan naik turun tangga dan melewati bebatuan dan air dan tentunya membuat kita utk memacu adrenalin dan tentunya ketika uda sampai terbayar sudah lelah kita utk melihat keindahan banyak air terjun yg bisa kita nikmati....dan jangan lupa bawa uang utk memasuki air terjunya kita membayar retribusi  10 K ya gpp lah buat perawatan jalan juga c</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Ananda Rahmah</p>
                            <p class="isiKomentar">Tracknya lumayan untuk orang yang jarang olahraga tapi tidak menyesal setelah melihat air terjunnya, benar-benar indah, ke sini kalau bisa pakai sendal biar ga basah sepatunya, perlu bawa ganti baju kalau ingin turun ke bawah karena bisa basah bajunya, kalau bisa juga pakai tour guide atau sama partner yang sudah pernah ke sini biar aman dan tenang pas jalan turun ataupun naiknya karena sudah mengetahui track yang aman</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Toffan Maulana</p>
                            <p class="isiKomentar">Book trip sama Pawang Bromo..dan gak diburu2 padahal kita sering berhenti krn jalurnya lumayan terjal dan melewati riak curug kecil2.. tempat yg sangat rekomen buat melepas penat..bawa baju dan celana ganti..saran utk pakai sendal gunung.. tumpak sewu, goa tetes dan telaga biru..</p>
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