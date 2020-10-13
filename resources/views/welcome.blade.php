@extends('layout_master')
@section('content')

    <div id="body">
        <div class="homepage homepage-id">

            <section id="banner">
                <div class="">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset('frontend/photo/banner/home6')}}.png" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/2.jpg')}}" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/3.jpg')}}" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/4.jpg')}}" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/5.jpg')}}" alt="#">
                            </div>
                            <div class="item ">
                                <img src="{{asset('frontend/photo/banner/6.jpg')}}" alt="#">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>

            <section id="berita" class="section-page news-event">
                <div class="container ">
                    <div class="section-title inline-title">
                        <h2>Berita Terkini</h2>
                    </div>
                    <article class="post post-block ">
                        <div class="post-img ">
                            <a href="# "><img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$berita_terkini->image}}"></a> <!photo>
                        </div>
                        <div class="post-content ">
                            <div class="post-title ">
                                <span class="post-date ">{{$berita_terkini->created_at}} </span> <!tanggal post>
                                <h3><a href="{{ url('/berita-lengkap/'.$berita_terkini->id) }}">{{$berita_terkini->title}} </a></h3> <!Judul Berita>
                            </div>
                            <div class="entry-content"> <!isi artikel>
                                <p>{{$berita_terkini->description}}</p> 
                                {{-- <p>&ldquo;Semua negara berlomba dalam melakukan riset dalam upaya mengendalikan meluasnya wabah Covid-19. Mulai dari melakukan penelitian untuk vaksin, obat hingga bagaimana upaya manusia agar tetap fit menjaga stamina
                                tubuh. [...]</p> --}}
                            </div>
                            <a class="btn btn-more " href="{{ url('/berita-lengkap/'.$berita_terkini->id) }}">Baca selengkapnya</a>
                        </div>
                    </article>
                    <div class="row ">

                        @foreach($berita_terkini2 as $b2)

                        <div class="col-md-4 col-sm-4 ">
                            <article class="post post-inline ">
                                <div class="post-img ">
                                    <a href="# "><img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$b2->image}}" ></a>
                                </div>
                                <div class="post-content ">
                                    <div class="post-title ">
                                        <h3><a href="{{ url('/berita-lengkap/'.$b2->id) }}">{{$b2->title}}</a></h3>
                                    </div>
                                    <div class="entry-content ">
                                        <a class="btn btn-more " href="{{ url('/berita-lengkap/'.$b2->id) }}">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        @endforeach
                        
                        {{-- <div class="col-md-4 col-sm-4 ">
                            <article class="post post-inline ">
                                <div class="post-img ">
                                    <a href="berita-4.html"><img src="{{asset('frontend/photo/berita/berita-4.jpg')}}" alt="... "></a>
                                </div>
                                <div class="post-content ">
                                    <div class="post-title ">
                                        <h3><a href="# ">IPB Kenalkan Inovasi Alat Penangkap Ikan bagi Nelayan</a></h3>
                                    </div>
                                    <div class="entry-content ">
                                        <a class="btn btn-more" href="berita-4.html">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-4 ">
                            <article class="post post-inline ">
                                <div class="post-img ">
                                    <a href="berita-3.html"><img src="{{asset('frontend/photo/berita/berita-5.jpg')}}" alt="... "></a>
                                </div>
                                <div class="post-content ">
                                    <div class="post-title ">
                                        <h3><a href="# ">Ir Hikmat Rusdi Terpilih sebagai Ketua Himpunan Alumni FPIK IPB 2020-2023</a></h3>
                                    </div>
                                    <div class="entry-content ">

                                        <a class="btn btn-more " href="berita-3.html">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                        </div> --}}
                    </div>
                    <div class="text-center btn-box no-border ">
                        <a href="{{ url('/berita') }}" class="btn btn-more ">Berita Selengkapnya</a>
                    </div>
                </div>
            </section>

            <section id="event-info" class="section-page bg-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 sidebar-right">
                            <article class="single-post">
                                <div class="section-title inline-title">
                                    <h2>Event</h2>
                                </div>
                                <div>
                                    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
                                        <!--Indicators-->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                                            <!-- <li data-target="#carouselExampleFade" data-slide-to="3"></li> -->
                                        </ol>
                                        <!--/.Indicators-->
                                        <div class="carousel-inner"> <!photo atau video event>
                                        
                                            <div class="item active">

                                                <?php 
                                                    $extension = substr($event->content, strrpos($event->content, ".") + 1);
                                                    
                                                    if($extension == 'png' || $extension == 'jpeg' || $extension == 'jpg'){
                                                ?>

                                                    <img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$event->content}}" class="carousel-fill">

                                                <?php }else{ ?>

                                                    <video muted autoplay loop class="carousel-fill">
                                                        <source src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$event->content}}" type="video/mp4">
                                                    </video>

                                                <?php } ?>
                                            </div>

                                            @foreach($event2 as $e2)
                                                
                                                <div class=" item">

                                                    <?php 
                                                        $extension = substr($e2->content, strrpos($e2->content, ".") + 1);
                                                        
                                                        if($extension == 'png' || $extension == 'jpeg' || $extension == 'jpg'){
                                                    ?>

                                                        <img src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$e2->content}}" class="carousel-fill">

                                                    <?php }else{ ?>

                                                        <video muted autoplay loop class="carousel-fill">
                                                            <source src="{{env('APP_URL').'/fpik_web/storage/app/public/'.$e2->content}}" type="video/mp4">
                                                        </video>

                                                    <?php } ?>

                                                </div>

                                            @endforeach

                                        </div>
                                        <a class="left carousel-control" href="#carouselExampleFade" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carouselExampleFade" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <!-- / Content -->
                        </div>
                        <div id="sidebar" class="col-md-3 ">
                            <div class="widget widget_recent_entries">
                                <div class="widget-header">
                                    <h3 class="widget-title">Info Terbaru</h3>
                                </div>

                                <ul class="post-list">

                                    @foreach($info as $i)

                                        <li>
                                            <a href="{{$i->link_info}}">{{$i->title_info}}</a> <!Judul dan link info>
                                            <div class="entry-meta">
                                                <span class="meta-date">{{$i->created_at}}</span> <!Tanggal Info>
                                            </div>
                                        </li>

                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div id="loader"><img src="{{asset('frontend/assets/images/loader.gif')}}"></div>
                        <!-- content end here -->
                    </div>
                </div>
            </section>

            <section id="agenda" class="section-page schome-event">
                <div class="container">
                    <div class="section-title ">
                        <h3>Agenda Terbaru</h3>
                    </div>
                    <div class="event-slider owl-carousel owl-theme">

                        @foreach($agenda as $a)

                            <div class=" event-slider__box col-md-6 owl-item">
                                <h4 class="event-date">
                                    <span>{{$a->date}}</span><span>{{$a->month}}</span><span>{{$a->year}}</span> <!Tanggal Agenda>
                                </h4>
                                <h4 class=" event-title">
                                    <a href="http://esc-embrio.ipb.ac.id">{{$a->title_agenda}}</a> <!Judul dan Link Agenda>
                                </h4>
                                <div class="event-info"> <!Isi Agenda>
                                    <p>{{$a->desc_agenda}}</p> 
                                </div>
                            </div>

                        @endforeach

                        {{-- <div class=" event-slider__box col-md-6 owl-item ">
                            <h4 class=" event-date ">
                                <span>12</span><span>09</span><span>2020</span>
                            </h4>
                            <h4 class=" event-title ">
                                <a href="# ">Munas dan Ruaya FPIK IPB</a>
                            </h4>
                            <div class=" event-info ">
                                <p>Saatnya kembali pulang alumni FPIK IPB . Munas dan Ruaya akan dilaksanakan via Zoom Cloud Meeting pada hari sabtu 12
                                September 2020.</p>
                            </div>
                        </div>
                        <div class=" event-slider__box col-md-6 owl-item ">
                            <h4 class=" event-date ">
                                <span>14</span><span>09</span><span>2020</span>
                            </h4>
                            <h4 class=" event-title ">
                                <a href="http://esc-embrio.ipb.ac.id">5th EMBRIO International Summer Course (EISC)</a>
                            </h4>
                            <div class=" event-info ">
                                <p>Enhanching Marine Biodiversity Research in Indonesia (EMBRIO) IPB University proudly present “The 5th EMBRIO
                                International Summer School” with theme “Tropical Aquatic Biodiversity”. This summer course will be held in Zoom Cloud
                                Meeting, on September 14th – October 5th, 2020.</p>
                            </div>
                        </div> --}}
                    </div>
                    <div class="text-center btn-box no-border " style="margin: 20px;">
                        <a href="{{ url('/agenda') }}" class="btn btn-more ">Agenda Lainnya</a>
                    </div>
                </div>
            </section>

            <section id="statistik" class="section-page schome-event">
                <div class="container bg-info" style="box-shadow: 0 8px 15px rgba(0, 0, 0, 0.08); border-radius: 20px;">
                    <div class="section-title m-5" style="border-bottom: 4px solid #FDCB2C;">
                        <h3>Statistik</h3>
                    </div>
                    <div class="row">
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-building-o"></i>
                                <span class="counter">5</span>
                                <p>Departemen</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-group"></i>
                                <span class="counter">144</span>
                                <p>Tenaga Pendidik</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-graduation-cap"></i>
                                <span class="counter">20</span>
                                <p>Profesor</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-user-plus"></i>
                                <span class="counter">100</span>
                                <p>Doctor</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-users"></i>
                                <span class="counter">2250</span>
                                <p>Mahasiswa Sarjana</p>
                            </div>
                        </div>
                        <div class="four col-md-4">
                            <div class="counter-box">
                                <i class="fa fa-user-plus"></i>
                                <span class="counter">920</span>
                                <p>Mahasiswa Pasca</p>
                            </div>
                        </div>
                        <div class="text-center btn-box no-border " style="margin: 40px;">
                            <a href="{{url('/statistik')}}" class="btn btn-more ">Data Lainnya</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gallery" class="section-page bg-info">
                <div class="container gallery-container">
                    <h1 class=" m-5" style="border-bottom: 3px solid #FDCB2C;">Galeri</h1>
                    <!-- <p class="page-description text-center">Sebagian dokumentasi dari FPIK IPB</p> -->
                    <div class="tz-gallery">
                        <div class="row">
                            
                            <div class="col-sm-12 col-md-4"> <!Update Foto galery>
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo4.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo4.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4   ">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo3.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo3.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4   ">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo6.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo6.jpg')}}" >
                                </a>
                            </div>
                            
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo2.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo2.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo1.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo1.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo9.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo9.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo8.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo8.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo7.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo7.jpg')}}">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="{{asset('frontend/photo/gallery/photo5.jpg')}}">
                                    <img src="{{asset('frontend/photo/gallery/photo5.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="partner" class="section-page">
                <div class="container">
                    <div class="section-title">
                        <h3>Internasional Partner</h3>
                    </div>
                    <div class="brands">
                        <div class="brands_slider_container">
                            <div class="owl-carousel owl-theme brands_slider">
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-UNDP_logo.svg.png')}}" alt=" "> <!Update Logo instansi partner>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-University_of_Rhode_Island_seal.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-University_of_The_Philippines_seal.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-WashU_St._Louis_seal.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/1200px-Xiamen_University_logo.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/DAI_HOC_NHA_TRANG.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/download.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/FAO_logo.svg.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/KAGOSHIMA_UNIVERSITY.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/kisspng-kasetsart-university-kamphaengsaen-campus-logo-pub-national-philippines-narra-tree-5b46450e398cb0.5579652915313318542357.png')}}"
                                            alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/logo_0.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/MABIK.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/ocean-university-of-china-bandung-institute-of-technology-school-png-favpng-e4t3MLjy3yvs1TmYdXRt2Cr58.png')}}"
                                            alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/RYUKTYU.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/UniversityOfTokyo_logo_0.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/victoria.png')}}" alt=" ">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item">
                                        <img src="{{asset('frontend/photo/Logo-Partner/zmt-logo.png')}}" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </div>
    
@endsection

    