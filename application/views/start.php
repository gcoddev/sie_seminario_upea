<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />

    <!--  Title -->
    <title>SEMINARIOS||UPEA</title>

    <!-- Font Google -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    </noscript>

    <link rel="preload" href="http://theme.dsngrid.com/video/grida.mp4" as="video" type="video/mp4">
    <link rel="preload" href="<?= base_url() ?>grida/assets/img/services/layout.svg" as="image">

    <link rel="shortcut icon" href="<?= base_url() ?>grida/assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?= base_url() ?>grida/assets/img/favicon.ico" type="image/x-icon" />

    <!-- custom styles (optional) -->
    <link href="<?= base_url() ?>grida/assets/css/plugins.css" rel="stylesheet" />
    <link href="<?= base_url() ?>grida/assets/css/plugins/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>grida/assets/css/style.css" rel="stylesheet" />
    <!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

</head>

<!--classic-menu-->

<body class="v-dark dsn-effect-scroll dsn-cursor-effect dsn-ajax">


    <!-- ========== Loading Page ========== -->
    <div class="preloader">
        <span class="percent v-middle">0</span>
        <span class="loading-text text-uppercase">Cargando fily_boy...</span>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
        <h1 class="title v-middle">
            <span class="letter-stroke">UPEA</span>
            <span class="text-fill">UPEA</span>
        </h1>
    </div>
    <!-- ========== End Loading Page ========== -->


    <!-- ========== Menu ========== -->
    <div class="site-header dsn-load-animate dsn-container">
        <div class="extend-container d-flex w-100 align-items-baseline justify-content-between align-items-end">
            <div class="inner-header p-relative">
                <div class="main-logo">
                    <a href="#" data-dsn="parallax">
                        <img class="light-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url() ?>img/fily.png" alt="" />
                        <img class="dark-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url() ?>img/fily.png" alt="" />
                    </a>
                </div>
           <!--      <div class="main-logo">
                    <a href="#" data-dsn="parallax">
                        <img class="light-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url() ?>img/sie.png" alt="" />
                        <img class="dark-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= base_url() ?>img/sie.png" alt="" />
                    </a>

                </div> -->
            </div>


            <div class="menu-icon d-flex align-items-baseline">
                <div class="text-menu p-relative  font-heading text-transform-upper">
                    <div class="p-absolute text-button">Menu</div>
                    <div class="p-absolute text-open">Ingresar</div>
                    <div class="p-absolute text-close">Cerrar</div>
                </div>
                <div class="icon-m" data-dsn="parallax" data-dsn-move="10">
                    <span class="menu-icon-line p-relative d-inline-block icon-top"></span>
                    <span class="menu-icon-line p-relative d-inline-block icon-center"></span>
                    <span class="menu-icon-line p-relative d-block icon-bottom"></span>
                </div>
            </div>
            <nav class="accent-menu dsn-container main-navigation p-absolute  w-100  d-flex align-items-baseline ">
                <div class="menu-cover-title">fily_boy</div>
                <ul class="extend-container p-relative d-flex flex-column justify-content-center h-100">




                    <div class="col-lg-8">
                        <div class="form-box d-flex flex-column">
                        <div id="errors" class="help-block with-errors"></div>
                            <form id="registro12" method="post" class="form w-100" >
                                <div id="error" class="messages"></div>
                                <div class="col-md-12 text-center" id="error">
                                    <?= $this->session->flashdata('message'); ?>
                                </div>

                                <div class="input__wrap controls">
                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>USUARIO</label>
                                            <input id="login-id" type="text" name="identity" placeholder="Usuario" required="required">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>PASSWORD</label>
                                            <input id="login-pass" type="password" name="password" placeholder="contraseña" required="required" >
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>



                                    <div class="text-right">
                                        <div class="image-zoom   move-circle" data-dsn="parallax">
                                            <input  type="submit" value="INGRESAR" class="v-light">
                                        </div>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>


            </nav>
        </div>
    </div>
    <!-- ========== End Menu ========== -->


    <main class="main-root">


        <!-- ========== side box left ========== -->

        <!-- ========== End side box left ========== -->


        <?= $output;  ?>


    

        <!-- ========== Contact Form Model ========== -->

        <!-- ========== End Contact Stories ========== -->


    </main>


    <!-- ========== Cursor Page ========== -->
    <div class="cursor">

        <div class="cursor-helper">
            <span class="cursor-drag">fily</span>
            <span class="cursor-view">View</span>
            <span class="cursor-open"><i class="fas fa-plus"></i></span>
            <span class="cursor-close">Close</span>
            <span class="cursor-play">play</span>
            <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
            <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
        </div>

    </div>
    <!-- ========== End Cursor Page ========== -->


    <!-- ========== social network ========== -->
    <div class="social-network">
        <ul class="socials d-flex  flex-column ">
            <!--<li>
                <a href="#" target="_blank">
                    <i class="fab fa-dribbble"></i>
                    <span>Db</span>
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <i class="fab fa-twitter"></i>
                    <span>Tw</span>
                </a>
            </li>-->
            <li>
                <a href="https://www.youtube.com/channel/UCKGQ9pm_ZS1PCKXgYygTAlg" target="_blank">
                    <i class="fab fa-behance"></i>
                    <span>Yb</span>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/sieupea" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                    <span>Fb</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- ========== End social network ========== -->

    <!-- ========== Light & Dark Options ========== -->
    <div class="day-night">
        <div class="night active" data-dsn-theme="dark">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <rect x="12.3" y="23.5" width="2.6" height="1"></rect>
                <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1" height="2.6"></rect>
                <rect x="23.5" y="12.3" width="1" height="2.6"></rect>
                <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6" height="1"></rect>
                <rect x="33.1" y="23.5" width="2.6" height="1"></rect>
                <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1" height="2.6"></rect>
                <rect x="23.5" y="33.1" width="1" height="2.6"></rect>
                <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6" height="1"></rect>
                <path d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">
                </path>
            </svg>
        </div>
        <div class="moon" data-dsn-theme="night">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <path d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">
                </path>
            </svg>
        </div>
    </div>
    <!-- ========== End Light & Dark Options ========== -->

    <!-- ========== Scroll Right Page To Top Page ========== -->
    <div class="scroll-to-top">
   <!--      <img src="<?= base_url() ?>grida/assets/img/about.gif" alt=""> -->
        <img src="<?= base_url() ?>img/sie.png" alt="">
        <div class="box-number v-middle">
            <span>0%</span>
        </div>
    </div>
    <!-- ========== End Scroll Right Page To Top Page ========== -->

    <!-- ========== paginate-right-page ========== -->
    <div class="dsn-paginate-right-page"></div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url() ?>grida/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url() ?>grida/assets/js/plugins.min.js"></script>
    <script src="<?= base_url() ?>grida/assets/js/dsn-grid.min.js"></script>
    <script src="<?= base_url() ?>grida/assets/js/custom.js"></script>
    <script src="<?= base_url() ?>grida/assets/js/swal2.js"></script>
    <script>
          $("#registro12").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '<?= site_url(Hasher::make(1)); ?>',
                type: 'POST',
                data: $("form").serialize(),
                success: function(dato) {
                    var valores = eval(dato);
              /*       console.log(valores[0] );
                    return false;  */
                    if (valores[0] == 2) {
                        $("#error").html("<b style='color: #ff0000;'>Error de captcha</b>");
                    } else {
                        if (valores[0] == '1') {
                            $("#errors").html("<b style='color: #ff0000;'>Error de usuario y contraseña</b>");
                        } else {
                            window.location = "<?= site_url(Hasher::make(20)); ?>";
                        }
                    }
                }
            });
        });
    </script>

</body>


</html>