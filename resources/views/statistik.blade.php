@extends('layout_master')

@section('title')
    Statistik Fakultas Perikanan dan Ilmu Kelautan IPB
@endsection

@section('content')

    <!-- buat charts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

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
    
    <!-- Asynchronous CSS & Font -->
    <noscript id="deferred-styles">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Lora:400,400i,700|Montserrat:400,700|Open+Sans:400,400i,700,700i">
        <link rel="stylesheet" type="text/css" href="css/style-2.css">
    </noscript>
    <script type="text/javascript">
        // CSS async
        var loadDeferredStyles = function() {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.head.appendChild(replacement)
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
            window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        if (raf) raf(function() {
            window.setTimeout(loadDeferredStyles, 0);
        });
        else window.addEventListener('load', loadDeferredStyles);
    </script>

    <!-- counter -->
    <script>
        $(document).ready(function () {

            $('.counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>
    <!-- buat charts 1-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts1', {
                chart: {
                    type: 'column'

                },
                title: {
                    text: 'Publications'
                },
                subtitle: {
                    text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                },
                xAxis: {
                    categories: ['Faperta', 'FKH', 'FPIK', 'FAPET', 'FAHUTAN', 'FATETA', 'FMIPA', 'FEM', 'FEMA', 'SB', 'SV', 'SPS', 'LPPM']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: 'Scopus',
                    data: [230, 110, 285, 135, 210, 260, 690, 30, 40, 25, 20, 110, 60]
                }]
            });
        });
    </script>

    <!-- buat charts2 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts2', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Publikasi di Scopus Fakultas IPB 2015-2018'
                },
                xAxis: {
                    categories: ['SV', 'PASCA', 'FAPERTA', 'FKH', 'FPIK', 'FAPET', 'FAHUTAN', 'FATETA', 'FMIPA', 'FEM', 'FEMA', 'SB', 'IPB']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: '2018',
                    data: [2, 20, 57, 20, 55, 19, 60, 85, 109, 6, 8, 5, 8]
                }, {
                    name: '2017',
                    data: [6, 57, 92, 44, 94, 41, 89, 83, 282, 15, 21, 5, 23]
                }, {
                    name: '2016',
                    data: [2, 28, 73, 40, 83, 56, 48, 77, 217, 12, 19, 3, 32]
                }, {
                    name: '2015',
                    data: [2, 19, 27, 13, 47, 25, 17, 26, 86, 8, 14, 1, 6]
                }]
            });
        });
    </script>

    <!-- buat chart3 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts3', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Number of Innovation 2008-2017'
                },
                // subtitle: {
                //     text: 'Number of Innovation 2008-2017'
                // },
                xAxis: {
                    categories: ['2008/100', '2009/101', '2010/102', '2011/103', '2012/104', '2013/105', '2014/106', '2015/107', '2016/108', '2017/109']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: 'Inovasi',
                    data: [6, 6, 7, 3, 14, 8, 3, 6, 9, 16]
                }]
            });
        });
    </script>

    <!-- buat chart4 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts4', {
                chart: {
                    type: 'column'
                },
                colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
                title: {
                    text: 'The Largest Contributor of IPB innovation 2017(BIC 2018)'
                },
                xAxis: {
                    categories: ['Faperta', 'FKH', 'FPIK', 'FAPET', 'FAHUTAN', 'FATETA', 'FMIPA', 'FEM', 'FEMA', 'SB', 'SV']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: 'Inovasi',
                    data: [5, 5, 16, 6, 1, 8, 4, 2, 1, 2]
                }]
            });
        });
    </script>

    <!-- buat chart5 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myChart = Highcharts.chart('charts5', {
                chart: {
                    type: 'column'
                },
                colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
                title: {
                    text: 'The Largest Contributor of IPB innovation 2018(BIC 2019)'
                },
                xAxis: {
                    categories: ['Faperta', 'FKH', 'FPIK', 'FAPET', 'FAHUTAN', 'FATETA', 'FMIPA', 'FEMA']
                },
                // yAxis: {
                //     title: {
                //         text: 'The 2nd Largest Contribution of International Scopus Indexed Papers 2018'
                //     }
                // },
                series: [{
                    name: 'Inovasi',
                    data: [2, 1, 18, 3, 2, 7, 8, 3]
                }]
            });
        });
    </script>

@endsection

    