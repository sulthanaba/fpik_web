@extends('layout_master')

@section('title')
    IFMOS Pelabuhanratu Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <!-- <li><a href="../tentang.html">Tentang UGM</a><span class="divider"></span></li> -->
                        <li class="active">Fasilitas Fakultas Perikanan dan Ilmu Kelautan IPB</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">IFMOS Pelabuhanratu</h1>
                        </div>
                        <div class="">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide1.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide2.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide3.jpg')}}" alt="#">
                                    </div>
                                    <div class="item ">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide4.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide5.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide6.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide7.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide8.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide9.jpg')}}" alt="#">
                                    </div>
                                    <div class="item ">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide10.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide11.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide12.jpg')}}" alt="#">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/photo/ifmos pelabuhanratu/Slide13.jpg')}}" alt="#">
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
                        <br>
                        <!-- <div class=" post-content">
                            <p><strong>PIJAKAN Sejarah IFMOS PELABUHANRATU</strong></p>
                            <ul>
                                <li>Pendirian IFMOS (SLK) Ancol diinisiasi tahun 1977/78 oleh Menteri Pertanian Thoyib Hadiwidjaja dan Gubernur DKI Jakarta Ali Sadikit untuk pengembangan bidang kelautan, melalui program penelitian dan pendidikan</li>
                                <li>Pembentukan kompleks maritim yang kemudian dikenal sebagai Kompleks Bina Samudera
                                </li>
                            </ul>
                            <p><strong>Nilai Strategis IFMOS Ancol</strong></p>
                            <ul>
                                <li>Menjadikan Ancol sebagai <b>Etalase Riset dan Bisnis Maritim Jakarta</b></li>
                                <li>Memperkuat <b>sinergi riset, edukasi dan kebijakan kemaritiman</b> berbasis kekuatan empat pilar lembaga kelautan yang saat ini ada di kawasan Ancol</li>
                                <li>Menjadikan Ancol sebagai pusat kegiatan riset, budaya dan edukasi kelautan dan kemaritiman yang berorientasi <b>bisnis perikanan berkelanjutan</b></li>
                            </ul>
                        </div> -->
                    </article>

                </div>
                <div id="sidebar" class="col-md-3 ">
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">Fasilitas FPIK IPB</h3>
                        </div>

                        <ul class="post-list">
                            <li>
                                <a href="ifmos-pelabuhanratu.html">Ifmos Pelabuhanratu</a>
                            </li>
                            <li>
                                <a href="ifmos-ancol.html">Ifmos Ancol</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="loader"><img src="{{asset('frontend/assets/images/loader.gif')}}"></div>

            </div>
        </div>
    </div>

@endsection

