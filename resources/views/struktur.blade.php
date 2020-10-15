@extends('layout_master')

@section('title')
    Struktur Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li class="active">Struktur Organisasi Fakultas Perikanan IPB University</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Struktur Organisasi Fakultas Perikanan IPB University</h1>
                        </div>
                        <div class="post-content">
                            <p>
                                <a title="Struktur Organisasi Fakultas Perikanan IPB University" href="{{asset('frontend/photo/struktur/STRUKTUR_ORGANISASI_FPIK_-1.png')}}">
                                    <img src="{{asset('frontend/photo/struktur/STRUKTUR_ORGANISASI_FPIK_-1.png')}}" alt="" width="700" height="200" />
                                </a>
                            </p>
                        </div>
                    </article>
                    <!-- / Content -->
                </div>
                <div class=" col-md-1 col-md-pull-7"></div>
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
