@extends('layout_master')

@section('title')
    {{$berita->title}}
@endsection

@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <!-- Content Area col-md-push-1 -->
                <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="{{url('/')}}">Beranda</a><span class="divider"></span></li>
                        <li><a href="{{url('/berita')}}">Rilis Berita</a><span class="divider"></span>
                        </li>
                        <li class="active">{{$berita->title}}</li> <!Jdul berita>
                    </ul>
                    <!-- Content Area -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">{{$berita->title}} 
                            </h1> <!Jdul berita>
                            <ul class="entry-meta">
                                <li class="post-date">
                                    {{$berita->created_at}} WIB <!tanggal post>
                                </li>
                                <li class="post-author">sumber: {{$berita->source}}</li> <!sumber berita>
                            </ul>
                        </div>
                        <div class="post-content">
                            <figure class="entry-thumbnail slider-wrapper">
                                <img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$berita->image}}" alt="#"> <!foto berita>
                            </figure>
                            <p><!Jdul berita></p>
                            <p>{!!$berita->description!!}</p>
                        </div>
                        <!-- Share -->
                        <ul class="share-box" id="yw1">
                            <li>
                                <a class="facebook" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode($link)}}">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{$link}}"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/?text={{$link}}">
                                    <i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                        <!-- / Share -->
                        <!-- Other news -->
                        <div class="related-post">
                            <div class="content-header">
                                <h3 class="content-title">Berita Lainnya</h3>
                            </div>
                            <ul class="post-list">

                                @foreach($berita3 as $b3)

                                    <li>
                                        <a href="{{ url('/berita-lengkap/'.$b3->id) }}">
                                            <h4>{{$b3->title}}
                                            </h4>
                                        </a>
                                        <div class="entry-meta">
                                            <span class="meta-date">{{$b3->created_at}}</span>
                                        </div>
                                    </li>

                                @endforeach

                            </ul>
                        </div>
                        <!-- / Other news -->
                    </article>
                </div>

                <div class="col-md-1 col-md-pull-8 share-box-wrapper">
                    <ul class="share-box" id="yw2">
                        <li>
                            <a class="facebook" title="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode($link)}}">
                                <i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" title="Twitter" target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{$link}}"><i
                                    class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="whatsapp" title="WHATSAPP" target="_blank" href="https://wa.me/?text={{$link}}">
                                <i class="fa fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>

                <div id="sidebar" class="col-md-3">
                    <div class="widget widget_rss">
                        <div class="widget-header">
                            <h3 class="widget-title">
                                <a href="berita-lengkap.html" class="rsswidget">Rilis Berita</a>
                            </h3>
                        </div>
                        <ul>

                            @foreach($berita2 as $b2)

                                <li>
                                    <a class="rsswidget" href="{{ url('/berita-lengkap/'.$b2->id) }}" title="Potensi Laut di Natuna">{{$b2->title}}</a>
                                    <span class="rss-date">{{$b2->created_at}}</span>
                                    <div class="rssSummary">{{$b2->description}}
                                    </div>
                                    <cite>{{$b2->source}}</cite>
                                </li>

                            @endforeach

                        </ul>
                    </div>
                    <div class="widget widget_recent_entries">
                        <div class="widget-header">
                            <h3 class="widget-title">Info</h3>
                        </div>
                        <p>Tidak ada info terbaru saat ini</p>
                    </div>
                    <div class="widget widget-event">
                        <div class="widget-header">
                            <h3 class="widget-title">Agenda</h3>
                        </div>
                        <p>Tidak ada agenda terbaru saat ini</p>
                    </div>
                </div>
                <!-- content end here -->
            </div>
        </div>
    </div>

@endsection

    