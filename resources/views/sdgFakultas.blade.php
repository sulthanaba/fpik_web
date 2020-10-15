@extends('layout_master')

@section('title')
    SDG Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="{{url('/')}}">Beranda</a><span class="divider"></span></li>
                        <li class="active">SDG14 Fakultas Perikanan dan Ilmu Kelautan IPB</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title font-weight-bold text-center" style="color: #073C64;">Kegiatan SDG14 FPIK IPB</h1>
                            <ul class="entry-meta">
                                <li class="post-view print_pdf">
                                    <a rel="nofollow" class="print-pdf btn btn-secondary" title="SDG Fakultas" href="{{asset('frontend/bahan/SDG14-Report-FPIK2019-29-09-20.pdf')}}">
                                        <i class="fa fa-file-pdf-o"></i> Sustainability Report 2019 | FPIK IPB </a>
                                </li>
                            </ul>
                            <hr>
                            <!-- <h3 class="" style="color: #073C64;">Departemen Budidaya Perairan</h3> -->
                        </div>
                        <div>
                            <!-- Content -->

                            @foreach($sdg as $s)

                                <article class="post">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 post-img">
                                            <a href="{{url('/sdg14-lengkap/'.$s->id)}}"> <!link sdg>
                                                <img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$s->image_sdg}}" alt="#"> <!Foto sdg>
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 post-content">
                                            <div class="post-title">
                                                <h3>
                                                    <a href="{{url('/sdg14-lengkap/'.$s->id)}}" title="Studi Pengembangan Pusat Konservasi Pulau Tidung Kecil" href="sdg-1.html">{{$s->title_sdg}}
                                                    </a> <!link dan judul sdg>
                                                </h3>
                                                <p class="post-meta">
                                                    <!-- <a href="../arsip/liputan-berita.html" class="post-category">Liputan/Berita</a> -->
                                                    <span class="post-date">{{$s->created_at}}</span> <!tanggal post>
                                                </p>
                                            </div>
                                            <div class="entry-content" style="max-height: 100px;overflow: hidden;text-overflow: ellipsis;">
                                                <p>{!!$s->description_sdg!!}</p> <!Isi sdg>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            
                            @endforeach
                            
                            <div class="d-flex justify-content-center">
                                {!! $sdg->links() !!}
                            </div>
                            <!-- Pagination -->

                        </div>
                    </article>
                    <!-- / Content -->
                </div>
                <div id="sidebar" class="col-md-3 ">
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">SDG14 Activities</h3>
                        </div>
                        <!-- <p>Tidak ada info terbaru saat ini</p> -->
                        <ul class="post-list">
                            <li>
                                <a href="http://bdp.fpik.ipb.ac.id/?p=5598">Departemen Budidaya Perairan</a>
                            </li>
                            <li>
                                <a href="http://msp.fpik.ipb.ac.id/en/category/sdg-14/">Departemen Manajemen Sumberdaya Perairan</a>
                            </li>
                            <li>
                                <a href=" http://thp.ipb.ac.id/?s=sdg">Departemen Teknologi Hasil Perairan</a>
                            </li>
                            <li>
                                <a href=" http://psp.fpik.ipb.ac.id/index.php/id/sdg14/">Departemen Pemanfaatan Sumberdaya Perikanan</a>
                            </li>
                            <li>
                                <a href="http://itk.ipb.ac.id/~itkipb/?s=SDG">Departemen Ilmu dan Teknologi Kelautan</a>
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
