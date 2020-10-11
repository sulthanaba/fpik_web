<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas Perikanan dan Ilmu Kelautan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/above-the-fold-2.css')}}">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/ic_bg/favicon_ipb.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style-custom-1.css')}}">
    <!-- <link rel="stylesheet" href="css/style-2.css"> -->

    <!-- instansi partner -->
    <link rel="stylesheet" href="{{ asset('frontend/css/brand_slider.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
    <!-- end instansi partner -->

    <!-- gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/gallery-grid.css')}}">
    <!-- end gallery -->

</head>

<body>
    <!-- HEADER -->
    <header id="header" class=" header-fancy">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand fixed">
                <img src="{{ asset('frontend/photo/logo/logo_fpik_putih.png')}}" alt="Fakultas Perikanan" class="img-responsive">
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
        <div class="homepage homepage-id">

            <section id="banner">
                <div class="">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset('frontend/photo/banner/home6')}}.png" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/2.jpg')}}" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/3.jpg')}}" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/4.jpg')}}" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/5.jpg')}}" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/6.jpg')}}" alt="#">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>

            <section id="berita" class="section-page news-event">
                <div class="container ">
                    <div class="section-title inline-title">
                        <h2>Berita Terkini</h2>
                    </div>
                    <article class="post post-block ">
                        <div class="post-img ">
                            <a href="# "><img src="{{asset('frontend/photo/berita/berita-1.jpg')}}"></a> <!photo>
                        </div>
                        <div class="post-content ">
                            <div class="post-title ">
                                <span class="post-date ">16 Jul 2020 </span> <!tanggal post>
                                <h3><a href="berita-1.html">Cegah Covid-19, Dosen IPB Riset Biota Laut untuk Imunitas</a></h3> <!Judul Berita>
                            </div>
                            <div class="entry-content"> <!isi artikel>
                                <p>Cegah Covid-19, Dosen IPB Riset Biota Laut untuk Imunitas</p> 
                                <p>&ldquo;Semua negara berlomba dalam melakukan riset dalam upaya mengendalikan meluasnya wabah Covid-19. Mulai dari melakukan penelitian untuk vaksin, obat hingga bagaimana upaya manusia agar tetap fit menjaga stamina
                                tubuh. [...]</p>
                            </div>
                            <a class="btn btn-more " href="berita-1.html">Baca selengkapnya</a>
                        </div>
                    </article>
                    <div class="row ">
                        <div class="col-md-4 col-sm-4 ">
                            <article class="post post-inline ">
                                <div class="post-img ">
                                    <a href="# "><img src="{{asset('frontend/photo/berita/berita-2.png')}}" ></a>
                                </div>
                                <div class="post-content ">
                                    <div class="post-title ">
                                        <h3><a href="berita-2.html ">Departemen PSP FPIK IPB Diskusi Keberlanjutan Pengelolaan Lobster Skala Kecil</a></h3>
                                    </div>
                                    <div class="entry-content ">
                                        <a class="btn btn-more " href="berita-2.html">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-4 ">
                            <article class="post post-inline ">
                                <div class="post-img ">
                                    <a href="berita-4.html"><img src="{{asset('frontend/photo/berita/berita-4.jpg')}}" alt="... "></a>
                                </div>
                                <div class="post-content ">
                                    <div class="post-title ">
                                        <h3><a href="# ">IPB Kenalkan Inovasi Alat Penangkap Ikan bagi Nelayan</a></h3>
                                    </div>
                                    <div class="entry-content ">
                                        <a class="btn btn-more" href="berita-4.html">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-4 ">
                            <article class="post post-inline ">
                                <div class="post-img ">
                                    <a href="berita-3.html"><img src="{{asset('frontend/photo/berita/berita-5.jpg')}}" alt="... "></a>
                                </div>
                                <div class="post-content ">
                                    <div class="post-title ">
                                        <h3><a href="# ">Ir Hikmat Rusdi Terpilih sebagai Ketua Himpunan Alumni FPIK IPB 2020-2023</a></h3>
                                    </div>
                                    <div class="entry-content ">

                                        <a class="btn btn-more " href="berita-3.html">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="text-center btn-box no-border ">
                        <a href="berita-lengkap.html " class="btn btn-more ">Berita Selengkapnya</a>
                    </div>
                </div>
            </section>

            <section id="event-info" class="section-page bg-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 sidebar-right">
                            <article class="single-post">
                                <div class="section-title inline-title">
                                    <h2>Event</h2>
                                </div>
                                <div>
                                    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
                                        <!--Indicators-->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                                            <!-- <li data-target="#carouselExampleFade" data-slide-to="3"></li> -->
                                        </ol>
                                        <!--/.Indicators-->
                                        <div class="carousel-inner"> <!photo atau video event>
                                            <div class=" item active">
                                                <video muted autoplay loop class="carousel-fill">
                                                    <source src="{{asset('frontend/photo/event/event1.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="item">
                                                <img src="{{asset('frontend/photo/event/event4.jpg')}}" class="carousel-fill">
                                            </div>
                                            <div class=" item">
                                                <img src="{{asset('frontend/photo/event/event5.jpg')}}" class="carousel-fill">
                                            </div>
                                            <div class=" item">
                                                <img src="{{asset('frontend/photo/event/event6.png')}}" class="carousel-fill">
                                            </div>
                                            <!-- <div class="item">
                                                <img src="photo/event/event6.png" style="width: 100%;">
                                            </div> -->
                                        </div>
                                        <a class="left carousel-control" href="#carouselExampleFade" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carouselExampleFade" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <!-- / Content -->
                        </div>
                        <div id="sidebar" class="col-md-3 ">
                            <div class="widget widget_recent_entries">
                                <div class="widget-header">
                                    <h3 class="widget-title">Info Terbaru</h3>
                                </div>

                                <ul class="post-list">
                                    <li>
                                        <a href="https://www.instagram.com/p/CD_JzAGFlLw/">IPB perguruan tinggi terbaik 2020</a> <!Judul dan link info>
                                        <div class="entry-meta">
                                            <span class="meta-date">18 Agustus 2020</span> <!Tanggal Info>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=" https://bit.ly/RUAYA2020">Pendaftaran MUNAS dan RUAYA HA IPB</a>
                                        <div class="entry-meta">
                                            <span class="meta-date">18 Agustus 2020</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://registrasi.admisi.ipb.ac.id">Pengumuman Mahasiswa Baru Jalur UTMBK Program Sarjana (S1)</a>
                                        <div class="entry-meta">
                                            <span class="meta-date">18 Agustus 2020</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://registrasi.admisi.ipb.ac.id">Pengumuman Mahasiswa Baru Program Pascasarjana Tahap II</a>
                                        <div class="entry-meta">
                                            <span class="meta-date">18 Agustus 2020</span> 
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="loader"><img src="{{asset('frontend/assets/images/loader.gif')}}"></div>
                        <!-- content end here -->
                    </div>
                </div>
            </section>

            <section id="agenda" class="section-page schome-event">
                <div class="container">
                    <div class="section-title ">
                        <h3>Agenda Terbaru</h3>
                    </div>
                    <div class="event-slider owl-carousel owl-theme">
                        <div class=" event-slider__box col-md-6 owl-item">
                            <h4 class="event-date">
                                <span>10</span><span>09</span><span>2020</span> <!Tanggal Agenda>
                            </h4>
                            <h4 class=" event-title">
                                <a href="http://esc-embrio.ipb.ac.id">4Th Embrio International Workshop</a> <!Judul dan Link Agenda>
                            </h4>
                            <div class="event-info"> <!Isi Agenda>
                                <p>Enhanching Marine Biodiversity Research in Indonesia (EMBRIO) IPB University proudly present The 4th EMBRIO
                                International Worksop (The 4TH EIW) with theme “Current Advance in Tropical Marine Biodiversity and Fisheries”. This
                                workshop will be held in Zoom Cloud Meeting, on 10 September 2020.</p> 
                            </div>
                        </div>
                        <div class=" event-slider__box col-md-6 owl-item ">
                            <h4 class=" event-date ">
                                <span>12</span><span>09</span><span>2020</span>
                            </h4>
                            <h4 class=" event-title ">
                                <a href="# ">Munas dan Ruaya FPIK IPB</a>
                            </h4>
                            <div class=" event-info ">
                                <p>Saatnya kembali pulang alumni FPIK IPB . Munas dan Ruaya akan dilaksanakan via Zoom Cloud Meeting pada hari sabtu 12
                                September 2020.</p>
                            </div>
                        </div>
                        <div class=" event-slider__box col-md-6 owl-item ">
                            <h4 class=" event-date ">
                                <span>14</span><span>09</span><span>2020</span>
                            </h4>
                            <h4 class=" event-title ">
                                <a href="http://esc-embrio.ipb.ac.id">5th EMBRIO International Summer Course (EISC)</a>
                            </h4>
                            <div class=" event-info ">
                                <p>Enhanching Marine Biodiversity Research in Indonesia (EMBRIO) IPB University proudly present “The 5th EMBRIO
                                International Summer School” with theme “Tropical Aquatic Biodiversity”. This summer course will be held in Zoom Cloud
                                Meeting, on September 14th – October 5th, 2020.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center btn-box no-border " style="margin: 20px;">
                        <a href="agenda.html" class="btn btn-more ">Agenda Lainnya</a>
                    </div>
                </div>
            </section>

            <section id="statistik" class="section-page schome-event">
                <div class="container bg-info" style="box-shadow: 0 8px 15px rgba(0, 0, 0, 0.08); border-radius: 20px;">
                    <div class="section-title m-5" style="border-bottom: 4px solid #FDCB2C;">
                        <h3>Statistik</h3>
                    </div>
                    <div class="row">
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-building-o"></i>
                                <span class="counter">5</span>
                                <p>Departemen</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-group"></i>
                                <span class="counter">144</span>
                                <p>Tenaga Pendidik</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-graduation-cap"></i>
                                <span class="counter">20</span>
                                <p>Profesor</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-user-plus"></i>
                                <span class="counter">100</span>
                                <p>Doctor</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-users"></i>
                                <span class="counter">2250</span>
                                <p>Mahasiswa Sarjana</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-user-plus"></i>
                                <span class="counter">920</span>
                                <p>Mahasiswa Pasca</p>
                            </div>
                        </div>
                        <div class="text-center btn-box no-border " style="margin: 40px;">
                            <a href="statistik.html" class="btn btn-more ">Data Lainnya</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gallery" class="section-page bg-info">
                <div class="container gallery-container">
                    <h1 class=" m-5" style="border-bottom: 3px solid #FDCB2C;">Galeri</h1>
                    <!-- <p class="page-description text-center">Sebagian dokumentasi dari FPIK IPB</p> -->
                    <div class="tz-gallery">
                        <div class="row">
                            
                            <div class="col-sm-12 col-md-4"> <!Update Foto galery>
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo4.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo4.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4   ">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo3.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo3.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4   ">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo6.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo6.jpg')}}" >
                                </a>
                            </div>
                            
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo2.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo2.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo1.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo1.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo9.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo9.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo8.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo8.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo7.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo7.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo5.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo5.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="partner" class="section-page">
                <div class="container">
                    <div class="section-title">
                        <h3>Internasional Partner</h3>
                    </div>
                    <div class="brands">
                        <div class="brands_slider_container">
                            <div class="owl-carousel owl-theme brands_slider">
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-UNDP_logo.svg.png')}}" alt=" "> <!Update Logo instansi partner>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-University_of_Rhode_Island_seal.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-University_of_The_Philippines_seal.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-WashU_St._Louis_seal.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-Xiamen_University_logo.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/DAI_HOC_NHA_TRANG.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/download.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/FAO_logo.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/KAGOSHIMA_UNIVERSITY.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/kisspng-kasetsart-university-kamphaengsaen-campus-logo-pub-national-philippines-narra-tree-5b46450e398cb0.5579652915313318542357.png')}}"
                                            alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/logo_0.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/MABIK.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/ocean-university-of-china-bandung-institute-of-technology-school-png-favpng-e4t3MLjy3yvs1TmYdXRt2Cr58.png')}}"
                                            alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/RYUKTYU.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/UniversityOfTokyo_logo_0.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/victoria.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/zmt-logo.png')}}" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                                                <li><a href="https://siti.ipb.ac.id">Sistem Informasi Terintegrasi(SITI)</a></li>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>


    <!-- <script>
        $(document).ready(function () {

                if ($('.brands_slider').length) {
                    var brandsSlider = $('.brands_slider');

                    brandsSlider.owlCarousel(
                        {
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 1000,
                            nav: false,
                            dots: false,
                            autoWidth: true,
                            items: 5,
                            margin: 42
                        });

                    if ($('.brands_prev').length) {
                        var prev = $('.brands_prev');
                        prev.on('click', function () {
                            brandsSlider.trigger('prev.owl.carousel');
                        });
                    }

                    if ($('.brands_next').length) {
                        var next = $('.brands_next');
                        next.on('click', function () {
                            brandsSlider.trigger('next.owl.carousel');
                        });
                    }
                }


            });
    </script> -->

    <script>
        $(document).ready(function() {

            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

</body>

</html>