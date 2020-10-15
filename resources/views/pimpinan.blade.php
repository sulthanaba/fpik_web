@extends('layout_master')

@section('title')
    Pimpinan Fakultas Perikanan dan Ilmu Kelautan IPB
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
                            <h1 class="post-title">Pimpinan Fakultas Perikanan IPB</h1>
                        </div>
                        <div class="post-content">
                            <table id="fotopimpinan" border="0">
                                <tbody>
                                    <tr>
                                        <td colspan="5">
                                            <h3 style="text-align: center;">
                                                <strong>
                                                    <a href="#">
                                                    <img style="display: block; margin-left: auto; margin-right: auto;"
                                                            title="Dekan FPIK" src="{{asset('frontend/photo/pimpinan/dekan.jpg')}}"
                                                            alt="Dekan FPIK IPB"
                                                            width="200" />
                                                    </a>
                                                    <span style="color: #000000;">Dekan Fakultas Perikanan dan ilmu Kelautan IPB </span>
                                                </strong>
                                            </h3>
                                            <h4 style="text-align: center;">
                                                <strong>
                                                    <a href="#">Ir. Luky Adrianto, M.Sc., PhD</a>
                                                </strong>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr bgcolor="#CCCCCC">
                                        <td colspan="4" align="center"><strong>&nbsp;<br /></strong></td>
                                    </tr>
                                    <tr align="center">
                                        <td colspan="2">
                                            <img style="padding: 0px; margin: 0px;" title="Wakil dekan I" src="{{asset('frontend/photo/pimpinan/joko_santoso.jpeg')}}" alt="Wakil Dekan I" width="165" />
                                        </td>
                                        <td colspan="2">
                                            <img style="padding: 0px; margin: 0px;" title="Wakil Dekan II" src="{{asset('frontend/photo/pimpinan/budi_hascaryo.jpeg')}}" alt="Wakil Dekan II" width="165" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: center;">
                                            <div align="center">Wakil dekan Bidang Akademik dan Kemahasiswaan
                                            </div>
                                        </td>
                                        <td colspan="2" style="text-align: center;">
                                            <div align="center">Wakil dekan Bidang Sumberdaya, Kerjasama dan Pengembangan
                                            </div>
                                        </td>

                                    </tr>
                                    <tr style="font-style: bold;" align="center">
                                        <td colspan="2" style="text-align: center;">
                                            <a href="#">
                                                <strong>Prof. Ir. Joko Santoso, MS., PhD</strong>
                                            </a>
                                        </td>
                                        <td colspan="2" style="text-align: center;">
                                            <a href="#">
                                                <strong>Ir. Budhi Hascaryo Iskandar, MS., PhD</strong>
                                            </a>
                                        </td>

                                        <tr bgcolor="#CCCCCC">
                                            <td colspan="4" align="center"><strong>&nbsp;<br /></strong></td>
                                        </tr>
                                        <tr align="center">
                                            <td>
                                                <img style="padding: 0px; margin: 0px;" title="Wakil dekan I" src="{{asset('frontend/photo/pimpinan/julie-ekasari-296x300.jpg')}}" alt="Wakil Dekan I" width="100" />
                                            </td>
                                            <td>
                                                <img style="padding: 0px; margin: 0px;" title="Wakil Dekan II" src="{{asset('frontend/photo/pimpinan/Bambang-Riyanto-S.Pi_.-M.Si_.-mknlo4xpq2cyc41i4oxhk8gfv30jqbbt9hhelssxqo.png')}}" alt="Wakil Dekan II" width="100" />
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img style="padding: 0px; margin: 0px;" title="Wakil Dekan III" src="{{asset('frontend/photo/pimpinan/TARYONO-NEW-250x350.png')}}" alt="Wakil Dekan III" width="100" />
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img style="padding: 0px; margin: 0px;" title="Wakil Dekan IV" src="{{asset('frontend/photo/pimpinan/OSE_06_ALN-225x300.jpg')}}" alt="Wakil Rektor IV" width="100" />
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">
                                                <div align="center">Deputi Wakil dekan Bidang Riset dan Laboratorium Terpadu
                                                </div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div align="center">Deputi Wakil dekan Bidang Kemahasiswaan
                                                </div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div align="center">Deputi Wakil dekan Bidang Kemitraan Dalam Negeri dan Hunbungan Alumni
                                                </div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div align="center">Deputi Wakil dekan Bidang Hubungan internasional dan Kajian Strategis
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="font-style: bold;" align="center">
                                            <td style="text-align: center;">
                                                <a href="#">
                                                    <strong>Julie Ekasari, S.Pi. M.Sc., PhD</strong>
                                                </a>
                                            </td>
                                            <td style="text-align: center;">
                                                <a href="#">
                                                    <strong>Bambang Riyanto S.Pi, M.Si</strong>
                                                </a>
                                            </td>
                                            <td style="text-align: center;">
                                                <a href="#">
                                                    <strong>Dr. Taryono, S.Pi., M.Si</strong>
                                                </a>
                                            </td>
                                            <td style="text-align: center;">
                                                <a href="#">
                                                    <strong>Alan F Koropitan, S.Kel., MS., PhD</strong>
                                                </a>
                                            </td>
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                            <p>&nbsp;</p>

                            <!-- <div class="panel-box">
                                <h3 class="panel-title">Link Terkait</h3>
                                <ul>
                                    <li><a href="#">Rektorat</a></li>
                                    <li><a href="#">Direktur dan Sekretaris</a></li>
                                    <li><a href="#">tenaga didik</a></li>
                                </ul>
                            </div> -->
                        </div>

                        <ul class="share-box" id="yw2">
                            <li>
                                <a class="facebook" title="Facebook" target="_blank" href="http://www.facebook.com/">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" title="Twitter" target="_blank" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/">
                                    <i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </article>

                </div>
                <div class="col-md-1 col-md-pull-7 share-box-wrapper">
                </div>
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
