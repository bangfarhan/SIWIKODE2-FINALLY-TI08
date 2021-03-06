<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIWIKODE</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script
        src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo_siwikode.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/logo_siwikode.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--ico Fonts-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- waves css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/Waves/waves.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/color/color-1.min.css" id="color" />

</head>

<body>
    <section class="login common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block bg-white">
                        <form class="md-float-material" method="POST" action="<?= site_url('Register/proses_register') ?>">
                            <div class="text-center">
                                <img src="<?php echo base_url(); ?>assets/images/logo_siwikode.png" style="width: 100px;" alt="logo">
                            </div>
                            <h3 class="text-center txt-primary">Create account
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="text" name="nama" class="md-form-control" required="">
                                        <label>Full Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="input-wrapper">
                                <label class="md-form-control ">Jenis Kelamin</label>
                            </div>
                            <div class="input-wrapper">
                                <select name="jk" id="" class="form-control">
                                    <option value="Laki-laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="md-input-wrapper">
                                <input type="text" name="username" class="md-form-control" required="required">
                                <label>Username</label>
                            </div>
                            <div class="md-input-wrapper">
                                <input type="password" name="password" class="md-form-control" required="required">
                                <label>Password</label>
                            </div>


                            <div class="col-xs-10 offset-xs-1">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">Sign up
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <span class="text-muted">Already have an account?</span>
                                    <a href="<?= site_url('Login') ?>" class="f-w-600 p-l-5">
                                        Sign In Here</a>

                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- end of login-card -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row-->
        </div>
        <!-- end of container-fluid -->
    </section>

    <script src="<?php echo base_url(); ?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- waves effects.js -->
    <script src="<?php echo base_url(); ?>assets/plugins/Waves/waves.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/elements.js"></script>

</body>

</html>