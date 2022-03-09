
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="thema bootstrap template, thema admin, bootstrap, admin template, bootstrap admin">
        <meta name="author" content="LanceCoder">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="index.php">
        <title>TITULOS</title>
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/global-plugins.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/vendors/jquery-icheck/skins/all.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/vendors/maps/css/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/vendors/morris-chart/morris.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/vendors/jquery-ricksaw-chart/css/rickshaw.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/flot-chart.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/style-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/class-helpers.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/green.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/turquoise.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/blue.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/amethyst.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/cloud.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/sun-flower.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/carrot.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/alizarin.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/concrete.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/colors/wet-asphalt.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/fonts/Indie-Flower/indie-flower.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/fonts/Open-Sans/open-sans.css?family=Open+Sans:300,400,700" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/vendors/ios-switch/css/switch.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/css/table-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/assets/vendors/datatable/bootstrap/dataTables.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/assets/vendors/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/alert/lib/alertify.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/themes/alertify.core.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/themes/alertify.default.css" />

        <link href="<?php echo base_url(); ?>assets/alert/style_fer.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/global-plugins.js"></script>
    </head>

    <body id="amethyst-scheme">
        <section id="container">
            <div class='pop-header' style="
            display: none;
            width: 100%;
            padding: 20px;
            position: fixed;
            background-color: #2d2929;
            color: #fff;
            z-index: 10000;
            font-size: 14px;
            text-align: center;
            font-weight: bold;">
                <span>Please check our new "Bootstrap Admin Template" here: <a href="https://goo.gl/tHPzXQ" target="_blank" style="color: #fff;">https://goo.gl/tHPzXQ</a>.</span>
                <span style="float: right; background: red; color: white; padding: 5px 10px; cursor: pointer;" class="close-pop-up">Close</span>
            </div>
            <header class="header fixed-top clearfix">
                <div class="brand">
                    <a href="<?php echo site_url(Hasher::make(20)) ?>" class="logo">
                        TITULOS
                    </a>
                    <div class="sidebar-toggle-box">
                        <div class="fa fa-bars"></div>
                    </div>
                </div>
                <div class="top-nav">
                    <ul class="nav navbar-nav navbar-left" style="margin-left:30px;">
                        <li>
                            <a href="javascript:void(0)" class="btn-menu-grid" title="Menu Grid">
                                <span class="icon-grid"></span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="search-box">
                            <input type="text" class="form-control search" placeholder=" Search">
                        </li>


                        <li class="dropdown">
                            <a href="javascript:void(0);" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>assets/logos/upea1.png" alt="image">
                                <?php echo  $nombre; ?>

                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInUp pull-right">

                                <li><a href="<?php echo base_url(Hasher::make(3)) ?>" class="hvr-bounce-to-right"><i class=" icon-login pull-right"></i>SALIR</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </header>

            <aside>
                <div id="sidebar" class="nav-collapse md-box-shadowed">
                    <div class="leftside-navigation leftside-navigation-scroll">
                        <ul class="sidebar-menu" id="nav-accordion">
                            <li class="sidebar-profile">
                                <div class="profile-options-container">
                                    <p class="text-right profile-options"><span class="profile-options-close pe-7s-close fa-2x font-bold"></span></p>

                                    <div class="profile-options-list animated zoomIn">
                                        <p><a href="<?php echo base_url(Hasher::make(3)) ?>">SALIR</a></p>
                                    </div>
                                </div>

                                <div class="profile-main">
                                    <p class="text-right profile-options"><i class="profile-options-open icon-options-vertical fa-2x"></i></p>
                                    <p class="image">
                                        <img src="<?php echo base_url(); ?>assets/logos/upea1.png" width="80">
                                        <span class="status"><i class="fa fa-circle text-success"></i></span>
                                    </p>
                                    <p>
                                        <span class="name"><?php echo  $nombre; ?></span><br>
                                        <span class="position" style="font-family: monospace;">.::::::::::::.</span>
                                    </p>
                                </div>
                            </li>
                            <li class=' '>
                                <a href="<?php echo base_url(Hasher::make(20)) ?>" class="hvr-bounce-to-right-sidebar-parent <?php if ($menu == '1') echo "active"; ?> "><span class='icon-sidebar icon-home fa-2x'></span><span>INICIO</span></a>
                            </li>
                            <li class=' '>
                                <a href="<?php echo base_url(Hasher::make(21)) ?>" class="hvr-bounce-to-right-sidebar-parent <?php if ($menu == '2') echo "active"; ?>"><span class='icon-sidebar icon-user-follow fa-2x'></span><span> INSCRICIONES</span></a>
                            </li>
                            <li class=' '>
                                <a href="<?php echo base_url(Hasher::make(22)) ?>" class="hvr-bounce-to-right-sidebar-parent <?php if ($menu == '3') echo "active"; ?>"><span class='icon-sidebar fa fa-file-pdf-o fa-2x'></span><span>REPORTES</span></a>
                            </li>
                            <li class=' '>
                                <a href="<?php echo base_url(Hasher::make(24)) ?>" class="hvr-bounce-to-right-sidebar-parent <?php if ($menu == '4') echo "active"; ?>"><span class='icon-sidebar fa fa-file-pdf-o fa-2x'></span><span>Cursos</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    <div id="grid-menu">
                        <div class="color-overlay grid-menu-overlay">
                            <div class="grid-icon-wrap grid-icon-effect-8">
                                <a href="index.php#" class="grid-icon icon-envelope font-size-50 turquoise"></a>
                                <a href="index.php#" class="grid-icon icon-user font-size-50 teal"></a>
                                <a href="index.php#" class="grid-icon icon-support font-size-50 peter-river"></a>
                                <a href="index.php#" class="grid-icon icon-settings font-size-50 light-blue"></a>
                                <a href="index.php#" class="grid-icon icon-picture font-size-50 orange"></a>
                                <a href="index.php#" class="grid-icon icon-camrecorder font-size-50 light-orange"></a>
                            </div>
                        </div>
                    </div>
                    
                    <?php $this->load->view($contenido) ?>

                    <div class="modal" id="loading" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog " style="text-align: center;">
                            <img style="max-width: 100%;box-shadow: 0px 5px 10px #ccc;" src="<?php echo base_url(); ?>assets/alert/loading.gif" alt="">
                        </div>
                    </div>
                </section>
            </section>
        </section>
        <script src="<?php echo base_url(); ?>assets/admin/assets/vendors/flot/jquery.flot.full.min.js" type="text/javascript"></script>
        <script>
            videojs.options.flash.swf = "<?php echo base_url(); ?>assets/admin/assets/vendors/video-js/video-js.swf";
        </script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/theme.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/tables.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/dashboard-green.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/forms.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/sweetalert.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                new WOW().init();
                App.initPage();
                App.initLeftSideBar();
                App.initCounter();
                App.initNiceScroll();
                App.initPanels();
                App.initProgressBar();
                App.initSlimScroll();
                App.initNotific8();
                App.initTooltipster();
                App.initStyleSwitcher();
                App.initMenuSelected();
                App.initRightSideBar();
                App.initEmail();
                App.initSummernote();
                App.initAccordion();
                App.initModal();
                App.initPopover();
                App.initOwlCarousel();
                App.initSkyCons();
                App.initWidgets();

                DashboardGreen.initRickShawGraph();
                DashboardGreen.initFlotGraph();
                DashboardGreen.initChartGraph();
                DashboardGreen.initSparklineGraph();
                DashboardGreen.initDateRange();
                DashboardGreen.initWorldMap();
                DashboardGreen.initEasyPieChart();
                DashboardGreen.initMorrisChart();
                DashboardGreen.initTodoList();
                if ($.cookie("is_close_popup_header") === undefined || $.cookie("is_close_popup_header") != 1) {
                    $(".pop-header").slideDown(1000);
                }

                $(".close-pop-up").on("click", function() {
                    $.cookie("is_close_popup_header", 1);
                    $(".pop-header").slideUp();
                });

            });
        </script>
    </body>

    </html>
