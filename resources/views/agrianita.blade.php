@extends('layout_master')

@section('title')
    Agrianita Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-9 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="{{url('/')}}">Beranda</a><span class="divider"></span></li>
                        <li class="active">Agrianita Fakultas Perikanan dan Ilmu Kelautan IPB</li>
                    </ul>
                    <!-- Content -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title font-weight-bold text-center" style="color: #073C64;">Kegiatan Agrianita FPIK IPB</h1>
                            <ul class="entry-meta">
                                <li class="post-view print_pdf">
                                    <a rel="nofollow" class="print-pdf btn btn-secondary" title="SDG Fakultas" href="{{ asset('frontend/bahan/DATA WEB AGRIANITA C-FPIK.pptx') }}">
                                        <i class="fa fa-file-pdf-o"></i> Agrianita | FPIK IPB </a>
                                </li>
                            </ul>
                            <hr>
                            <!-- <h3 class="" style="color: #073C64;">Departemen Budidaya Perairan</h3> -->
                        </div>
                        <div>
                            <!-- Content -->
                            @foreach($agrianita as $a)
                            <article class="post">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 post-img">
                                        <a href="{{ url('/agrianita-lengkap/'.$a->id) }}"> <!link agrianita>
                                            <img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$a->image_agrianita}}" alt="#"> <!Foto agrianita>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8 post-content">
                                        <div class="post-title">
                                            <h3>
                                                <a title="MUSHOLA BERSIH FPIK" href="{{ url('/agrianita-lengkap/'.$a->id) }}">{{$a->title_agrianita}}
                                                </a> <!link dan judul agrianita>
                                            </h3>
                                            <p class="post-meta">
                                                <!-- <a href="../arsip/liputan-berita.html" class="post-category">Liputan/Berita</a> -->
                                                <span class="post-date">{{$a->created_at}}</span> <!tanggal post>
                                            </p>
                                        </div>
                                        <div class="entry-content" style="max-height: 100px;overflow: hidden;text-overflow: ellipsis;">
                                            <p>{!!$a->description_agrianita!!}</p> <!Isi agrianita>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            <div class="d-flex justify-content-center">
                                {!! $agrianita->links() !!}
                            </div>
                            <!-- Pagination -->
                        </div>
                    </article>
                    <!-- / Content -->
                </div>
                <div id="sidebar" class="col-md-3 ">
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">SDG14</h3>
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