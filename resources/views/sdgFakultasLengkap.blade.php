@extends('layout_master')
@section('content')

    <div id="body">
        <div class="container">
            <div class="row">
                <!-- Content Area col-md-push-1 -->
                <div id="content" class="col-md-8 col-md-push-1 sidebar-right">
                    <ul class="breadcrumbs breadcrumb">
                        <li><a href="index.html">Beranda</a><span class="divider"></span></li>
                        <li><a href="sdg14-fakultas.html">SDG-Fakultas</a><span class="divider"></span>
                        </li>
                        <li class="active">{{$sdg->title_sdg}}</li> <!Jdul sdg>
                    </ul>
                    <!-- Content Area -->
                    <article class="single-post">
                        <div class="post-heading">
                            <h1 class="post-title">{{$sdg->title_sdg}}</h1> <!Jdul sdg>
                            <ul class="entry-meta">
                                <li class="post-date"> <!tanggal sdg>
                                    {{$sdg->created_at}} 
                                </li>
                                <!-- <li class="post-author">sumber: Republika</li> -->
                            </ul>
                        </div>
                        <div class="post-content">
                            <figure class="entry-thumbnail slider-wrapper">
                                <img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$sdg->image_sdg}}" alt="#"> <!foto sdg>
                            </figure>
                            <p><!Isi sdg></p>
                            <p>{{$sdg->description_sdg}}
                            </p>
                        </div>
                        <!-- Share -->
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
                        <!-- / Share -->
                        <!-- Other news -->
                        <div class="related-post">
                            <div class="content-header">
                                <h3 class="content-title">SDG Lainnya</h3>
                            </div>
                            <ul class="post-list">

                                @foreach($sdg2 as $s)

                                    <li>
                                        <a href="{{url('/sdg14-lengkap/'.$s->id)}}">
                                            <h4>{{$s->title_sdg}}
                                            </h4>
                                        </a>
                                        <div class="entry-meta">
                                            <span class="meta-date">{{$s->created_at}}</span>
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
                </div>

            <div id="sidebar" class="col-md-3 ">
                <div class="widget widget_recent_entries">
                    <div class="widget-header">
                        <h3 class="widget-title">SDG14 activities</h3>
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
