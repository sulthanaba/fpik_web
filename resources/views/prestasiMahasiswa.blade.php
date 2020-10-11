@extends('layout_master')
@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li class="active">Daftar Prestasi Mahasiswa FPIK IPB</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Daftar Prestasi Mahasiswa FPIK IPB</h1>
                        </div>
                        <div class="post-content">
                            <div class="post-content">
                                <!-- <figure class="entry-thumbnail slider-wrapper">
                                    <img src="photo/sejarah fpik.jpg" alt="#">
                                </figure> -->
                                <table>
                                    <thead style="text-align: center; background-color: darkgray; ">
                                        <tr>
                                            <td>No</td>
                                            <td>Nama</td>
                                            <td>Tahun</td>
                                            <td>Nama Penghargaan</td>
                                            <td>Nama Kegiatan</td>
                                            <td>Lingkup</td>
                                        </tr>
                                    </thead>
                                    @foreach($prestasi as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->year}}</td>
                                            <td>{{$data->achievement}}</td>
                                            <td>{{$data->activity}}</td>
                                            <td>{{$data->scope}}</td>
                                        </tr>
                                    @endforeach    
                                        {{-- <tr>
                                            <td>1</td>
                                            <td>Enggar Yulia Wardani</td>
                                            <td>2015</td>
                                            <td>Duta Indonesia</td>
                                            <td>ASEAN Power Shift 2015 "A Global Deal for Climate"
                                                Singapura
                                            </td>
                                            <td>Internasional</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Adi Nugroho</td>
                                            <td>2017</td>
                                            <td>juara 2</td>
                                            <td>Scientific Papers Competition at National Scientific Papers
                                                Competition ICON IV & E-DOV FESTIVAL 2017
                                            </td>
                                            <td>Nasional</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Rizki Ash Shidiqi</td>
                                            <td>2017</td>
                                            <td>Juara 2</td>
                                            <td>Scientific Papers Competition(Rizki Nurdin Ash Shidiqi)
                                            </td>
                                            <td>Nasional</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Ida Nurokhmah</td>
                                            <td>2017</td>
                                            <td>Duta Indonesia</td>
                                            <td>Jenesys 2.0 (Japan East Asia Network of Exchange
                                                for Student and Youth)
                                            </td>
                                            <td>Internasional</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Baiq Nabila Muftia Utami</td>
                                            <td>2018</td>
                                            <td>Juara 1</td>
                                            <td>Technology and Enginering category at Asia Pasicic
                                                Agriculture Ungraduate Student Project Competition(APASS) Taiwan
                                            </td>
                                            <td>Internasional</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Baiq Nabila Muftia Utami</td>
                                            <td>2019</td>
                                            <td>Mahasiswa Berprestasi II IPB</td>
                                            <td>Mahasiswa Berprestasi IPB 2019
                                            </td>
                                            <td>IPB</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Baiq Nabila Muftia Utami</td>
                                            <td>2019</td>
                                            <td>Awardee</td>
                                            <td>Awardee Kyoto Winter School in Graduate School of Agriculture,
                                                Kyoto University,Japan
                                            </td>
                                            <td>Internasional</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="share-box" id="yw1">
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
                                <a href="{{ url('/daftar-prestasi-mahasiswa') }}" title="Prestasi mahasiswa">Daftar Prestasi Mahasiswa</a>
                                <!-- <div class="entry-meta">
                                    <span class="meta-date">05 November 2019</span>
                                </div> -->
                            </li>
                            <li>
                                <a href="{{ url('/daftar-kegiatan-mahasiswa') }}" title="Kegiatan Mahasiswa">Daftar Kegiatan Mahasiswa</a>
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
