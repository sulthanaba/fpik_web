@extends('layout_master')

@section('title')
    Berita Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                    <li><a href="{{url('/')}}">Beranda</a><span class="divider"></span></li>
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
                                        <div class="entry-content" style="max-height: 100px;overflow: hidden;text-overflow: ellipsis;">
                                            <p>{!!$b->description!!}</p>
                                        </div> <!Isi Berita>
                                    </div>
                                </div>
                            </article>

                        @endforeach
                        
                        <div class="d-flex justify-content-center">
                            {!! $berita->links() !!}
                        </div>
                        <!-- Pagination -->
                    </div>
                </div>
                <div class="col-md-1 col-md-pull-8 share-box-wrapper">
                    <ul class="share-box" id="#">
                        <li>
                            <a class="facebook" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(config('app.url').'/berita')}}">
                                <i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{config('app.url').'/berita'}}"><i
                                    class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/?text={{config('app.url').'/berita'}}">
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