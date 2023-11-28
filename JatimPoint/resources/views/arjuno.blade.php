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
                <div class="hero" style="background-image: url('/img/arjuno.jpeg');">
                    <img src="{{ asset('logo/Rating.png') }}" alt="" class="rating">
                </div>
                <div class="deskirpsiWisata">
                    <h2 class="titleWisata">Gunung Arjuno</h2>
                    <p class="desc">Gunung Arjuno Welirang, salah satu puncak tertinggi di Pulau Jawa, menjadi tujuan favorit para pendaki di wilayah Jawa Timur. Dikenal sebagai pasangan Gunung Welirang, meskipun Gunung Arjuno tidak memiliki kawah, gunung ini adalah tempat yang sangat populer untuk menjelajah. Asap putih yang sering terlihat sebenarnya berasal dari Gunung Welirang yang berdampingan. Puncak tertinggi Gunung Arjuno, yang dikenal dengan nama Puncak Ogal Agil, terletak di ketinggian 3.399 meter di atas permukaan laut. Dari sini, pengunjung dapat menikmati pemandangan alam yang luar biasa indahnya, dengan panorama alam pegunungan yang memukau dan perasaan kemenangan yang memuaskan setelah menaklukkan medan yang menantang. Gunung Arjuno Welirang adalah tempat yang ideal bagi para pencinta alam dan pendaki yang mencari petualangan dan keindahan alam di Jawa Timur.</p>
                    <div class="kontakPengelola">
                        <div class="namaPengelola">
                            <img src="{{ asset('logo/user.png') }}" alt="">
                            <p>Gofur</p>
                        </div>
                        <div class="teleponPengelola">
                            <img src="{{ asset('logo/phone.png') }}" alt="">
                            <p>+62 852 3865 9182</p>
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
                        <p>Pecalukan Barat, Pecalukan, Kec. Prigen, Pasuruan, Jawa Timur</p>
                    </div>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31628.874402256006!2d112.56880132460374!3d-7.7249993546875695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7878f152cf4193%3A0xeb267981e389631a!2sGn.%20Arjuno!5e0!3m2!1sid!2sid!4v1700672108161!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p class="nama">The Arjuno View Villa</p>
                            <p class="deskripsiPenginpan">Jl. Pemancar TVRI Gunung Gebog, Area Kebun Teh Wonorejo, Lawang, Malang, Indonesia, 65211 </p>
                            <p>Kontak : 081330621310</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">96,1 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Surya Hotel & Cottages Prigen</p>
                            <p class="deskripsiPenginpan">Jl Taman Wisata Prigen, Prigen, Pasuruan, Jawa Timur, Indonesia, 67157</p>
                            <p>Kontak : 62 343 881 991</p>
                        </div>
                    </div>

                    <div class="penginapanBox">
                        <p class="jarak">57,8 km</p>
                        <div class="descPenginapan">
                            <p class="nama">Royal Senyiur Hotel Pasuruan</p>
                            <p class="deskripsiPenginpan">Jl. Putuk Truno No.208, Prigen, Kec. Prigen, Kota Pasuruan, Jawa Timur, 67157</p>
                            <p>Kontak : (0343) 885111</p>
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
                            <p class="name">Kupang Kraton</p>
                            <p>Kupang Kraton, makanan yang terbuat dari siput laut, dipersiapkan dengan cara memisahkan tubuhnya dari cangkangnya dan merebusnya hingga matang.
                                Kupang Kraton disajikan dengan gula, cabe, sedikit petis, dan air jeruk nipis. </p>
                            <h4>50 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Rawon Sate Komoh</p>
                            <p>Rawon Sate Komoh adalah hidangan khas Jawa Timur yang memadukan dua hidangan lezat dalam satu sajian. Rawon, sup khas Jawa, dibuat dengan bumbu khas yang kaya dan kuah berwarna hitam yang dihasilkan dari penggunaan kluwek.</p>
                            <h4>40 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Nasi Punel</p>
                            <p>Leroban atau sambal blotong merupakan sayur khas penduduk Desa Licin, yang berada di kaki Gunung Ijen. Jangan Leroban adalah sebuah hidangan sayuran berkuah yang disajikan dengan menggunakan bahan-bahan sederhana.</p>
                            <h4>45 m</h4>
                        </div>
                    </div>

                    <div class="deskripsiKuliner">
                        <div class="imgKuliner"></div>
                        <div class="nameKuliner">
                            <p class="name">Rujak Kelang</p>
                            <p>Nasi punel adalah hidangan khas Bangil, Pasuruan. Nasi punel bertekstur lembut dan agak menggumpal. Umumnya, makanan ini disajikan di atas piring yang beralaskan daun pisang. Di atas nasi itu, ditambah taburan serundeng</p>
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
                            <p class="nama">Mantra Summits Challenge </p>
                            <p>Event ini merupakan lomba lari lintas alam yang digelar oleh Malang trail Runners (Mantra Runners). Acara ini digelar dengan kerja sama Taman Hutan Raya (Tahura) Raden Soerjo sebagai lokasi lari dan Kaliandra Eco Resort sebagai venue lomba dan titik start maupun finish. Rute larinya akan melintasi kawasan Gunung Arjuno-Welirang.</p>
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
                            <p class="komentator">Iyan Yukoto</p>
                            <p class="isiKomentar">Salah satu gunung sakral dengan panorama menakjubkan. Viewnya sangat indah, tenang dengan tracking yg begitu banyak kejutan. Begitu banyak peninggalan jadi bisa menambah wawasan pula. Trackingnya jauh jadi lebih baik bawa logistik lebih banyak.</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Akhmad Safii</p>
                            <p class="isiKomentar">Sangat menyenangkan saat mendaki gunung Arjuna masih banyak satwa  dan alam yg masih asri</p>
                        </div>
                        <div class="komentar">
                            <p class="komentator">Ahmad bagaskoro</p>
                            <p class="isiKomentar">Jalurnya menantang banget tapi semua terbayar pas sampai puncak pemandanganya luar biasa, buat yang mau summit ke arjuno pastikan bawa bekal yang cukup, pastikan tubuh kalian fit, untuk persediaan air gk usah khawatir.</p>
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