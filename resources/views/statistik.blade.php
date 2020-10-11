<!DOCTYPE html>
<html lang="en">

<head>
    <!-- HOME ID-->
    <meta charset="UTF-8">
    <meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>statistik Fakultas Perikanan dan kelautan IPB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.css">
    <link rel="stylesheet" href="{{asset('frontend/css/above-the-fold-2.css')}}">
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/ic_bg/favicon_ipb.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style-custom-1.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/fcd3b17c/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/40e49d64/pager.css')}}">

    <!-- buat charts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
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

    <div>
        <div class="container" style="margin: 50px;">

            <div>
                <div class="container statistic-container bg-info"  style="box-shadow: 0 8px 15px rgba(0, 0, 0, 0.08); border-radius: 20px;">
                    <h1 class=" text-center" style="color: #073C64;">Statistik</h1>
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
                                <p>Doktor</p>
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
                                <p>Mahasiswa Pascasarjana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div id="charts1" style="width:100%; height:400px;"></div>
            <br><br><br>
            <div id="charts2" style="width:100%; height:400px;"></div>
            <br><br><br>
            <div id="charts3" style="width:100%; height:400px;"></div>
            <br><br><br>
            <div id="charts4" style="width:100%; height:400px;"></div>
            <br><br><br>
            <div id="charts5" style="width:100%; height:400px;"></div>
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

    <!-- counter -->
    <script>
        $(document).ready(function () {

            $('.counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>
    <!-- buat charts 1-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts1', {
                chart: {
                    type: 'column'

                },
                title: {
                    text: 'Publications'
                },
                subtitle: {
                    text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                },
                xAxis: {
                    categories: ['Faperta', 'FKH', 'FPIK', 'FAPET', 'FAHUTAN', 'FATETA', 'FMIPA', 'FEM', 'FEMA', 'SB', 'SV', 'SPS', 'LPPM']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: 'Scopus',
                    data: [230, 110, 285, 135, 210, 260, 690, 30, 40, 25, 20, 110, 60]
                }]
            });
        });
    </script>

    <!-- buat charts2 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts2', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Publikasi di Scopus Fakultas IPB 2015-2018'
                },
                xAxis: {
                    categories: ['SV', 'PASCA', 'FAPERTA', 'FKH', 'FPIK', 'FAPET', 'FAHUTAN', 'FATETA', 'FMIPA', 'FEM', 'FEMA', 'SB', 'IPB']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: '2018',
                    data: [2, 20, 57, 20, 55, 19, 60, 85, 109, 6, 8, 5, 8]
                }, {
                    name: '2017',
                    data: [6, 57, 92, 44, 94, 41, 89, 83, 282, 15, 21, 5, 23]
                }, {
                    name: '2016',
                    data: [2, 28, 73, 40, 83, 56, 48, 77, 217, 12, 19, 3, 32]
                }, {
                    name: '2015',
                    data: [2, 19, 27, 13, 47, 25, 17, 26, 86, 8, 14, 1, 6]
                }]
            });
        });
    </script>

    <!-- buat chart3 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts3', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Number of Innovation 2008-2017'
                },
                // subtitle: {
                //     text: 'Number of Innovation 2008-2017'
                // },
                xAxis: {
                    categories: ['2008/100', '2009/101', '2010/102', '2011/103', '2012/104', '2013/105', '2014/106', '2015/107', '2016/108', '2017/109']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: 'Inovasi',
                    data: [6, 6, 7, 3, 14, 8, 3, 6, 9, 16]
                }]
            });
        });
    </script>

    <!-- buat chart4 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts4', {
                chart: {
                    type: 'column'
                },
                colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
                title: {
                    text: 'The Largest Contributor of IPB innovation 2017(BIC 2018)'
                },
                xAxis: {
                    categories: ['Faperta', 'FKH', 'FPIK', 'FAPET', 'FAHUTAN', 'FATETA', 'FMIPA', 'FEM', 'FEMA', 'SB', 'SV']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: 'Inovasi',
                    data: [5, 5, 16, 6, 1, 8, 4, 2, 1, 2]
                }]
            });
        });
    </script>

    <!-- buat chart5 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts5', {
                chart: {
                    type: 'column'
                },
                colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
                title: {
                    text: 'The Largest Contributor of IPB innovation 2018(BIC 2019)'
                },
                xAxis: {
                    categories: ['Faperta', 'FKH', 'FPIK', 'FAPET', 'FAHUTAN', 'FATETA', 'FMIPA', 'FEMA']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: 'Inovasi',
                    data: [2, 1, 18, 3, 2, 7, 8, 3]
                }]
            });
        });
    </script>
</body>

</html>