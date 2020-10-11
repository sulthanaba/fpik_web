@extends('layout_master')
@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li class="active">Agenda</li>
                    </ul>
                    <div>
                        <!-- Content -->

                        @foreach($agenda as $ag)

                            <article class="post">
                                <div class="row">
                                    <!-- <div class="col-md-4 col-sm-4 post-img">
                                        <a href="berita-1.html">
                                            <img src="photo/berita/berita-1.jpg" alt="#">
                                        </a>
                                    </div> -->
                                    <div class="col-md-12 col-sm-12 post-content">
                                        <div class="post-title">
                                            <h3>
                                                <a title="" href="http://esc-embrio.ipb.ac.id">{{$ag->title_agenda}}
                                                </a>
                                            </h3>
                                            <p class="post-meta">
                                                <!-- <a href="../arsip/liputan-berita.html" class="post-category">Liputan/Berita</a> -->
                                                <span class="post-date">
                                                    {{$ag->date_agenda}}
                                                    @if($ag->date_agenda_until)

                                                        - {{$ag->date_agenda_until}}
                                            
                                                    @endif
                                                </span>
                                            </p>
                                        </div>
                                        <div class="entry-content">
                                            <p>{{$ag->desc_agenda}}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        @endforeach

                        <div class="yii-pagination">
                            Pergi ke halaman:
                            <ul id="yw1" class="yiiPager">
                                <li class="first hidden"><a href="#">&lt;&lt; Pertama</a></li>
                                <!-- <li class="previous"><a href="#">&lt; Sebelumnya</a></li> -->
                                <li class="page selected"><a href="berita-lengkap.html">1</a></li>
                                <li class="page"><a href="#">2</a></li>
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

                            @foreach($berita as $b)

                                <li>
                                    <a href="{{url('/berita-lengkap/'.$b->id)}}" title="Riset dosen IPB terkait sidat masuk prioritas riset nasional">{{$b->title}}</a>
                                    <div class="entry-meta">
                                        <span class="meta-date">{{$b->created_at}}</span>
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