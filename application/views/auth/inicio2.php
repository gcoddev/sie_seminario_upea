<!DOCTYPE HTML>
<html lang="en">


<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>sierudss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="seguro social UPEA" content="index, follow" />
    <meta name="seguro social UPEA" content="seguro social UPEA" />
    <meta name="description" content="seguro social UPEA">
    <meta name="keywords" content="seguro social UPEA">
    <meta name="author" content="fily_boy308">
    <meta name="description" content="seguro social UPEA" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>asset/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>asset/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>asset/css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="<?= base_url() ?>asset/images/favicon.ico">
</head>

<body>
    <!-- loader   -->
    <div class="loader">
        <div class="loading-text-container "><span class="loading-text">Seguro Social<strong>U.P.E.A</strong></span> <span class="loader_count">0</span></div>
        <div class="loader-anim"></div>
        <div class="loader-anim2 color-bg"></div>
    </div>
    <!-- loader  end-->
    <!-- main start  -->
    <div id="main">
        <!-- header-->
        <header class="main-header">
            <!-- logo  -->
            <a href="#" class="ajax logo-holder"><img src="<?= base_url() ?>asset/images/upea02.png" alt=""></a>
            <!-- logo end -->

            <!-- nav-button-wrap-->
            <div class="nav-button but-hol ajax ">

                <img src="<?= base_url() ?>asset/images/saltando.gif" width="150" alt="">
                <div class="menu-button-text">LOGIN</div>

            </div>
            <!-- nav-button-wrap end-->

            <!-- header-contacts-->
            <div class="header-contacts">
                <ul>
                    <li><span>01. Visitas </span> <a href="#"><?php echo " " . ($this->Modelo_administrador->RetornaUnRegistroDeUnaTablaC("visitas", '1', "1")) . ""; ?></a></li>
                    <li><span>02. Visitas Diarias</span> <a href="#"><?php echo " " . ($this->Modelo_administrador->RetornaUnRegistroDeUnaTablaC("visitas", '1', "1", "and fecha_visita >= CURDATE() ")) . ""; ?></a></li>
                </ul>
                <a href="contacts.html" class="ajax contacts-btn">Get in touch</a>
            </div>
            <!-- header-contacts end-->
        </header>
        <!-- header end-->
        <!-- left-header-->
        <aside class="left-header">
            <span class="lh_dec color-bg"></span>

            <div class="left-header_social">
                <ul>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                </ul>
            </div>
        </aside>
        <!-- left-header end-->
        <!-- share button-->
        <div class="share-btn showshare color-bg"><span>REDES <i class="fal fa-plus"></i></span></div>
        <!-- share button end-->
        <!-- right header-->
        <div class="hc_dec_color">
            <div class="page-subtitle"><span></span></div>
        </div>
        <!-- right header end-->
        <!-- wrapper  -->
        <div id="wrapper">
            <!-- navigation menu-->
            <div id="login123" class="nav-holder">
                <div class="nav-holder-wrap but-hol">
                    <div class="nav-container fl-wrap">

                        <div style="width: 400px; height: 400px; overflow-y: scroll;" class="cf-inner">
                            <div class="contact-details-title fl-wrap center-text">
                                <h2>INGRESE SU USUARIO</h2>
                            </div>
                            <div class="col-md-12 text-center" id="error">
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <div id="infoMessage"><?php echo $message; ?></div>
                            <div class="fl-wrap">
                                <form id="session_system" class="custom-form" method="post">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span>Ingrese su CI</span>
                                            <!-- <label>Usuario</label> -->
                                            <input type="textarea1" name="identity" id="name" placeholder="Ingrese su CI" size="20" value="" required />
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div justify-content:center class="col-sm-6">
                                            <div class="contact-details-title">Fecha de nacimiento</div>

                                            <input type="password" name="password" id="email" placeholder="Ej:01-12-1999" size="20" value="" required />
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-2 col-sm-2 col-xs-2">

                                            <a href="javascript:void(0);" class="refreshCaptcha"><img width="70" src="<?php echo base_url(); ?>asset/images/p2.gif" alt=""></a>
                                        </div>
                                        <div id="captImg"></div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-10 col-sm-10 col-xs-10 text-center">


                                            <input type="fily" name="tmptxt" class="form-control" style="text-transform: uppercase;" maxlength="5" type="text" size="20" required placeholder="Ingresar captcha"><br>


                                        </div>

                                    </div>

                                    <div class="center-block">
                                        <button type="submit" name="submit" class="btn fl-btn color-bg center-text" id="submit"><span>Verificar</span> </button>
                                    </div>


                                    <div class="col-md-12 text-center" id="error">
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                </form>
                                <div id="infoMessage"><?php echo $message; ?></div>
                            </div>
                            <!--   <div class="aside-show_cf show_contact-form"><i class="fal fa-envelope"></i></div> -->
                        </div>


                    </div>
                    <div class="nav-footer"><span>&#169; Bolivia-Lapaz El Alto 2020 / Fily-boy. </span></div>
                    <div class="nav-holder-wrap_line"></div>
                    <div class="nav-holder-wrap_dec"></div>
                </div>
            </div>
            <div class="nav-overlay"></div>
            <!-- navigation menu end  -->

            <!-- content-->
            <div class="content full-height" data-pagetitle="seguro social">
                <div class="fl-wrap full-height hero-conatiner">
                    <div class="hero-wrapper fl-wrap full-height hidden-item">
                        <span class="hc_dec"></span>
                        <!-- fs-slider-wrap  -->

                        <!-- hero-slider-wrap -->
                        <div class="hero-slider-wrap home-half-slider fl-wrap full-height">
                            <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide-->

                                        <div class="swiper-slide">
                                            <div class="half-hero-wrap">
                                                <div class="hhw_header">Bienvenido al sistema de registro</div>
                                                <h1>Unidad de Seguro Social<br><span> UPEA</span><br> seguro <span>social</span></h1>
                                                <h4>Al servicio del estamento Estudiantil</h4>
                                                <div class="clearfix"></div>
                                                <!-- <button onclick="modalfi()" class="btn ajax  fl-btn color-bg"><span>LOGIN</span></button> -->
                                            </div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="half-hero-wrap">
                                                <div class="hhw_header">seguro social</div>
                                                <h1>Realiza<br> tu <span>Registro</span> <br> Aqui</h1>
                                                <h4>simple y sencillo</h4>
                                                <div class="clearfix"></div>
                                                <a href="#login123" class="btn ajax  fl-btn color-bg"><span>LOGIN</span></a>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="half-hero-wrap">
                                                <div class="hhw_header">2020</div>
                                                <h1>brindamos <br>el mejor <br> <span>servicio</span> </h1>
                                                <h4>Realizado pensando en el estamento estudiantil</h4>
                                                <div class="clearfix"></div>
                                                <a href="#login123" class="btn  ajax  fl-btn color-bg"><span>LOGIN</span></a>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="half-hero-wrap">
                                                <div class="hhw_header">SEGURO SOCIAL</div>
                                                <h1>UPEA <br> SIERUDSS <br>SEGURO <span> UNIVERSITARIO.</span></h1>
                                                <h4>REGISTRATE</h4>
                                                <div class="clearfix"></div>
                                                <a href="#login123" class="btn ajax  fl-btn color-bg"><span>LOGIN</span></a>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- hero-slider-wrap  end-->
                        <!-- hero-slider-img-->
                        <div class="hero-slider-img hero-slider-wrap_halftwo hidden-item">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="bg" data-bg="<?= base_url() ?>asset/images/imble1.jpg" data-swiper-parallax="100%"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="bg" data-bg="<?= base_url() ?>asset/images/imble2.jpg" data-swiper-parallax="20%"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="bg" data-bg="<?= base_url() ?>asset/images/imble3.jpg" data-swiper-parallax="20%"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="bg" data-bg="<?= base_url() ?>asset/images/imble8.jpg" data-swiper-parallax="20%"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <!-- swiper-slide end-->
                                </div>
                            </div>
                            <div class="hero-corner-dec"></div>
                            <div class="hero-corner-dec2"></div>
                        </div>
                        <!-- hero-slider-img  end-->
                        <!-- slider-controls -->
                        <!-- CIRCULO PEQUEÑO-->
                        <div class="slider-progress-bar">
                            <span>
                                <svg class="circ" width="50" height="50">
                                    <circle class="circ2" cx="25" cy="25" r="23" stroke="rgba(255,255,255,0.4)" stroke-width="2" fill="none" />
                                    <circle class="circ1" cx="25" cy="25" r="23" stroke="#fff" stroke-width="5" fill="none" />
                                </svg>
                            </span>
                        </div>
                        <div class="clone-counter">
                            <div class="current">01</div>
                        </div>
                        <div class="swiper-counter hs_counter">
                            <div class="current">01</div>
                            <div class="total"></div>
                        </div>
                        <div class="hero-slider_control-wrap">
                            <div class="hsc hsc-prev"><span><i class="fal fa-angle-left"></i></span> </div>
                            <div class="hsc hsc-next"><span><i class="fal fa-angle-right"></i></span></div>
                        </div>

                        <div class="play-pause_slider hsc_pp auto_actslider"><i class="fas fa-play"></i></div>
                        <!-- slider-controls end-->
                        <div class="hero_promo-wrap bot-element3">
                            <div class="hero_promo-title">
                                <h4>Video Seguro Social</h4>
                                <p>Actividades...</p>
                            </div>

                            <div class="hero_promo-button">
                                <div class="bg" data-bg="<?= base_url() ?>asset/images/upea.png"></div>
                                <div class="overlay"></div>
                                <a href="https://youtu.be/bZHUmvPa8w0" class="image-popup"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- hero-container end-->

                    <div class="hero-decor-numb"><span>Universidad Publica De El Alto</span><span>2020 </span> <a href="https://goo.gl/maps/hTprmbdMG1P31kov5" target="_blank" class="hero-decor-numb-tooltip">Bolivia</a></div>
                    <div class="hero-slider-wrap_pagination"></div>
                    <div class="hero-scroll-down-notifer">
                        <div class="scroll-down-wrap ">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                        </div>
                        <i class="far fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <!-- content end -->
            <!-- share-wrapper-->
            <div class="share-wrapper">
                <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
                <div class="share-container fl-wrap  isShare"></div>
            </div>
            <!-- share-wrapper  end -->
        </div>
        <!-- wrapper end -->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="<?= base_url() ?>asset/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>asset/js/plugins.js"></script>
    <script src="<?= base_url() ?>asset/js/scripts.js"></script>
    <!--     <script type='text/javascript'>
        document.oncontextmenu = function() {
            return false
        }
    </script> -->
    <script>
        $(document).on("ready", inicio());



        $(document).ready(function() {
            $('.refreshCaptcha').on('click', function() {
                inicio()
            });
        });
        $("#session_system").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '<?= site_url(Hasher::make(1)); ?>',
                type: 'POST',
                data: $("form").serialize(),
                success: function(dato) {
                    var valores = eval(dato);
                    if (valores[0] == 2) {
                        $("#error").html("<b style='color: #ff0000;'>Error de captcha</b>");
                    } else {
                        if (valores[0] == '1') {
                            $("#error").html("<b style='color: #ff0000;'>Error de usuario y contraseña</b>");
                        } else {
                            window.location = "<?= site_url(Hasher::make(7)); ?>";
                        }
                    }
                }
            });
        });

        function inicio() {
            $.get('<?php echo base_url(Hasher::make(33)) ?>', function(data) {
                $('#captImg').html(data);
            });
        }
    </script>
</body>


</html>