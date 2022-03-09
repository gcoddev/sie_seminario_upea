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

            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2"> 

                <div class="form-body bg-white padding-20">
                    <div class="row">
                    <h1 align="center">CICLO DE CONFERENCIAS : USO DE PLATAFORMAS VIRTUALES </h1>

                    
                    <div class="alert alert-info">
                        TEMA: USO DE PLATAFORMAS VIRTUALES <br>
                        DIRIGIDO A: ESTUDIANTES DE SEDES ACADEMICAS DESCONCENTRADAS <br>
                        MODALIDAD: VIRTUAL, VÍA ZOOM <br>
                        FECHA: 26 - 27 - 28 DE AGOSTO <br>
                        HORA DE INICIO: 18:00 PM
                    </div>

                        <div class="col-md-6">

                            <div class="form-header bg-white padding-10 text-center">
                                <h2><strong>INSCRIPCION</strong> EN LINEA</h2>     
                                       
                            </div>

                            <form method="post" id="guardar_nuevo_inscripcion_estudiante" enctype="multipart/form-data">
                                <div class="inner-addon right-addon margin-bottom-15">
                                    <i class="fa fa-user"></i>
                                    <input type="text" onkeyup="buscar_carnet(this.value)" class="form-control input-lg" placeholder="Ingresar carnet..."  min="0" maxlength="20" name="ci" />
                                </div>
                                <p><b>NOTA : </b>Etapa de desarrollo para el certificado...</p>

                                
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-md-12" id="ver_contenido"></div>
                                </div>
                                
                                
                               <!--  <button type="submit" class="btn btn-wisteria btn-outline btn-circle m-b-10 btn-lg" id="boton"><span class="fa fa-save"></span> GUARDAR DATOS</button>
                                <a href="" class="btn btn-wisteria btn-outline btn-circle m-b-10 btn-lg" ><span class="fa fa-close"></span> CANCELAR</a> -->
                            </form>

                        </div>

                        <div class="col-md-6">
                            <div class="form-header bg-white padding-10 text-center form-social-header">
                                <h2><strong>REDES</strong> SOCIALES</h2>                
                            </div>
                            <div class="social-buttons margin-top-20">
                               <p>UNIRSE A LA REUNIÓN ZOOM: 
                               <a target="_black" href="https://zoom.us/j/95413649862?pwd=WmRiMnlmOGtPRjNTNUhBbS9ab0lRdz09">
                               <img class="img-responsive" src="<?php echo base_url(); ?>assets/alert/ZOOM.jpg"></a>
                               <br>
                               <a target="_black" href="https://zoom.us/j/95413649862?pwd=WmRiMnlmOGtPRjNTNUhBbS9ab0lRdz09">LINK UNIRSE AL GRUPO</a> <br>
                                ID de reunión: 954 1364 9862 <br>
                                Código de acceso: 836874
                                </p>
                            </div>
                            
                        </div>
                    </div><!--/row-->    

                    <hr/>
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
    $.post('<?php echo base_url(Hasher::make(26)); ?>', {ci}, function(data) {
        $("#ver_contenido").html(data)
    });
}
  $("#guardar_nuevo_inscripcion_estudiante").submit(function(event) {
    event.preventDefault();

    var formData=new FormData($("#guardar_nuevo_inscripcion_estudiante")[0]);
    var id_estudiante=$("#id_estudiante").val()
    if (id_estudiante>0) {
        $('#loading').modal({backdrop: 'static', keyboard: false});
        document.getElementById('boton').disabled=true;
        $.ajax({
            url:'<?php echo base_url(Hasher::make(27)); ?>',
            type:'POST',
            data:formData,
            cache:false,
            processData:false,
            contentType:false,
            success:function(){ 
              swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS", "success");
              setTimeout(function(){
                   window.location='';
              },1000);
            } 
        }); 
    }else{
        swal("NOTA!", "LOS DATOS YA EXISTEN", "error");
    }
  });
    </script>
</body>
</html>

<!--===== Footer End ========-->