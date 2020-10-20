@extends('layout_master')

@section('title')
    PKM Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="{{url('/')}}">Beranda</a><span class="divider"></span></li>
                        <li class="active">Program Kreativitas Mahasiswa</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">Program Kreativitas Mahasiswa</h1>

                        </div>
                        <div class="post-content">
                            <div class="post-content">
                                <!-- <figure class="entry-thumbnail slider-wrapper">
                                    <img src="photo/gallery/gallery15.jpg" alt="#">
                                </figure> -->
                                <table>
                                    <thead style="text-align: center; background-color: darkgray;">
                                        <tr>
                                            <td>No</td>
                                            <td>Judul</td>
                                            <td>Bidang Kegiatan</td>
                                            <td>Nama Ketua</td>
                                            <td>Nim Ketua</td>
                                        </tr>
                                    </thead>
                                    @foreach($pkm as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->title_pkm}}</td>
                                            <td>{{$data->field}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->nim}}</td>
                                        </tr>
                                    @endforeach   
                                        {{-- <tr>
                                            <td>1</td>
                                            <td>ATLANTIS: Kompleks Smart Underwater Fruit Factory Menuju</td>
                                            <td>PKM GT</td>
                                            <td>Ari Triharyono</td>
                                            <td>C44170009</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Green Coastal Flying City: Kota Melayang Pesisir Berbasis Energi</td>
                                            <td>PKM GT</td>
                                            <td>Angelina Rambe</td>
                                            <td>C24170056</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>"LOTIUM"(LOTUS-NASTURTIUM) INOVASI MINUMAN SACHET SIAP SEDUHBERBASIS AKAR TERATAI DAN SELADA AIR UNTUK MEMBANTU MENCEGAH
                                            STRESS OKSIDATIF</td>
                                            <td>PKM K</td>
                                            <td>ROMI TARIGAN</td>
                                            <td>C24170026</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>"RINORI INSTANT CREAM SOUP" KOMBINASI RUMPUT LAUT, TERIPANG,
                                                DAN SELEDRI SEBAGAI MAKANAN FUNGSIONAL PENCEGAH HIPERTENSI</td>
                                            <td>PKM K</td>
                                            <td>LILIK ENDAH SULISTYOWATI</td>
                                            <td>C24170004</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>HELBYHERB(H2):INOVASI FUNGSIONAL 
                                                "WISDOM OF TRADITIONAL DRINK" HERBA NUSANTARA</td>
                                            <td>PKM K</td>
                                            <td>DONNY DWI HARYANTO</td>
                                            <td>C34160075</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Hi-mino: INOVASI MINA-STOCK INSTAN BERBASIS
                                                INDIGENOUS KONSENTRAT PROTEIN IKAN SEBAGAI AUGMENTASI GIZI</td>
                                            <td>PKM K</td>
                                            <td>KAMILA SYIFA FIRDA</td>
                                            <td>C34170038</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>INSTRUMENT PERHITUNGAN BENIH UDANG ENGGUNAKAN METODE DEEP LEARNING</td>
                                            <td>PKM KC</td>
                                            <td>YULIANTI RATNASARI</td>
                                            <td>C54160055</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>PATRIOT: Sistem Otomatisasi Berbasis IoT untuk Pembersihan Limbah Dasar Tambak Udang</td>
                                            <td>PKM KC</td>
                                            <td>ALIFYANDO FIRMANDI PANDEWO</td>
                                            <td>C54160102</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Bioprospecting Nanoemulsi Water in Oil dengan Ultrasonik pada Kolagen Teripang Pasir Holothuria scabra sebagai
                                            Transcutaneous Delivery</td>
                                            <td>PKM PE</td>
                                            <td>I DEWA MADE RIZKY WIJAYA</td>
                                            <td>C34160046</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>EXCELLENT FIRE RESISTANCE LOGISTIC BIOFOAM
                                                BERBASIS RANCANGAN MATERIAL NANOFIBER HIDROKSIAPATIT DARI TULANG IKAN</td>
                                            <td>PKM PE</td>
                                            <td>NURUL AULIA PUSPITA</td>
                                            <td>C34160072</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>GARAM RENDAH SODIUM DARI BERBAGAI JENIS RUMPUT LAUT UNTUK PASIEN HIPERTENSI</td>
                                            <td>PKM PE</td>
                                            <td>AMALIA RAHMADHANI</td>
                                            <td>CC34160063</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>KEAKURATAN PELABELAN DOCOSAHEXAENOIC ACID SUPLEMEN VIRGIN MINYAK MATA TUNA UNTUK STUNTING MELALUI DETERMINASI KERAGAAN
                                            ASAM LEMAK OMEGA-3 DENGAN NEAR-INFRARED</td>
                                            <td>PKM PE</td>
                                            <td>MUHAMMAD SEPITIARMANSYAH ADIPUTRA</td>
                                            <td>C34150081</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>OPTIMASI FORMULASI PENGEMBANGAN RANCANGAN SUPLEMEN KEHAMILAN BERBASIS VIRGIN MINYAK MATA TUNA DAN HIDROLISAT PROTEIN
                                            KATSUOBUSHI MENGGUNAKAN SIMPLEX LATTICE MIXTURE DESIGN</td>
                                            <td>PKM PE</td>
                                            <td>SILVA FAUZIAH</td>
                                            <td>C34160045</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Sistem Pendekatan Konseptual Nelayan Tradisional Untuk Menentukan Musim Penangkapan Lobster Berdasarkan
                                            Ethno-Oceanography dan Kearifan Lokal</td>
                                            <td>PKM PSH</td>
                                            <td>ELVANRI ANGGI WIDIANTI</td>
                                            <td>C44170038</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Holie Sea: Wisata Bahari Buatan Berbasis
                                                Hologram Interaktif Guna Mewujudkan Konservasi Berkelanjutan</td>
                                            <td>PKM GT</td>
                                            <td>NADYAH ADELIA</td>
                                            <td>C14170037</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="share-box" id="yw1">
                            <li>
                                <a class="facebook" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(config('app.url').'/pekan-kreativitas-mahasiswa')}}">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{config('app.url').'/pekan-kreativitas-mahasiswa'}}"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/?text={{config('app.url').'/pekan-kreativitas-mahasiswa'}}">
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
