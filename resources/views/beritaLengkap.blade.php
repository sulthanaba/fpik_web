<!DOCTYPE html>
<html lang="en">

<head>
    <!-- HOME ID-->
    <meta charset="UTF-8">
    <meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Cegah Covid-19, Dosen IPB Riset Biota Laut untuk Imunitas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.css">
    <link rel="stylesheet" href="{{asset('frontend/css/above-the-fold-2.css')}}">
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/ic_bg/favicon_ipb.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style-custom-1.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/fcd3b17c/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/40e49d64/pager.css')}}">
</head>

<body>
    <!-- HEADER -->
    <header id="header" class=" header-fancy">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand fixed">
                <img src="{{ asset('frontend/photo/logo/logo+fpik+putih.png')}}" alt="Fakultas Perikanan" class="img-responsive">
                <!-- <span>FPIK - IPB University</span> -->
            </a>
            <!-- <a href="index.html" class="navbar-brand scrolling">
                <img src="photo/logo/logo FPIK Terbaru.jpeg" alt="Fakultas Perikanan" class="img-responsive">
            </a> -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="container">
            <nav id="navbar" class="navbar navbar-collapse navbar-default navbar-right collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li class=" nav-item dropdown mega-menu">
                        <a id="megamenu" data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">
                            <i class="fa fa-comment"></i> PROFIL
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container" style="width: max-content;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="p-2">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h6 class=" font-weight-bold">Profil</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="{{ url('/sejarah') }}" class="nav-link">Sejarah</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/visi-misi') }}" class="nav-link">Visi & Misi</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/struktur') }}" class="nav-link">Struktur</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/pimpinan') }}" class="nav-link">Pimpinan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/proker-restra') }}" class="nav-link">Program kerja & restra</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/senat') }}" class="nav-link">Senat</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://simaker.ipb.ac.id" class="nav-link">SIMAKER</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold">Fasilitas</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="ifmos-pelabuhanratu.html" class="nav-link">IFMOS Pelabuhanratu</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ifmos-ancol.html" class="nav-link">IFMOS Ancol</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold">Departemen</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="https://bdp.fpik.ipb.ac.id" class="nav-link">Departemen Budidaya Perairan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://msp.fpik.ipb.ac.id" class="nav-link">Departemen Manajemen Sumberdaya Perairan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://thp.ipb.ac.id" class="nav-link">Departemen Teknologi Hasil Perairan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://psp.fpik.ipb.ac.id" class="nav-link">Departemen Pemanfaatan Sumberdaya Perikanan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://itk.ipb.ac.id/~itkipb" class="nav-link">Departemen Ilmu dan Teknologi Kelautan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" nav-item dropdown mega-menu">
                        <a id="megamenu" data-toggle="dropdown" class=" nav-link dropdown-toggle" href="#">
                            <i class="fa fa-book"></i> PENDIDIKAN
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu" >
                            <div class=" container" >
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="p-2">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold ">PENDIDIKAN SARJANA(S1)</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="http://bdp.fpik.ipb.ac.id/?page_id=459&lang=en " class="nav-link text-dark ">Teknologi dan
                        Manajemen Perikanan Budidaya</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id " class="nav-link ">Manajemen Sumberdaya Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://thp.fpik.ipb.ac.id " class="nav-link ">Teknologi Hasil Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://psp.fpik.ipb.ac.id " class="nav-link ">Pemanfaatan Sumberdaya Perikanan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/itkipb " class="nav-link ">Ilmu dan Teknologi Kelautan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold ">PENDIDIKAN MAGISTER(S2)</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="http://bdp.fpik.ipb.ac.id/?p=115 " class="nav-link ">Magister Ilmu Akuakultur</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id/akademik/sdp/ " class="nav-link ">Magister Pengelolaan Sumberdaya
                        Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id/akademik/spl/ " class="nav-link ">Magiaster Ilmu Pengelolaan
                        Sumberdaya Pesisir dan Lautan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://thp.ipb.ac.id/postgraduate-admission/ " class="nav-link ">Magister Teknologi Hasil
                        Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://psp.fpik.ipb.ac.id/index.php/pendidikan/program-s2/ " class="nav-link ">Magister
                        Teknologi Perikanan Laut</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/~itkipb/program-pasca-sarjana-ilmu-kelautan/ " class="nav-link ">Magister Ilmu Kelautan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/~itkipb/program-pasca-sarjana-teknologi-kelautan/ " class="nav-link ">Magister Teknologi Kelautan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold ">PENDIDIKAN DOKTORAL(S3)</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="http://bdp.fpik.ipb.ac.id/?p=115 " class="nav-link ">Doktor Ilmu Akuakultur</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id/akademik/sdp/ " class="nav-link ">Doktor Pengelolaan Sumberdaya
                        Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://msp.fpik.ipb.ac.id/akademik/spl/ " class="nav-link ">Doktor Pengelolaan Sumberdaya
                        Pesisir dan Lautan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://thp.ipb.ac.id/pendidikan/doctor/ " class="nav-link ">Doktor Teknologi Hasil
                        Perairan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://psp.fpik.ipb.ac.id/index.php/pendidikan/program-s3/ " class="nav-link ">Doktor
                        Teknologi Perikanan Laut</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/itkipb/program-pasca-sarjana-ilmu-kelautan/ " class="nav-link ">Dokltor
                        Ilmu Kelautan</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="http://itk.ipb.ac.id/itkipb/program-pasca-sarjana-teknologi-kelautan/ " class="nav-link ">Doktor Teknologi Kelautan</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" nav-item dropdown mega-menu ">
                        <a id="megamenu " data-toggle="dropdown " class=" nav-link dropdown-toggle" href="#">
                            <i class="fa fa-user"></i> Kemahasiswaan dan Alumni
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container" style="width: max-content;">
                                <div class="row">
                                    <div class=" col-lg-12">
                                        <div class=" p-2">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold">Kemahasiswaaan</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="{{ url('/pekan-kreativitas-mahasiswa') }}" class="nav-link ">Program Kreativitas Mahasiswa</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="{{ url('/daftar-kegiatan-mahasiswa') }}" class="nav-link ">Daftar Kegiatan Mahasiswa</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="{{ url('/daftar-prestasi-mahasiswa') }}" class="nav-link ">Daftar Prestasi Mahasiswa</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 ">
                                                    <h6 class="font-weight-bold ">Alumni</h6>
                                                    <ul class="list-unstyled ">
                                                        <li class="nav-item ">
                                                            <a href="http://haipb.ipb.ac.id" class="nav-link ">Himpunan Alumni IPB</a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a href="https://www.instagram.com/hafpikipb" class="nav-link ">Himpunan Alumni FPIK</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h6 class="font-weight-bold ">Lembaga Mahasiswa</h6>
                                                    <ul class=" list-unstyled ">
                                                        <li class=" nav-item ">
                                                            <a href="https://dpmfpik.lk.ipb.ac.id " class="nav-link ">DPM FPIK</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.instagram.com/p/bemfpikipb/ " class="nav-link ">BEM FPIK</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.himakua.lk.ipb.ac.id " class="nav-link ">HIMAKUA IPB</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://himasper.lk.ipb.ac.id " class="nav-link ">HIMASPER</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://himasilkan.lk.ipb.ac.id " class="nav-link ">HIMASILKAN</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://himafarin.lk.ipb.ac.id " class="nav-link ">HIMAFARIN</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.instagram.com/himitekaipb/ " class="nav-link ">HIMITEKA</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.instagram.com/fkmfpikipb/ " class="nav-link ">FKMCIPB</a>
                                                        </li>
                                                        <li class=" nav-item ">
                                                            <a href="https://www.instagram.com/fdc_ipb/ " class="nav-link ">FDC</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" nav-item dropdown mega-menu ">
                        <a id="megamenu" class="nav-link" data-toggle="collapse" href="#sdg14" aria-expanded="false" aria-controls="sdg14">
                            <i class="fa fa-file"></i> SDG14
                            <b class="caret"></b>
                        </a>
                        <div id="sdg14" class="dropdown-menu collapse">
                            <div class="container" style="width: max-content;">
                                <div class="row">
                                    <div class=" col-lg-12">
                                        <div class="p-2">
                                            <div class="col-lg-12">
                                                <h6 class="font-weight-bold">FPIK IPB</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item ">
                                                        <a href="{{ url('/sdg14-fakultas') }}" class="nav-link ">Fakultas</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://bdp.fpik.ipb.ac.id/?p=5598" class="nav-link ">Departemen Budidaya Perairan</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://msp.fpik.ipb.ac.id/en/category/sdg-14/" class="nav-link ">Departemen Manajemen Sumberdaya Perairan</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://thp.ipb.ac.id/?s=sdg" class="nav-link ">Departemen Teknologi Hasil Perairan</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://psp.fpik.ipb.ac.id/index.php/id/sdg14/" class="nav-link ">Departemen Pemanfaatan Sumberdaya Perikanan</a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a href="http://itk.ipb.ac.id/~itkipb/?s=SDG" class="nav-link ">Departemen Ilmu dan Teknologi Kelautan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=" search-form">
                            <div class="input-group btn-group">
                                <input type="text" class="form-control" name="s" placeholder="Search ...">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- / HEADER -->

    <div id="body">
        <div class="container">
            <div class="row">
                <!-- Content Area col-md-push-1 -->
                <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li><a href="berita-lengkap.html">Rilis Berita</a><span class="divider"></span>
                        </li>
                        <li class="active">Cegah Covid-19, Dosen IPB Riset Biota Laut untuk Imunitas</li> <!Jdul berita>
                    </ul>
                    <!-- Content Area -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Cegah Covid-19, Dosen IPB Riset Biota Laut untuk Imunitas 
                            </h1> <!Jdul berita>
                            <ul class="entry-meta">
                                <li class="post-date">
                                    Kamis 16 Jul 2020 08:02 WIB <!tanggal post>
                                </li>
                                <li class="post-author">sumber: Republika</li> <!sumber berita>
                            </ul>
                        </div>
                        <div class="post-content">
                            <figure class="entry-thumbnail slider-wrapper">
                                <img src="{{asset('frontend/photo/berita/berita-1.jpg')}}" alt="#"> <!foto berita>
                            </figure>
                            <p><!Jdul berita></p>
                            <p>Semua negara berlomba dalam melakukan riset dalam upaya mengendalikan meluasnya wabah Covid-19. Mulai dari melakukan penelitian untuk vaksin, obat hingga bagaimana upaya manusia agar tetap fit menjaga stamina tubuh.</p>
                            <p>Salah satu riset <b>IPB UNIVERSITY</b> yang berhasil mendapat pendanaan dari pemerintah Republik Indonesia akan dilakukan oleh Dr Kustiariyah Tarman, dosen IPB University dari Departemen Teknologi Hasil Perairan, Fakultas Perikanan
                                dan Ilmu Kelautan (FPIK) dan tim terkait riset peningkatan imunitas dari biota laut.</p>

                            <p>Departemen Teknologi Hasil Perairan sudah secara berkelanjutan meneliti dan mengembangkan biota laut untuk berbagai produk pangan maupun non-pangan. Riset ini rencananya akan dilaksanakan dua tahun. Tahun pertama fokus untuk
                                formulasi dan karakterisasi produk yang dihasilkan. Dan tahun kedua untuk menentukan masa simpan (stabilitas selama penyimpanan) dan uji khasiatnya.</p>

                            <p>Dr Kustiariyah tertarik untuk melakukan riset terkait biota laut untuk imunitas karena menurutnya, sudah banyak literatur, baik berupa publikasi ilmiah maupun pengalaman empiris masyarakat tentang manfaat biota laut yang dapat
                                meningkatkan imunitas. Di samping itu, Indonesia memiliki kekayaan hayati laut yang keragamannya sangat tinggi, namun masih banyak biota laut yang belum dieksplorasi.</p>

                            <p>&ldquo;Bahan alam hasil laut (marine natural products) yang dilaporkan dapat meningkatkan imunitas tubuh di antaranya omega 3, peptida/protein, vitamin, mineral, beta glukan dan senyawa bioaktif lainnya. Komponen atau senyawa
                                tersebut di antaranya dapat kita ekstrak dari ikan, makroalga/rumput laut, mikroalga, invertebrata contohnya teripang, fungi laut dan lain sebagainya,&rdquo; ujarnya.</p>

                            <p>Saat ini Indonesia adalah salah satu produsen utama di dunia untuk berbagai biota laut, di antaranya tuna, rumput laut dan udang. Keragaman hayati laut Indonesia sangat tinggi dan memiliki potensi yang besar untuk dikembangkan
                                menjadi produk bernilai tambah. Namun, saat ini masih banyak sumberdaya hayati laut Indonesia yang belum dieksplorasi.</p>

                            <p>Menurutnya, pemanfaatan biota laut di Indonesia hingga kini masih belum maksimal, contohnya adalah rumput laut. Indonesia merupakan produsen utama rumput laut di dunia, namun sayangnya sebagian besar rumput laut tersebut masih
                                diekspor dalam bentuk rumput laut kering atau sebagai bahan baku <em>(raw
                                    materials).</em></p>

                            <p>Tantangannya, kata dia, adalah pengembangan biota laut menjadi produk bernilai tambah. Perlu kerjasama berbagai pihak yaitu peneliti, baik dari perguruan tinggi maupun lembaga penelitian, swasta/industri, pemerintah dan masyarakat.
                                Jika kerjasama tersebut sudah terjalin dengan baik maka pengembangan produk berbasis biota laut dapat berjalan dengan baik dan berkelanjutan.</p>

                            <p>&ldquo;Produk suplemen yang akan kami teliti adalah salah satu bentuk pengembangan produk berbasis biota laut. Selain untuk bahan pangan dan suplemen, biota laut juga mempunyai potensi yang besar untuk pengembangan produk obat
                                dan kosmetik. Biota laut mengandung berbagai senyawa bioaktif diantaranya sebagai antimikroba, antikanker, dan antioksidan,&rdquo; ujarnya.</p>

                            <p>Dengan riset ini diharapkan akan tersedianya suplemen berbasis biota laut yang dapat bermanfaat untuk meningkatkan imunitas. &ldquo;Selain itu, meningkatnya nilai tambah biota laut yang digunakan juga dapat menjadi pemicu bagi
                                masyarakat pesisir untuk menyediakan bahan baku yang digunakan, misalnya dengan kegiatan budidaya teripang,&rdquo; paparnya.</p>

                            <p>Dr Kustiariyah berharap riset ini dapat berjalan dengan baik dan lancar serta menghasilkan produk yang bermanfaat bagi masyarakat luas.</p>
                        </div>
                        <!-- Share -->
                        <ul class="share-box" id="yw1">
                            <li>
                                <a class="facebook" title="Facebook" target="_blank" href="http://www.facebook.com/">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" title="Twitter" target="_blank" href="http://twitter.com/"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/">
                                    <i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                        <!-- / Share -->
                        <!-- Other news -->
                        <div class="related-post">
                            <div class="content-header">
                                <h3 class="content-title">Berita Lainnya</h3>
                            </div>
                            <ul class="post-list">
                                <li>
                                    <a href="berita-2.html">
                                        <h4>Departemen PSP FPIK IPB Diskusi Keberlanjutan Pengelolaan Lobster Skala Kecil
                                        </h4>
                                    </a>
                                    <div class="entry-meta">
                                        <span class="meta-date">28 Juli 2020 16:49</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4>Dosen IPB University Jadi Pembimbing Penelitian Sawfish Project Indonesia
                                        </h4>
                                    </a>
                                    <div class="entry-meta">
                                        <span class="meta-date">24 Juli 2020 10:22</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- / Other news -->
                    </article>
                </div>

                <div class="col-md-1 col-md-pull-8 share-box-wrapper">
                    <ul class="share-box" id="yw2">
                        <li>
                            <a class="facebook" title="Facebook" target="_blank" href="http://www.facebook.com/">
                                <i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" title="Twitter" target="_blank" href="http://twitter.com/"><i
                                    class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/">
                                <i class="fa fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="sidebar" class="col-md-3">
                    <div class="widget widget_rss">
                        <div class="widget-header">
                            <h3 class="widget-title">
                                <a href="berita-lengkap.html" class="rsswidget">Rilis Berita</a>
                            </h3>
                        </div>
                        <ul>
                            <li>
                                <a class="rsswidget" href="#" title="Potensi Laut di Natuna">Potensi Laut di Natuna</a>
                                <span class="rss-date">20 Juli 2020</span>
                                <div class="rssSummary">Pakar IPB Sebut Baru 20,8 Persen Potensi Laut di Natuna yang Dimanfaatkan
                                </div>
                                <cite>Trubus news</cite>
                            </li>

                            <li>
                                <a class="rsswidget" href="#" title="Riset dosen IPB terkait sidat masuk prioritas riset nasional">Riset dosen IPB
                                    terkait sidat masuk prioritas riset nasional</a>
                                <span class="rss-date">14 Juli 2020</span>
                                <div class="rssSummary">Universitas Gadjah Mada (UGM) dan Tentara Nasional Indonesia Angkatan Darat (TNI AD) melaksanakan</div>
                                <cite>Sumsel Antara news</cite>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">Info</h3>
                        </div>
                        <p>Tidak ada info terbaru saat ini</p>
                    </div>
                    <div class="widget widget-event">
                        <div class="widget-header">
                            <h3 class="widget-title">Agenda</h3>
                        </div>
                        <p>Tidak ada agenda terbaru saat ini</p>
                    </div>
                </div>
                <!-- content end here -->
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer id="footer">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 footer-brand-wrapper">
                        <a href="#" class="footer-brand"><img src="{{asset('frontend/photo/logo/rsz_cropped-logo_ipbsvg_-2-180x180.png')}}"
                                alt="..."></a>
                        <address>
                            <strong>FPIK - IPB University</strong><br>
                            Jl. Agatis, Kampus IPB Dramaga Bogor<br>
                            <i class="fa fa-envelope"></i>&nbsp;&nbsp;
                            <a href="#">fpik@ipb.ac.id</a><br>
                            <i class="fa fa-phone"></i>&nbsp;&nbsp;
                            <a href="#">+62 251 8622909 - 8622911</a><br>
                            <i class="fa fa-print"></i>&nbsp;&nbsp;
                            <a href="#">+62 251 8622907</a><br>
                        </address>
                    </div>
                    <div class="col-md-7 col-sm-7 footer-menu-wrapper">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 widget">
                                <div class="widget-header">
                                    <h3 class="widget-title">Tautan</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="menu-footer">
                                            <ul id="menu-footer-pages" class="menu">
                                                <li><a href="https://ipb.ac.id">Institut Pertanian Bogor</a></li>
                                                <li><a href="https://www.ristekbrin.go.id">Kemenristekdikti</a></li>
                                                <li><a href="https://www.kemdikbud.go.id">Kemendikbud</a></li>
                                                <li><a href="https://kkp.go.id">Kementrian Kelautan dan Perikanan</a></li>
                                                <li><a href="https://admisi.ipb.ac.id">Admisi IPB</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="menu-footer">
                                            <ul id="menu-footer-pages" class="menu">
                                                <li><a href="https://apps.ipb.ac.id">Apps IPB</a></li>
                                                <li><a href="http://journal.ipb.ac.id">Journal</a></li>
                                                <li><a href="https://repository.ipb.ac.id">Repository</a></li>
                                                <li><a href="https://siti.ipb.ac.id">Sistem Informasi Terintegrasi(SITI)</a>
                                                </li>
                                                <li><a href="https://lms.ipb.ac.id">Lecture Management System(LMS)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container text-center">
                <p class="copyright">&copy; 2020 FPIK - IPB UNIVERSITY</p>
            </div>
        </div>
    </footer>
    <!-- / FOOTER -->

    <script type="text/javascript" src="{{asset('frontend/js/jquery-3.1.1.min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/jquery.pin.min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/jquery.nav.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/jquery.matchHeight-min.js')}}"></script>
    <script type="text/javascript" defer src="{{asset('frontend/js/apps.min.js')}}"></script>

    <!-- Asynchronous CSS & Font -->
    <noscript id="deferred-styles">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Lora:400,400i,700|Montserrat:400,700|Open+Sans:400,400i,700,700i">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style-2.css')}}">
    </noscript>

    <script type="text/javascript">
        // CSS async
        var loadDeferredStyles = function() {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.head.appendChild(replacement)
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        if (raf) raf(function() {
            window.setTimeout(loadDeferredStyles, 0);
        });
        else window.addEventListener('load', loadDeferredStyles);
    </script>

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "../../../connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function() {
            (function($) {
                $('#remove-me').hide();

            })(jQuery);
        });
    </script>
    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function() {
            (function($) {
                if ($('#gallery-archives').length || $('.event-table').length || $('.entry-thumbnail').length) {
                    socialShare();
                }

                if ($('.gallery-slider').length && $(".gallery-nav-slider").length) {
                    socialShare();
                    // Gallery Slider Preview
                    $(".gallery-slider").slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        asNavFor: '.gallery-nav-slider',
                        responsive: [{
                            breakpoint: 600,
                            settings: {
                                arrows: true,
                                asNavFor: '',
                                fade: false
                            }
                        }]
                    });

                    $(".post-content .gallery-nav-slider").slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        asNavFor: '.gallery-slider',
                        dots: false,
                        centerMode: true,
                        focusOnSelect: true,
                        verticalSwiping: true
                    });

                    // Gallery Slider Nav
                    $(".gallery-nav-slider").slick({
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        asNavFor: '.gallery-slider',
                        dots: false,
                        centerMode: true,
                        focusOnSelect: true,
                        vertical: true,
                        verticalSwiping: true
                    });
                }
            })(jQuery);
        });
    </script>

</body>

</html>