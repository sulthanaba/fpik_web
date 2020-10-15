@extends('layout_master')

@section('title')
    Visi Misi Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li class="active">Visi dan Misi Fakultas Perikanan IPB 2016-2020</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Visi dan Misi Fakultas Perikanan IPB 2016-2020</h1>
                        </div>
                        <div class="post-content">
                            <p><strong>Visi:</strong></p>
                            <p align="justify">Memperkuat FPIK-IPB sebagai Pusat Unggulan dalam Mewujudkan Kejayaan Maritim Melalui Penyelenggaraan Pendidikan Tinggi Unggul pada Tingkat Nasional dan Regional di Bidang Perikanan dan Kelautan.</p>
                            <p><strong></strong><strong>Misi:</strong></p>
                            <p align="justify">• Meningkatkan kualitas atmosfer pendidikan tinggi unggul bidang perikanan dan kelautan melalui peningkatan modal sosial seluruh pemangku kepentingan FPIK-IPB</p>
                            <p align="justify">• Meningkatkan kualitas sistem penyelenggaraan pendidikan tinggi di lingkup FPIK-IPB untuk menghasilkan kualitas lulusan yang berdaya saing dan berdaya guna bagi pembangunan perikanan dan kelautan nasional dan regional.</p>
                            <p align="justify">• Meningkatkan kualitas dan kuantitas penelitian dan pengabdian kepada masyarakat di lingkup FPIK-IPB maupun kerjasama antar lembaga yang mampu menghasilkan inovasi teknologi maupun kebijakan untuk menjawab kebutuhan pembangunan
                                perikanan dan kelautan di seluruh tingkatan.</p>
                            <p>&nbsp;</p>
                        </div>
                        <ul class="share-box" id="yw1">
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
                    <!-- / Content -->
                </div>

                <div id="sidebar" class="col-md-3">
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">Tentang FPIK IPB</h3>
                        </div>
                        <ul class="post-list">
                            <li>
                                <a href="sejarah.html" title="sejarah FPIK IPB">Sejarah FPIK IPB</a>
                                <!-- <div class="entry-meta">
                                                    <span class="meta-date">05 November 2019</span>
                                                </div> -->
                            </li>
                            <li>
                                <a href="struktur.html" title="struktur FPIK IPB">Struktur FPIK IPB</a>
                            </li>
                            <li>
                                <a href="visi-misi.html" title="visi-misi FPIK IPB">Visi & Misi FPIK IPB</a>
                            </li>
                            <li>
                                <a href="pimpinan.html" title="pimpinan FPIK IPB">Pimpinan FPIK IPB</a>
                            </li>
                            <li>
                                <a href="proker-restra.html" title="proker-restra FPIK IPB">Program kerja & restra FPIK IPB</a>
                            </li>
                            <li>
                                <a href="senat.html" title="senat FPIK IPB">Senat FPIK IPB</a>

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
