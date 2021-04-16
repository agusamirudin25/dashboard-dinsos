<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dinas Sosial</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Agus Amirudin" name="author" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo_karawang.png">

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/sweetalert2.css" rel="stylesheet" type="text/css">
    <style>
        .content-page {
            margin: 0 !important;
        }

        .content-page .content {
            margin-top: 1rem !important;
        }
    </style>
</head>

<body onload="startTime()">

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row m-b-20">
                        <div class="col-sm-12">
                            <div class="invoice-title">
                                <h4 class="float-right font-32"><strong id="jam"></strong></h4>
                                <h3 class="mt-0">
                                    <img src="<?= base_url() ?>assets/images/logo_karawang.png" alt="logo" height="100"> DINAS SOSIAL KABUPATEN KARAWANG
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-calendar float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h3 class="text-uppercase mb-3">PKH</h3>
                                        <h4 class="mb-4"><?= $pkh->total ?> Orang</h4>
                                        <span class="badge badge-light float-right"> <?= tgl_indo(date('Y-m-d', strtotime($pkh->created_at))) . ' ' . date('h:i:s', strtotime($pkh->created_at)) ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-factory float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h3 class="text-uppercase mb-3">BPNT</h3>
                                        <h4 class="mb-4"><?= $bpnt->total ?> Orang</h4>
                                        <span class="badge badge-light float-right"> <?= tgl_indo(date('Y-m-d', strtotime($bpnt->created_at))) . ' ' . date('h:i:s', strtotime($bpnt->created_at)) ?> </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-monitor float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h3 class="text-uppercase mb-3">LKSA</h3>
                                        <h4 class="mb-4"><?= $lksa->total ?> Orang</h4>
                                        <span class="badge badge-light float-right"> <?= tgl_indo(date('Y-m-d', strtotime($lksa->created_at))) . ' ' . date('h:i:s', strtotime($lksa->created_at)) ?> </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-home-variant float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h3 class="text-uppercase mb-3">PBI</h3>
                                        <h4 class="mb-4"><?= $pbi->total ?> Orang</h4>
                                        <span class="badge badge-light float-right"> <?= tgl_indo(date('Y-m-d', strtotime($pbi->created_at))) . ' ' . date('h:i:s', strtotime($pbi->created_at)) ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-home-variant float-right"></i>
                                    </div>
                                    <div class="text-white">
                                        <h3 class="text-uppercase mb-3">DTKS</h3>
                                        <h4 class="mb-4"><?= $dtks->total ?> Orang</h4>
                                        <span class="badge badge-light float-right"> <?= tgl_indo(date('Y-m-d', strtotime($dtks->created_at))) . ' ' . date('h:i:s', strtotime($dtks->created_at)) ?> </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">JENIS KATEGORI</h4>
                                    <div id="chart-kecamatan" class="dashboard-charts morris-charts"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->

            </div> <!-- content -->

            <footer class="footer">
                © <?= date('Y') ?> - <span class="d-none d-sm-inline-block"> Created with <i class="mdi mdi-heart text-danger"></i> by Amirudin</span>.
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url() ?>assets/js/waves.min.js"></script>


    <script>
        var jenis = <?= $jenis ?>;
        var total = <?= $total ?>;
    </script>

    <script src="<?= base_url() ?>assets/js/apexchart.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.js?version=<?= uniqid() ?>"></script>

    <script>
        $(document).ready(function() {
            toggleFullScreen()
            var options_kecamatan = {
                series: [{
                    data: total
                }],
                chart: {
                    height: 480,
                    id: 'chart1',
                    type: 'bar',
                    events: {
                        click: function(chart, w, e) {
                            // console.log(chart, w, e)
                        }
                    }
                },
                plotOptions: {
                    bar: {
                        borderRadius: 5,
                        columnWidth: '50%',
                        distributed: true,
                    }
                },
                dataLabels: {
                    enabled: true
                },
                legend: {
                    show: false
                },
                theme: {
                    mode: 'light',
                    palette: 'palette2',
                    monochrome: {
                        enabled: false,
                        color: '#255aee',
                        shadeTo: 'light',
                        shadeIntensity: 0.65
                    },
                },
                title: {
                    text: 'GRAFIK JENIS KATEGORI ',
                    align: 'center',
                    margin: 10,
                    offsetX: 0,
                    offsetY: 0,
                    floating: false,
                    style: {
                        fontSize: '20px',
                        fontWeight: 'bold',
                        fontFamily: 'Helvetica, Arial, sans-serif',
                        color: '#008FFB'
                    },
                },
                xaxis: {
                    categories: jenis,
                    labels: {
                        style: {
                            fontSize: '10px'
                        }
                    }
                }
            };

            var chart_kecamatan = new ApexCharts(document.querySelector("#chart-kecamatan"), options_kecamatan);
            chart_kecamatan.render();

        });

        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            var day = today.getDay()
            switch (day) {
                case 0:
                    day = "Minggu";
                    break;
                case 1:
                    day = "Senin";
                    break;
                case 2:
                    day = "Selasa";
                    break;
                case 3:
                    day = "Rabu";
                    break;
                case 4:
                    day = "Kamis";
                    break;
                case 5:
                    day = "Jum'at";
                    break;
                case 6:
                    day = "Sabtu";
                    break;
            }
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('jam').innerHTML =
                day + ", " + h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }

        function toggleFullScreen() {
            $(window).height();
            document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT), $(".full-screen").toggleClass("icon-maximize"), $(".full-screen").toggleClass("icon-minimize")
        }
    </script>
</body>

</html>