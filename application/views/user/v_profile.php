<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Siwikode</title>
        <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries
        -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script
        src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <!-- Favicon icon -->
        <link
            rel="shortcut icon"
            href="<?php echo base_url(); ?>assets/images/logo_siwikode.png"
            type="image/x-icon">
        <link
            rel="icon"
            href="<?php echo base_url(); ?>assets/images/logo_siwikode.png"
            type="image/x-icon">

        <!-- Google font-->
        <link
            href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700"
            rel="stylesheet">

        <!-- themify -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url(); ?>assets/icon/themify-icons/themify-icons.css">

        <!-- iconfont -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url(); ?>assets/icon/icofont/css/icofont.css">

        <!-- simple line icon -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url(); ?>assets/icon/simple-line-icons/css/simple-line-icons.css">

        <!-- Required Fremwork -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">

        <!-- Chartlist chart css -->
        <link
            rel="stylesheet"
            href="<?php echo base_url(); ?>assets/plugins/chartist/dist/chartist.css"
            type="text/css"
            media="all">

        <!-- Weather css -->
        <link
            href="<?php echo base_url(); ?>assets/css/svg-weather.css"
            rel="stylesheet">

        <!-- Style.css -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url(); ?>assets/css/main.css">

        <!-- Responsive.css-->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url(); ?>assets/css/responsive.css">

    </head>

    <body class="sidebar-mini fixed">

        <div class="wrapper">
            <!-- Navbar-->
            <header class="main-header-top hidden-print bg-primary">
                <a href="index.html" class="logo"><img
                    class="img-fluid able-logo"
                    style="width: 50px;"
                    src="<?php echo base_url(); ?>assets/images/logo_siwikode.png"
                    alt="Theme-logo"></a>
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
                            <!-- User Menu-->
                            <li class="dropdown">
                                <a
                                    href="#!"
                                    data-toggle="dropdown"
                                    role="button"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    class="dropdown-toggle drop icon-circle drop-image">
                                    <span></span>
                                    <span><?= $nama_user; ?>
                                        <i class=" icofont icofont-simple-down"></i>
                                    </span>

                                </a>
                                <ul class="dropdown-menu settings-menu">
                                   
                                    <li>
                                        <a href="<?= site_url('User/profile') ?>">
                                            <i class="icon-user"></i>
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('Logout') ?>">
                                            <i class="icon-logout"></i>
                                            Logout</a>
                                    </li>

                                </ul>
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

                        <li class="treeview ">
                            <a class="waves-effect waves-dark" href="<?= site_url('User') ?>">
                                <i class="icon-speedometer"></i>
                                <span>
                                    Beranda
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a class=" waves-effect waves-dark" href="<?= site_url('User/keranjang') ?>">
                                <i class="icon-basket-loaded"></i>
                                <span>
                                    Keranjang
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a class="bg-primary  waves-effect waves-dark" href="<?= site_url('User/Profile') ?>">
                                <i class="icon-user"></i>
                                <span>
                                    Profile
                                </span>
                            </a>
                        </li> 
                        
                    </ul>
                </section>
            </aside>
            <!-- Sidebar chat start -->
            
            
            <!-- Sidebar chat end-->
            <div class="content-wrapper">
                <!-- Container-fluid starts -->
                <!-- Main content starts -->
                <div class="container-fluid">
                <div class="main-header" style="margin-top: 0px;">
                  <hr>
               </div>
               
               

                </div>
                <!-- Main content ends -->
                <!-- Container-fluid ends -->
            </div>
        </div>


        <!-- Required Jqurey -->
        <script src="<?php echo base_url(); ?>assets/plugins/Jquery/dist/jquery.min.js"></script>
        <script
            src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script
            src="<?php echo base_url(); ?>assets/plugins/tether/dist/js/tether.min.js"></script>

        <!-- Required Fremwork -->
        <script
            src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Scrollbar JS-->
        <script
            src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script
            src="<?php echo base_url(); ?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

        <!--classic JS-->
        <script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>

        <!-- notification -->
        <script
            src="<?php echo base_url(); ?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

        <!-- Sparkline charts -->
        <script
            src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

        <!-- Counter js -->
        <script
            src="<?php echo base_url(); ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script
            src="<?php echo base_url(); ?>assets/plugins/countdown/js/jquery.counterup.js"></script>

        <!-- Echart js -->
        <script
            src="<?php echo base_url(); ?>assets/plugins/charts/echarts/js/echarts-all.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>

        <!-- custom js -->
        <script
            type="text/javascript"
            src="<?php echo base_url(); ?>assets/js/main.min.js"></script>
        <script
            type="text/javascript"
            src="<?php echo base_url(); ?>assets/pages/dashboard.js"></script>
        <script
            type="text/javascript"
            src="<?php echo base_url(); ?>assets/pages/elements.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/menu.min.js"></script>
        <script>
            var $window = $(window);
            var nav = $('.fixed-button');
            $window.scroll(function () {
                if ($window.scrollTop() >= 200) {
                    nav.addClass('active');
                } else {
                    nav.removeClass('active');
                }
            });
        </script>

    </body>

</html>