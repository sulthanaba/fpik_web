@extends('layout_master')

@section('title')
    Senat Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li class="active">Pimpinan Fakultas Perikanan IPB</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Senat Fakultas Perikanan IPB</h1>
                        </div>
                        <div class="post-content">
                            <table border="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3 style="text-align: center;">
                                                <strong>
                                                    <a href="#">
                                                        <img style="display: block; margin-left: auto; margin-right: auto;"
                                                            title="Dekan FPIK" src="{{asset('frontend/photo/senat/ketua senat.jpg')}}"
                                                            alt="Dekan FPIK IPB" width="200" />
                                                    </a>
                                                    <span style="color: #000000;">Senat Fakultas Perikanan dan ilmu
                                                        Kelautan IPB </span>
                                                </strong>
                                            </h3>
                                            <h4 style="text-align: center;">
                                                <strong>
                                                    <a href="#">Prof. Dr. Ir. Dietriech G. Bengen, DEA.</a>
                                                </strong>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr bgcolor="#CCCCCC">
                                        <td align="center"><strong>&nbsp;<br /></strong></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3 style="text-align: center;">
                                                <strong>
                                                    <a href="#">
                                                        <img style="display: block; margin-left: auto; margin-right: auto;" title="Dekan FPIK"
                                                            src="{{asset('frontend/photo/senat/wakil senat.jpg')}}" alt="Dekan FPIK IPB" width="200" />
                                                    </a>
                                                    <span style="color: #000000;">Sekretaris Fakultas Perikanan dan ilmu
                                                        Kelautan IPB </span>
                                                </strong>
                                            </h3>
                                            <h4 style="text-align: center;">
                                                <strong>
                                                    <a href="#">Prof. Dr. Ir. Mulyono S. Baskoro, M.Sc.</a>
                                                </strong>
                                            </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p align="justify">Senat FPIK semakin lama semakin diperlukan dalam transformasi institusi, FPIK menjadi institusi pendidikan yang berkualitas dan kompetitif. Di era departemenisasi, hubungan antar depatemen perlu terus di jaga agar tetap kuat,
                                solid, sehingga keluar tetap mencerminkan suatu kesatuan. Oleh karenanya senat FPIK harus menjadi think tank bagi pemikiran-pemikiran dan strategi pengembangan FPIK.. Anggota Senat Fakultas Perikanan dan Kelautan IPB berjumlah
                                32 orang terdiri dari 17 Guru Besar, 3 Guru Besar Emeritus, wakil departemen 9 orang dan 7 pejabat Struktural serta Dekan FPIK-IPB. Organ Normatif ini bertanggung jawab kepada seluruh dosen FPIK-IPB.</p>
                            <br>
                            <p align="justify">Anggota Senat mempunyai wewenang untuk memberikan masukan kepada Pimpinan Fakultas dalam menyusun strategi, rencana kerja dan anggaran tahunan, serta menilai hasil kinerja pimpinan fakultas dan dapat berfungsi sebagai badan
                                yang menetapkan kriteria, peraturan serta mekanisme pengangkatan Guru Besar.</p>
                        </div>

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
                    </article>
                    <!-- / Content -->
                </div>

                <div class=" col-md-1 col-lg-pull-7"></div>

                <div id="sidebar" class="col-md-3">
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">Tentang FPIK IPB</h3>
                        </div>
                        <!-- <p>Tidak ada info terbaru saat ini</p> -->
                        <ul class="post-list">
                            <li>
                                <a href="{{url('/sejarah')}}" title="sejarah FPIK IPB">Sejarah FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="{{url('/struktur')}}" title="struktur FPIK IPB">Struktur FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="{{url('/visi-misi')}}" title="visi-misi FPIK IPB">Visi & Misi FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                        <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="{{url('/pimpinan')}}" title="pimpinan FPIK IPB">Pimpinan FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                                                <span class="meta-date">05 November 2019</span>
                                                            </div> -->
                            </li>
                            <li>
                                <a href="{{url('/proker-restra')}}" title="proker-restra FPIK IPB">Program kerja & restra FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                                                <span class="meta-date">05 November 2019</span>
                                                            </div> -->
                            </li>
                            <li>
                                <a href="{{url('/senat')}}" title="senat FPIK IPB">Senat FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                                                <span class="meta-date">05 November 2019</span>
                                                            </div> -->
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="loader"><img src="{{asset('frontend/assets/images/loader.gif')}}"></div>

            </div>
        </div>
    </div>

@endsection
