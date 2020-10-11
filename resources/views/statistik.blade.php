@extends('layout_master')
@section('content')

    <div>
        <div class="container" style="margin: 50px;">

            <div>
                <div class="container statistic-container bg-info"  style="box-shadow: 0 8px 15px rgba(0, 0, 0, 0.08); border-radius: 20px;">
                    <h1 class=" text-center" style="color: #073C64;">Statistik</h1>
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
                                <p>Doktor</p>
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
                                <p>Mahasiswa Pascasarjana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div id="charts1" style="width:100%; height:400px;"></div>
            <br><br><br>
            <div id="charts2" style="width:100%; height:400px;"></div>
            <br><br><br>
            <div id="charts3" style="width:100%; height:400px;"></div>
            <br><br><br>
            <div id="charts4" style="width:100%; height:400px;"></div>
            <br><br><br>
            <div id="charts5" style="width:100%; height:400px;"></div>
        </div>
    </div>

@endsection

    