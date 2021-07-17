<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        div.dt-buttons {
            position: relative;
            float: left;
            margin-top: 3px;
        }

        button.dt-button {
            background-color: white !important;
            border-radius: 3px;
            color: #1266F1;
            border: 1px solid #e0e0e0;
        }

        button.dt-button.active {
            position: relative;
            float: left;
            background-color: #1266F1 !important;
            color: white;
        }

        .swal2-popup {
            font-size: 1.6rem !important;
        }

        @media screen and (min-width: 800px) {
            .form-inline {
                margin-right: 20px;
                margin-bottom: -60px;
                float: right;
            }

            .spn {
                margin-left: -20px;
                font-size: 20px;
            }

            .d1 {
                margin-right: 21px;
            }
        }

        @media only screen and (max-device-width: 480px) {
            .form-inline {
                margin: auto;
                width: 45%;
                text-align: center;
                margin-bottom: 5px;
            }

            .spn {
                font-size: 10px;
            }

            .d1 {
                margin-bottom: -20px;
            }

            .d2 {
                margin-top: 0px;
                margin-bottom: -14px;
            }

        }
    </style>
    <title>Siwikode</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo_siwikode.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/logo_siwikode.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">
    <link href="<?php echo base_url(); ?>assets/css/svg-weather.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <style>
        .sidebar-menu>li.active>a {
            background: #2196F3 !important;
        }

        .treeview-menu>li.active>a {
            background: #dedede !important;
        }

        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }

        .carousel-indicators li {
            border-color: #f4511e;
        }

        .carousel-indicators li.active {
            background-color: #f4511e;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }
    </style>

</head>
<?php $uri1 = $this->uri->segment(1) ?>
<?php $uri2 = $this->uri->segment(2) ?>
<?php $status = $this->session->userdata('status') ?>
<?php $id_status = $this->session->userdata('id_status') ?>

<body class="sidebar-mini fixed">

    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print bg-primary">
            <a href="#" class="logo"><img class="img-fluid able-logo" src="<?php echo base_url(); ?>assets/images/logo_dash.png" alt="Theme-logo"></a>
            <nav class="navbar navbar-static-top bg-primary">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu  f-right">

                    <ul class="top-nav">
                        <!--Notification Menu-->


                        <!-- chat dropdown -->

                        <!-- window screen -->
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <?php if ($status != "login") {

                        ?>
                            <li class="pc-rheader-submenu">
                                <a href="<?= site_url('Login') ?>">
                                    <button class="btn btn-success">Login</button>
                                </a>
                            </li>
                        <?php } else { ?>
                            <!-- User Menu-->
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                    <span></span>
                                    <span><?php echo $nama_user; ?>
                                        <i class=" icofont icofont-simple-down"></i>
                                    </span>

                                </a>
                                <ul class="dropdown-menu settings-menu">

                                    <li>
                                        <a href="<?= site_url('User/profile/' . $this->session->userdata('id')) ?>">
                                            <i class="icon-user"></i>
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('Logout') ?>">
                                            <i class="icon-logout"></i>
                                            Logout</a>
                                    </li>

                                </ul>
                            <?php } ?>
                            </li>
                    </ul>

                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print ">
            <section class="sidebar" id="sidebar-scroll">
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">

                    <li class="treeview <?php echo $uri1 == 'User' && $uri2 == '' ? 'active' : null ?>">
                        <a class="waves-effect waves-dark" href="<?= site_url('User') ?>">
                            <i class="icon-speedometer"></i>
                            <span>
                                Beranda
                            </span>
                        </a>
                    </li>
                    <li class="treeview <?php echo $uri2 == 'kuliner' || $uri2 == 'rekreasi' ? 'active' : null ?>">
                        <a class="waves-effect waves-dark " href="<?= site_url('User/rekreasi') ?>">
                            <i class="icon-speedometer"></i>
                            <span>
                                Wisata
                            </span>
                        </a>
                    </li>
                    <li class="treeview <?php echo $uri2 == 'keranjang' ? 'active' : null ?>">
                        <a class="waves-effect waves-dark " <?= $status != 'login' ? 'data-toggle="modal" data-target="#exampleModal"' : null ?> href="<?= $status != 'login' ? '#' : site_url('User/keranjang/' . $this->session->userdata('id')) ?>">
                            <i class="fa fa-heart-o"></i>
                            <span>
                                Wishlist

                            </span>
                        </a>
                    </li>
                    <li class="treeview <?php echo $uri2 == 'profile' ? 'active' : null ?>">
                        <a class="waves-effect waves-dark " <?= $status != 'login' ? 'data-toggle="modal" data-target="#exampleModal"' : null ?> href="<?= $status != 'login' ? '#' : site_url('User/profile/' . $this->session->userdata('id')) ?>">
                            <i class="icon-user"></i>
                            <span>
                                Profile
                            </span>
                        </a>
                    </li>
                    <?php if ($id_status == 1) { ?>
                        <hr>
                        <li class="treeview <?php echo $uri1 == 'Admin' ? 'active' : null ?>">
                            <a class="waves-effect waves-dark " <?= $status != 'login' ? 'data-toggle="modal" data-target="#exampleModal"' : null ?> href="#">
                                <i class="fa fa-cogs"></i>
                                <span>
                                    Admin
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $uri1 == 'Admin' && $uri2 == null ? 'active' : null ?>"><a href="<?= site_url('Admin') ?>"><i class="fa <?php echo $uri1 == 'Admin' && $uri2 == null ? 'fa-circle' : 'fa-circle-o' ?>"></i>Daftar Wisata</a></li>
                                <li class="<?php echo $uri2 == 'user' ? 'active' : null ?>"><a href="<?= site_url('Admin/user') ?>"><i class="fa <?php echo $uri2 == 'user' ? 'fa-circle' : 'fa-circle-o' ?>"></i>User</a></li>
                            </ul>
                        </li><?php } ?>
                </ul>

            </section>
        </aside>
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Versi</b> 1.1
            </div>
            <strong>TI08 &copy; 2021 <a href="https://nurulfikri.ac.id">STT Nurul Fikri</a>.</strong>
        </footer>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="exampleModalLabel">Anda belum Login</h5>
                    </div>
                    <div class="modal-body">
                        Halaman gagal dimuat karena Anda belum Login
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="<?= site_url('Login') ?>">
                            <button class="btn btn-success">Login</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bower_components/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bower_components/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/tether/dist/js/tether.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/countdown/js/jquery.counterup.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/charts/echarts/js/echarts-all.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>

        <!-- custom js -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/dashboard.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/elements.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/menu.min.js"></script>
        <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
        <script>
            var flash = $('#flash').data('flash');
            if (flash == 'berhasil') {
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Produk berhasil ditambah ke laporan',
                    timer: 1500,
                    icon: 'success'
                })
            }
            if (flash == 'gagal') {
                Swal.fire({
                    title: 'gagal',
                    text: 'Stok tidak cukup',
                    icon: 'error',
                    timer: 1500
                })
            }
            if (flash == 'update') {
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Jumlah produk berhasil diupdate',
                    icon: 'success',
                    timer: 1500
                })
            }
            if (flash == 'hapus') {
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Data berhasil dihapus',
                    icon: 'success',
                    timer: 1500
                })
            }
            if (flash == 'simpan') {
                Swal.fire({
                    title: 'Berhasil',
                    text: 'Data berhasil disimpan',
                    icon: 'success',
                    timer: 1000
                })
            }

            $(document).on('click', '#hps', function(e) {
                e.preventDefault();
                var link = $(this).attr('href');
                Swal.fire({
                    title: 'Hapus Data',
                    text: 'Yakin ingin menghapus?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = link;
                    }
                })
            })
        </script>
        <script>
            var $window = $(window);
            var nav = $('.fixed-button');
            $window.scroll(function() {
                if ($window.scrollTop() >= 200) {
                    nav.addClass('active');
                } else {
                    nav.removeClass('active');
                }
            });
        </script>
        <script>
            $(function() {
                var u = $("#tab1").DataTable({
                    columnDefs: [{
                        searcable: !1,
                        orderable: !1,
                        targets: 0
                    }],
                    "scrollX": true,
                    order: [
                        ['1', "asc"]
                    ],
                    "paging": false

                });
                u.on('order.dt search.dt', function() {
                    u.column(0, {
                        search: 'applied',
                        order: 'applied'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
                var t = $("#tab2").DataTable({
                    columnDefs: [{
                        searcable: !1,
                        orderable: !1,
                        targets: 0
                    }],
                    order: [
                        ['1', "asc"]
                    ],
                    "paging": false

                });
                t.on('order.dt search.dt', function() {
                    t.column(0, {
                        search: 'applied',
                        order: 'applied'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            });
        </script>

</body>

</html>