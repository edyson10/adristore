<?php
if (isset($_GET["ubicacion"])) {
    if ($_GET["ubicacion"] == "Privado" || $_GET["ubicacion"] == "Administrador") { ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Adristore | Admin</title>

            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/fontawesome-free/css/all.min.css">
            <!-- icheck bootstrap -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="view/presentacion/admin/dist/css/adminlte.min.css">
            <!-- Font Google ==================================================================================-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
            <!--===============================================================================================-->
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Tempusdominus Bootstrap 4 -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            <!-- JQVMap -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/jqvmap/jqvmap.min.css">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
            <!-- Daterange picker -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/daterangepicker/daterangepicker.css">
            <!-- summernote -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/summernote/summernote-bs4.min.css">
        </head>
            <?php include "modulos/navegacion/" . $_GET["ubicacion"] . ".php"; ?> 
            <!-- jQuery -->
            <script src="view/presentacion/admin/plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="view/presentacion/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="view/presentacion/admin/dist/js/adminlte.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="view/presentacion/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- ChartJS -->
            <script src="view/presentacion/admin/plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="view/presentacion/admin/plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="view/presentacion/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="view/presentacion/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="view/presentacion/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="view/presentacion/admin/plugins/moment/moment.min.js"></script>
            <script src="view/presentacion/admin/plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="view/presentacion/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="view/presentacion/admin/plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="view/presentacion/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="vista/presentacion/admin/dist/js/demo.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="view/presentacion/admin/dist/js/pages/dashboard.js"></script>
        </body>
        </html>
    <?php } else { ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Adristore</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--===============================================================================================-->
            <link rel="icon" type="image/png" href="view/presentacion/ecommerce/images/icons/favicon.png" />
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/bootstrap/css/bootstrap.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/fonts/iconic/css/material-design-iconic-font.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/fonts/linearicons-v1.0.0/icon-font.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/animate/animate.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/css-hamburgers/hamburgers.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/animsition/css/animsition.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/select2/select2.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/daterangepicker/daterangepicker.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/slick/slick.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/MagnificPopup/magnific-popup.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/vendor/perfect-scrollbar/perfect-scrollbar.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/css/util.css">
            <link rel="stylesheet" type="text/css" href="view/presentacion/ecommerce/css/main.css">
            <!--===============================================================================================-->
            <!-- Font Google ==================================================================================-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
            <!--===============================================================================================-->
        </head>

        <body>
            <?php

            session_start();
            include_once 'modulos/Header.php';
            $controlador = new Controlador();
            $controlador->generarVista();
            include_once 'modulos/Footer.php';

            ?>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/animsition/js/animsition.min.js"></script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/bootstrap/js/popper.js"></script>
            <script src="view/presentacion/ecommerce/vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/select2/select2.min.js"></script>
            <script>
                $(".js-select2").each(function() {
                    $(this).select2({
                        minimumResultsForSearch: 20,
                        dropdownParent: $(this).next('.dropDownSelect2')
                    });
                })
            </script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/daterangepicker/moment.min.js"></script>
            <script src="view/presentacion/ecommerce/vendor/daterangepicker/daterangepicker.js"></script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/slick/slick.min.js"></script>
            <script src="view/presentacion/ecommerce/js/slick-custom.js"></script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/parallax100/parallax100.js"></script>
            <script>
                $('.parallax100').parallax100();
            </script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
            <script>
                $('.gallery-lb').each(function() { // the containers for all your galleries
                    $(this).magnificPopup({
                        delegate: 'a', // the selector for gallery item
                        type: 'image',
                        gallery: {
                            enabled: true
                        },
                        mainClass: 'mfp-fade'
                    });
                });
            </script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/isotope/isotope.pkgd.min.js"></script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/sweetalert/sweetalert.min.js"></script>
            <script>
                $('.js-addwish-b2').on('click', function(e) {
                    e.preventDefault();
                });

                $('.js-addwish-b2').each(function() {
                    var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
                    $(this).on('click', function() {
                        swal(nameProduct, "is added to wishlist !", "success");

                        $(this).addClass('js-addedwish-b2');
                        $(this).off('click');
                    });
                });

                $('.js-addwish-detail').each(function() {
                    var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

                    $(this).on('click', function() {
                        swal(nameProduct, "is added to wishlist !", "success");

                        $(this).addClass('js-addedwish-detail');
                        $(this).off('click');
                    });
                });

                /*---------------------------------------------*/

                $('.js-addcart-detail').each(function() {
                    var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
                    $(this).on('click', function() {
                        swal(nameProduct, "is added to cart !", "success");
                    });
                });
            </script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script>
                $('.js-pscroll').each(function() {
                    $(this).css('position', 'relative');
                    $(this).css('overflow', 'hidden');
                    var ps = new PerfectScrollbar(this, {
                        wheelSpeed: 1,
                        scrollingThreshold: 1000,
                        wheelPropagation: false,
                    });

                    $(window).on('resize', function() {
                        ps.update();
                    })
                });
            </script>
            <!--===============================================================================================-->
            <script src="view/presentacion/ecommerce/js/main.js"></script>
            <script src="view/presentacion/ecommerce/js/alertas.js"></script>
            <script src="view/presentacion/ecommerce/js/administrador.js"></script>
        </body>
        </html>
<?php 
    }
} else  {
    header('Location: Inicio');
}?>