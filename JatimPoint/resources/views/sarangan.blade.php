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
                <div class="hero" style="background-image: url('/img/sarangan.jpg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">TELAGA SARANGAN</h2>
                    <p class="desc">Telaga Sarangan, juga dikenal sebagai Telaga Pasir, merupakan danau alami yang terletak sekitar 16 kilometer di sebelah barat atau sekitar setengah jam perjalanan dari Kecamatan Magetan Kota. Wilayah sekitar danau ini memancarkan suasana yang sangat menyegarkan karena terletak pada ketinggian sekitar 1.200 meter di atas permukaan laut, menciptakan suhu udara yang berkisar antara 15 hingga 20 derajat Celsius. Danau ini memiliki luas sekitar 30 hektar dengan kedalaman mencapai 28 meter.
                        Di Telaga Sarangan, pengunjung dapat menikmati keindahan alam yang memukau dan udara yang segar karena lokasinya yang terletak di ketinggian. Dengan suhu yang lebih rendah dari daerah sekitarnya, danau ini menjadi destinasi yang menyegarkan bagi mereka yang ingin melarikan diri dari panasnya cuaca di daerah lain</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Pengelola Telaga Sarangan</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62351-891831</p>
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
                        <h1>218 km</h1>
                        <p>Ngluweng, Sarangan, Kec. Plaosan, Kabupaten Magetan, Jawa Timur</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31632.44113581663!2d111.19713532455896!3d-7.677221357677059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e798e9941fbceb1%3A0x49bf06f3bb4505db!2sTelaga%20Sarangan!5e0!3m2!1sid!2sid!4v1701188834309!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">RedDoorz near Sarangan Lake</p>
                            <p class="deskripsiPenginpan">Jl. Raya Telaga Sarangan, RT.06/RW.01, Sarangan I, Sarangan, Magetan, Kabupaten Magetan, Jawa Timur 63361</p>
                            <p>Kontak :  (021) 80629666</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Pantes Hotel</p>
                            <p class="deskripsiPenginpan">Jalan Raya Telaga Sarangan RT.007/RW.001, Telaga Pasir, Sarangan, Kec. Plaosan, Kabupaten Magetan, Jawa Timur 63361</p>
                            <p>Kontak : (0351) 888046</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Hotel Nirwana Sarangan</p>
                            <p class="deskripsiPenginpan">Jl. Raya Telaga Sarangan, Plaosan, Telaga Pasir, Sarangan, Kec. Plaosan, Kabupaten Magetan, Jawa Timur 63361</p>
                            <p>Kontak : 0812-1639-4747</p>
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
                            <p class="name">Nasi Grombyang</p>
                            <p>Nasi Grombyang adalah nasi putih yang dicampur dengan irisan labu siam, tahu, tempe, dan diberi siraman kuah santan yang lezat.</p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Sate Kelinci</p>
                            <p>Sate Kelinci, sebuah hidangan khas Magetan yang populer di kawasan Telaga Sarangan, terbuat dari potongan daging kelinci</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Brem</p>
                            <p>Brem, minuman khas Magetan, dibuat dari fermentasi beras ketan yang dicampur dengan gula merah. Rasanya manis dengan </p>
                            <h4>45 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Tempe Mendoan</p>
                            <p>Tempe Mendoan merupakan tempe goreng yang dilumuri adonan tepung bumbu dan digoreng hingga garing. Hidangan ini sangat populer</p>
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
                            <p class="nama">Larung Sesaji</p>
                            <p>Upacara adat larung sesaji di Telaga Sarangan, Kecamatan Plaosan, Kabupaten Magetan, Jawa Timur, menjadi bagian dari warisan budaya yang kaya. Tradisi larung sesaji di Telaga Sarangan diadakan oleh penduduk Kelurahan Sarangan sekali dalam setahun, tepatnya pada bulan Jawa Ruwah. </p>
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
                            <p class="komentator">Vitri Nadhiroh</p>
                            <p class="isiKomentar">Sejuk dan tenang banget pas di sini. Rekomend buat yang mau recharge energy recharge soul. Tapi ini ga yang gede gede banget yaa telaga nya. Banyak yang jualan juga di pinggir2nya. Ada kuda tunggangnya juga</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Zahira Tri Dara Maolana</p>
                            <p class="isiKomentar">tiket masuknya 20k/org, dari parkiran ke tempatnya mayan agak jauh sii disepanjang perjalanannya banyak yg jual sayur” yg masih seger dan strawberry 5k/bungkus, bisa naik boat 80k/putar, bisa naik kuda juga, dan harga makanannya standar sii</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Mas_Sakamoto(Sato)</p>
                            <p class="isiKomentar">Suhu tempatnya panas. Tapi udaranya dingin + sepoi-sepoi ✨
                                Banyak juga kuda yg bisa disewa buat jalan-jalan. Saran saja, kesini jangan waktu weekend atau akhir pekan karena RAMEEEEE BANGETT jalannya. Jalan sempit banyak orang mana dilewatin mobil pula 😂 …</p>
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