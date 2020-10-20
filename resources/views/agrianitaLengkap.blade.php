@extends('layout_master')

@section('title')
    {{$agrianita->title_agrianita}}
@endsection

@section('content')

<div id="body">
    <div class="container">
        <div class="row">
            <!-- Content Area col-md-push-1 -->
            <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                <ul class="breadcrumbs breadcrumb">
                    <li><a href="{{url('/')}}">Beranda</a><span class="divider"></span></li>
                    <li><a href="{{url('/agrianita')}}">Agrianita</a><span class="divider"></span>
                    </li>
                    <li class="active">{{$agrianita->title_agrianita}}</li> <!Jdul agrianita>
                </ul>
                <!-- Content Area -->
                <article class="single-post">
                    <div class="post-heading">
                        <h1 class="post-title">{{$agrianita->title_agrianita}}</h1> <!Jdul agrianita>
                        <ul class="entry-meta">
                            <li class="post-date"> <!tanggal agrianita>
                                {{$agrianita->created_at}}
                            </li>
                            <!-- <li class="post-author">sumber: Republika</li> -->
                        </ul>
                    </div>
                    <div class="post-content">
                        <figure class="entry-thumbnail slider-wrapper">
                            <img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$agrianita->image_agrianita}}" alt="#"> <!foto agrianita>
                        </figure>
                        <p><!Isi agrianita></p>
                        <p>{!!$agrianita->description_agrianita!!}</p>
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
                            <h3 class="content-title">Agrianita Lainnya</h3>
                        </div>
                        <ul class="post-list">
                            @foreach($agrianita2 as $a2)    
                                <li>
                                    <a href="{{ url('/agrianita-lengkap/'.$a2->id) }}">
                                        <h4>{{$a2->title_agrianita}}</h4>
                                    </a>
                                    <div class="entry-meta">
                                        <span class="meta-date">{{$a2->created_at}}</span>
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
            <!-- content end here -->
        </div>
    </div>
</div>

@endsection