@extends('layout_master')

@section('title')
    Kegiatan Mahasiswa Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="{{url('/')}}">Beranda</a><span class="divider"></span></li>

                        <li class="active">Daftar Kegiatan Kemahasiswaan</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Daftar Kegiatan Kemahasiswaan</h1>
                        </div>
                        <div class="post-content">
                            <div class="post-content">
                                <!-- <figure class="entry-thumbnail slider-wrapper">
                                    <img src="photo/sejarah fpik.jpg" alt="#">
                                </figure> -->
                                <table>
                                    <thead style="text-align: center; background-color: darkgray;">
                                        <tr>
                                            <td>No</td>
                                            <td>Nama</td>
                                            <td>Nim</td>
                                            <td>Nama Penghargaan</td>
                                            <td>Nama Kegiatan</td>
                                            <td>Lingkup</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="share-box" id="yw1">
                            <li>
                                <a class="facebook" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(config('app.url').'/daftar-kegiatan-mahasiswa')}}">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{config('app.url').'/daftar-kegiatan-mahasiswa'}}"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/?text={{config('app.url').'/daftar-kegiatan-mahasiswa'}}">
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
                            <h3 class="widget-title">Kemahasiswaan FPIK IPB</h3>
                        </div>
                        <!-- <p>Tidak ada info terbaru saat ini</p> -->
                        <ul class="post-list">
                            <li>
                                <a href="{{ url('/pekan-kreativitas-mahasiswa') }}" title="PKM">Pekan Kreativitas Mahasiswa</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="{{ url('/daftar-prestasi-mahasiswa') }}" title="Prestasi mahasiswa">Daftar Prestasi
                                    Mahasiswa</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="{{ url('/daftar-kegiatan-mahasiswa') }}" title="Kegiatan Mahasiswa">Daftar Kegiatan
                                    Mahasiswa</a>
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

