<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Login</title>

    <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/apple-touch-icon.png') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico') ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-extend.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/site.minfd53.css?v4.0.1') ?>">


    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/animsition/animsition.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/asscrollable/asScrollable.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/switchery/switchery.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/intro-js/introjs.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/slidepanel/slidePanel.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/flag-icon-css/flag-icon.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/waves/waves.minfd53.css?v4.0.1') ?>">

    <!-- Page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/examples/css/pages/login-v2.minfd53.css?v4.0.1') ?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/material-design/material-design.minfd53.css?v4.0.1') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/brand-icons/brand-icons.minfd53.css?v4.0.1') ?>">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700">

    <!-- Scripts -->
    <script src="<?php echo base_url('assets/vendor/breakpoints/breakpoints.minfd53.js?v4.0.1') ?>"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="animsition page-login-v2 layout-full page-dark">

    <!-- Page -->
    <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content">
            <div class="page-brand-info">
                <div class="brand">
                    <img class="brand-img" src="<?php echo base_url('assets/images/logo%402x.png') ?>" alt="...">
                    <h2 class="brand-text font-size-20">DINAS KESEHATAN KOTA PALEMBANG</h2>
                </div>
                <p class="font-size-20">Sistem Pendukung Keputusan Penentuan Lokasi Prioritas Pembinaan Kesehatan & Sanitasi.</p>
            </div>

            <div class="page-login-main" style="margin-top: -80px;">
                <div class="brand hidden-md-up">
                    <img class="brand-img" src="<?php echo base_url('assets/images/logo-colored%402x.png') ?>" alt="...">
                    <h3 class="brand-text font-size-40">Remark</h3>
                </div>
                <h3 class="font-size-24">Sign In</h3>

                <form method="post" action="<?php echo base_url('auth/login') ?>" autocomplete="off">
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="email" class="form-control empty" id="inputEmail" name="email">
                        <label class="floating-label" for="inputEmail">Email</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="password" class="form-control empty" id="inputPassword" name="password">
                        <label class="floating-label" for="inputPassword">Password</label>
                    </div>
                    <div class="form-group clearfix">
                        <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                            <input type="checkbox" id="remember" name="checkbox">
                            <label for="inputCheckbox">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>

                <footer class="page-copyright">
                    <p>© 2021. All Right Reserved.</p>
                </footer>
            </div>

        </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="<?php echo base_url('assets/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper-js/umd/popper.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/bootstrap.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/animsition/animsition.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/mousewheel/jquery.mousewheel.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/asscrollbar/jquery-asScrollbar.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/asscrollable/jquery-asScrollable.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/ashoverscroll/jquery-asHoverScroll.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/waves/waves.minfd53.js?v4.0.1') ?>"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url('assets/vendor/switchery/switchery.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/intro-js/intro.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/screenfull/screenfull.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/slidepanel/jquery-slidePanel.minfd53.js?v4.0.1') ?>"></script>

    <!-- Plugins For This Page -->
    <script src="<?php echo base_url('assets/vendor/jquery-placeholder/jquery.placeholder.minfd53.js?v4.0.1') ?>"></script>

    <!-- Scripts -->
    <script src="<?php echo base_url('assets/js/State.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Component.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Plugin.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Base.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Config.minfd53.js?v4.0.1') ?>"></script>

    <script src="<?php echo base_url('assets/js/Section/Menubar.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Section/GridMenu.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Section/Sidebar.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Section/PageAside.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Plugin/menu.minfd53.js?v4.0.1') ?>"></script>

    <!-- Config -->
    <script src="<?php echo base_url('assets/js/config/colors.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/config/tour.minfd53.js?v4.0.1') ?>"></script>

    <!-- Page -->

    <script src="<?php echo base_url('assets/js/Site.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Plugin/asscrollable.minfd53.js?v4.0.1') ?>"></script>

    <script src="<?php echo base_url('assets/js/Plugin/slidepanel.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Plugin/switchery.minfd53.js?v4.0.1') ?>"></script>

    <script src="<?php echo base_url('assets/js/Plugin/jquery-placeholder.minfd53.js?v4.0.1') ?>"></script>
    <script src="<?php echo base_url('assets/js/Plugin/material.minfd53.js?v4.0.1') ?>"></script>


    <script>
        (function(document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function() {
                Site.run();
            });
        })(document, window, jQuery);
    </script>


</body>

</html>