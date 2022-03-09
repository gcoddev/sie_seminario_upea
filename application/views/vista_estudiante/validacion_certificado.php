<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="SEDES ACADEMICAS DESCONCENTRADAS - UPEA">
    <meta name="keywords" content="SEDES ACADEMICAS DESCONCENTRADAS - UPEA">

    <meta name="author" content="SEDES ACADEMICAS DESCONCENTRADAS - UPEA">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>">
    <title>SEDES ACADEMICAS DESCONCENTRADAS - UPEA</title>

    <!-- Start Global plugin css -->
    <link href="<?php echo base_url();?>assets/admin/assets/css/global-plugins.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/assets/vendors/jquery-icheck/skins/all.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/admin/assets/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/admin/assets/css/class-helpers.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>assets/admin/assets/css/colors/green.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/assets/fonts/Indie-Flower/indie-flower.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/admin/assets/fonts/Open-Sans/open-sans.css?family=Open+Sans:300,400,700" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/admin/assets/vendors/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/alert/lib/alertify.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/alert/themes/alertify.core.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/alert/themes/alertify.default.css" />
</head>

<body id="default-scheme" class="form-background">

    <!--main content start-->
    <div class="bg-overlay"></div>
    <section class="registration-login-wrapper">

        <!--======== START LOGIN ========-->
        <div class="row page-login">

            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2"> 

                <div class="form-body bg-white padding-20">
                    <div class="row">
                 

                        <div class="col-md-12">
                        <div class="alert alert-info">
                        INGRESAR CODIGO
                            <form method="post" id="guardar_nuevo_inscripcion_estudiante" enctype="multipart/form-data">
                                <div class="inner-addon right-addon margin-bottom-15">
                                    <i class="fa fa-user"></i>
                                    <input type="text" onkeyup="buscar_carnet(this.value)" class="form-control input-lg" placeholder="Ingresar codigo..."  min="0" maxlength="20" name="ci" />
                                </div>

                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-md-12" id="ver_contenido"></div>
                                </div>
                                
                            </form>

                        </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Universidad Pública de el Alto U.P.E.A.</h4>
                            <p><a href="https://www.upea.bo/">Av. Sucre A s/n Zona Villa Esperanza</a></p>
                        </div>
                    </div>

                </div><!--/form-body-->
                
            </div><!--/col-md-12-->

        </div><!--/row-->
        <!--======== END LOGIN ========-->
    <script src="<?php echo base_url();?>assets/admin/assets/js/global-plugins.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/theme.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/forms.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/form-validation.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/form-wizard.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/form-plupload.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/form-x-editable.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/vendors/backstretch/jquery.backstretch.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/registration-login.js"></script>
    <script src="<?php echo base_url();?>assets/admin/assets/js/sweetalert.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
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
            App.initSummernote();
            App.initAccordion();
            App.initModal();
            App.initPopover();
        });
    </script>
    <script type="text/javascript">
function buscar_carnet(ci){
    $.post('<?php echo base_url(Hasher::make(28)); ?>', {ci}, function(data) {
        $("#ver_contenido").html(data)
    });
}
  
    </script>
</body>
</html>

<!--===== Footer End ========-->