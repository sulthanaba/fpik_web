@extends('layout_master')

@section('title')
    Sejarah Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li class="active">Sejarah Fakultas Perikanan dan Ilmu Kelautan IPB</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Sejarah Fakultas Perikanan dan Ilmu Kelautan IPB</h1>
                            <ul class="entry-meta">
                                <li class="post-date">
                                    23 May 2019, 9:58 WIB
                                </li>
                                <li class="post-view print_pdf">
                                    <a rel="nofollow" class="print-pdf btn btn-secondary" title="Sejarah FPIK IPB" href="bahan/Buku-Sejarah-dan-Perkembangan-50-Tahun-FPIK-2013.pdf">
                                        <i class="fa fa-file-pdf-o"></i> Sejarah FPIK IPB </a>
                                </li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <div class="post-content">
                                <figure class="entry-thumbnail slider-wrapper">
                                    <img src="{{asset('frontend/photo/banner/6.jpg')}}" alt="#">
                                </figure>
                                <p align="justify">Fakultas Perikanan dan Ilmu Kelautan (FPIK) IPB didirikan pada tanggal 1 September 1963 dengan nama Fakultas Perikanan bersamaan dengan berdirinya Institut Pertanian Bogor.</p>
                                <p align="justify">Perintisan untuk mendirikan Fakultas Perikanan dimulai sejak tahun 1953 hingga 1958 melalui pembentukan Tim Persiapan Fakultas Perikanan di Universitas Indonesia (UI). Pada tahun 1960 dibuka jurusan Perikanan Laut di bawah
                                    Fakultas Kedokteran Hewan, Peternakan dan Perikanan Laut</p>
                                <p align="justify">pada tahun 1961 dibuka Jurusan Perikanan Darat di bawah Fakultas Pertanian UI. Pada tahun 1963, Fakultas Pertanian dan Fakultas Kedokteran Hewan, Peternakan dan Perikanan Laut UI memisahkan diri dari UI dan Membantuk Institut
                                    Pertanian Bogor (IPB) yang terdiri dari Lima fakultas yaitu Fakultas Pertanian, Fakultas Kedokteran Hewan, Fakultas Perikanan, Fakultas Peternakan dan Fakultas Kehutanan.
                                </p>
                            </div>
                        </div>
                        <ul class="share-box" id="yw1">
                            <li>
                                <a class="facebook" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(config('app.url').'/sejarah')}}">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{config('app.url').'/sejarah'}}"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/?text={{config('app.url').'/sejarah'}}">
                                    <i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </article>
                    <!-- / Content -->

                    <!-- Comments -->
                    <!-- / Comments -->
                </div>

                <div id="sidebar" class="col-md-3">
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">Tentang FPIK IPB</h3>
                        </div>
                        <!-- <p>Tidak ada info terbaru saat ini</p> -->
                        <ul class="post-list">
                            <li>
                                <a href="sejarah.html" title="sejarah FPIK IPB">Sejarah FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="struktur.html" title="struktur FPIK IPB">Struktur FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="visi-misi.html" title="visi-misi FPIK IPB">Visi & Misi FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                        <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="pimpinan.html" title="pimpinan FPIK IPB">Pimpinan FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                                                <span class="meta-date">05 November 2019</span>
                                                            </div> -->
                            </li>
                            <li>
                                <a href="proker-restra.html" title="proker-restra FPIK IPB">Program kerja & restra FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                                                <span class="meta-date">05 November 2019</span>
                                                            </div> -->
                            </li>
                            <li>
                                <a href="senat.html" title="senat FPIK IPB">Senat FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                                                <span class="meta-date">05 November 2019</span>
                                                            </div> -->
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="loader"><img src="{{asset('frontend/assets/images/loader.gif')}}"></div>
                <!-- content end here -->
            </div>
        </div>
    </div>

@endsection
