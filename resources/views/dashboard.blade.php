<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Black Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{asset('/dashboard/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{asset('/dashboard/assets/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('/dashboard/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper">
    <div class="sidebar">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                    E-V
                </a>
                <a href="javascript:void(0)" class="simple-text logo-normal">
                  E-Voting
                </a>
            </div>
            <ul class="nav">
                <li class="active ">
                    <a href="/admin/dashboard">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="./icons.html">--}}
{{--                        <i class="tim-icons icon-atom"></i>--}}
{{--                        <p>Icons</p>--}}
{{--                    </a>--}}
{{--                </li>--}}

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle d-inline">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="/admin/dashboard">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto">

                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

                                    <h3>Profile</h3>

                                <b class="caret d-none d-lg-block d-xl-block"></b>
                                <p class="d-lg-none">
                                    Log out
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-navbar">

                                <li class="nav-link"><a href="/" class="nav-item dropdown-item">Log out</a></li>
                            </ul>
                        </li>
                        <li class="separator d-lg-none"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->
        <div class="content">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-category">Total Pemilih</h5>
                            <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> {{count($user)}}</h3>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-category">Total Yang Sudah Memilih</h5>
                            <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> {{count($vote)}}</h3>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-category">Total Kandidat</h5>
                            <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> {{count($kandidat)}}</h3>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card card-tasks">
                        <div class="card-header ">
                            <h6 class="title d-inline">Hasil Quick Count Sementara</h6>
                            <p class="card-category d-inline">today</p>

                        </div>
                        <div class="card-body ">
                            <div id="chartContainer" style="height: 300px; width: 100%; margin-top: 50px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title"> Pemilih yang belum memilih</h4>
                        </div>
                        <div class="card-body">
                           <h1>{{(count($user) - count($vote))}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <table class="table">
                        <p>Daftar User</p>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NIK</th>
                                <th>No.HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $users)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->NIK }}</td>
                                <td>{{ $users->no_hp }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6 col-md-12">
                    <table class="table">
                        <p>Daftar Kandidat</p>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NIK</th>
                                <th>No.HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kandidat as $kandidats)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kandidats->nama }}</td>
                                <td>{{ $kandidats->email }}</td>
                                <td>{{ $kandidats->tanggal_lahir }}</td>
                                <td>{{ $kandidats->alamat }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="footer">
        </footer>
    </div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-primary active" data-color="primary"></span>
                        <span class="badge filter badge-info" data-color="blue"></span>
                        <span class="badge filter badge-success" data-color="green"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line text-center color-change">
                <span class="color-label">LIGHT MODE</span>
                <span class="badge light-badge mr-2"></span>
                <span class="badge dark-badge ml-2"></span>
                <span class="color-label">DARK MODE</span>
            </li>

        </ul>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('/dashboard/assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('/dashboard/assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('/dashboard/assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('/dashboard/assets/js/black-dashboard.min.js?v=1.0.0')}}"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('/dashboard/assets/demo/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data', new_color);
                }

                if ($main_panel.length != 0) {
                    $main_panel.attr('data', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    blackDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (white_color == true) {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }


            });

            $('.light-badge').click(function() {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
                $('body').removeClass('white-content');
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
    window.TrackJS &&
    TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
    });
</script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    var accounts = [];
    var hasil = [];
    var i = 0;

    @foreach($kandidat as $t)
        accounts[i] = "{{$t->id}}. Total Suara : ";
    hasil[i] = "{{count($t->voteuser)}}";
    i++;

    @endforeach
    console.log(accounts.length);




    window.onload = function() {
        var z = 0;

        var test = "{y: 1, label: `kandidat 1 : `},{y: 2, label: `kandidat 2 : `}";


        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Quick Count"
            },
            data: [{
                type: "pie",
                startAngle: 120,
                indexLabel: "{label} {y}",
                dataPoints: [

                        @for ($i = 0; $i < count($kandidat); $i++)
                    {y: hasil[{{$i}}], label: "ID kandidat No : " + accounts[{{$i}}]} ,
                    @endfor


                ]
            }]
        });

        chart.render();

    }
</script>
</body>

</html>
