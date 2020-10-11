@extends('layout_master')
@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li class="active">Rilis Berita</li>
                    </ul>
                    <!-- Archive Header -->
                    <!-- / Archive Header -->
                    <div>
                        <!-- Content -->

                        @foreach($berita as $b)

                            <article class="post">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 post-img">
                                        <a href="{{ url('/berita-lengkap/'.$b->id) }}"> <!link Berita>
                                            <img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$b->image}}" alt="#"> <!Foto berita>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8 post-content">
                                        <div class="post-title">
                                            <h3>
                                                <a href="{{ url('/berita-lengkap/'.$b->id) }}" title="Cegah Covid-19, Dosen IPB Riset Biota Laut untuk Imunitas" href="berita-1.html">{{$b->title}}
                                                </a> <!judul Berita>
                                            </h3>
                                            <p class="post-meta">
                                                <!-- <a href="../arsip/liputan-berita.html" class="post-category">Liputan/Berita</a> -->
                                                <span class="post-date">{{$b->created_at}}</span> <!Tanggal berita>
                                            </p>
                                        </div>
                                        <div class="entry-content">
                                            <p>{{$b->description}}</p>
                                        </div> <!Isi Berita>
                                    </div>
                                </div>
                            </article>

                        @endforeach
                        {{-- <article class="post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 post-img">
                                    <a href="berita-2.html">
                                        <img src="{{asset('frontend/photo/berita/berita-2.png')}}" alt="#">
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8 post-content">
                                    <div class="post-title">
                                        <h3>
                                            <a title="Departemen PSP FPIK IPB Diskusi Keberlanjutan Pengelolaan Lobster Skala Kecil" href="berita-2.html">
                            Departemen PSP FPIK IPB Diskusi Keberlanjutan Pengelolaan Lobster Skala Kecil</a>
                                        </h3>
                                        <p class="post-meta">
                                            <!-- <a href="../arsip/kerjasama.html" class="post-category">Kerjasama</a> -->
                                            <span class="post-date">16 Jul 2020</span>
                                        </p>
                                    </div>
                                    <div class="entry-content">
                                        <p>Menyinggung mengenai isu penangkapan lobster yang sedang hangat dibicarakan, Departemen Pemanfaatan Sumberdaya Perikanan (PSP), Fakultas Perikanan dan Ilmu Kelautan <b>(FPIK) IPB University</b> kembali melaksanakan
                                            Webinar 6th Voice for Fisheries yang mengangkat tema Keberlanjutan Perikanan Lobster Skala Kecil, (25/7). Prof Dr Sulistiono, dosen <b>IPB University</b> dari Departemen Manajemen Sumberdaya Perairan (MSP) FPIK
                                            mengatakan bahwa terkait isu lobster yang saat ini ramai dibicarakan publik..</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 post-img">
                                    <a href="berita-3.html">
                                        <img src="{{asset('frontend/photo/berita/berita-5.jpg')}}" alt="#">
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8 post-content">
                                    <div class="post-title">
                                        <h3>
                                            <a title="Ir Hikmat Rusdi Terpilih sebagai Ketua Himpunan Alumni FPIK IPB 2020-2023" href="berita-3.html">Ir Hikmat Rusdi Terpilih sebagai Ketua Himpunan Alumni FPIK IPB 2020-2023
                    </a>
                                        </h3>
                                        <p class="post-meta">
                                            <!-- <a href="../arsip/liputan-berita.html" class="post-category">Liputan/Berita</a> -->
                                            <span class="post-date">15 Sep 2020</span>
                                        </p>
                                    </div>
                                    <div class="entry-content">
                                        <p>Himpunan Alumni Fakultas Perikanan dan Ilmu Kelautan (FPIK) IPB University melaksanakan Musyawarah Nasional (MUNAS) ke-4
                                        sekaligus kegiatan RUAYA secara daring...</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 post-img">
                                    <a href="berita-2.html">
                                        <img src="{{asset('frontend/photo/berita/berita-3.jpg')}}" alt="#">
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8 post-content">
                                    <div class="post-title">
                                        <h3>
                                            <a title="IPB Kenalkan Inovasi Alat Penangkap Ikan bagi Nelayan" href="berita-4.html">
                        IPB Kenalkan Inovasi Alat Penangkap Ikan bagi Nelayan</a>
                                        </h3>
                                        <p class="post-meta">
                                            <!-- <a href="../arsip/kerjasama.html" class="post-category">Kerjasama</a> -->
                                            <span class="post-date">20 Sep 2020</span>
                                        </p>
                                    </div>
                                    <div class="entry-content">
                                        <p>IPB University, Kementerian Kelautan dan Perikanan (KKP) dan Ikatan Sarjana Perikanan Indonesia (ISPIKANI) menggelar
                                        sosialisasi alat tangkap ikan bagi masyarakat nelayan di Cirebon, (14-15/9). Pelaksanaan kegiatan ini dilakukan di
                                        Cirebon dengan dua lokasi yang berbeda yakni di tempat pelelangan ikan (TPI) Ambulu dan SDN 2 Gebangudik...</p>
                                    </div>
                                </div>
                            </div>
                        </article> --}}
                        <div class="yii-pagination">
                            Pergi ke halaman:
                            <ul id="yw1" class="yiiPager">
                                <li class="first hidden"><a href="#">&lt;&lt; Pertama</a></li>
                                <!-- <li class="previous"><a href="#">&lt; Sebelumnya</a></li> -->
                                <li class="page selected"><a href="berita-lengkap.html">1</a></li>
                                <li class="page"><a href="berita-lengkap-2.html">2</a></li>
                                <li class="next"><a href="#">Berikut &gt;</a></li>
                                <li class="last"><a href="#">Terakhir &gt;&gt;</a></li>
                            </ul>
                        </div>
                        <!-- Pagination -->
                    </div>
                </div>
                <div class="col-md-1 col-md-pull-8 share-box-wrapper">
                    <ul class="share-box" id="#">
                        <li>
                            <a class="facebook" title="Facebook" target="_blank" href="http://www.facebook.com/">
                                <i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" title="Twitter" target="_blank" href="http://twitter.com/">
                                <i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/">
                                <i class="fa fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
                <div id="sidebar" class="col-md-3">
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">Berita Terbaru</h3>
                        </div>
                        <ul class="post-list">

                            @foreach($berita2 as $b2)

                                <li>
                                    <a href="{{ url('/berita-lengkap/'.$b2->id) }}" title="Riset dosen IPB terkait sidat masuk prioritas riset nasional">{{$b2->title}}</a>
                                    <div class="entry-meta">
                                        <span class="meta-date">{{$b2->created_at}}</span>
                                    </div>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="loader"><img src="{{asset('frontend/assets/images/loader.gif')}}"></div>
            </div>
        </div>
        <!-- content end here -->
    </div>

@endsection