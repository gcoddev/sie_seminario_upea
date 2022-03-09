<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="SEDES ACADEMICOS">
    <meta name="keywords" content="SEDES ACADEMICOS - UPEA">

    <meta name="author" content="Juan F. chambi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url() ?>">
    <title>SEDES ACADEMICOS</title>
    <link href="<?php echo base_url() ?>assets/admin/assets/css/global-plugins.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/assets/vendors/jquery-icheck/skins/all.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/admin/assets/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/admin/assets/css/class-helpers.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>assets/admin/assets/css/colors/green.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/assets/fonts/Indie-Flower/indie-flower.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/admin/assets/fonts/Open-Sans/open-sans.css?family=Open+Sans:300,400,700" rel="stylesheet" />
</head>
<body id="default-scheme" class="form-background">
    <div class="bg-overlay"></div>
    <section class="registration-login-wrapper">
        <div class="row page-login">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4"> 
                <div class="form-body bg-white padding-20">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-header bg-white padding-10 text-center">
                                <h2><strong>INICIO DE SESION</strong></h2>     
                            </div>
                            <form method="post" id="session_system">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <img src="<?php echo base_url();?>Auth/fernando" width="120" height="40" vspace="3"><br>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                    <label>INGRESAR CAPTCHA</label>
                                        <input name="tmptxt" class="form-control" maxlength="6" type="text" size="30" required placeholder="Ingresar captcha"><br>
                                        <span id="error"></span>         
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-green btn-raised btn-flat btn-lg"> <span class="fa fa-key"></span> INGRESAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                    <br>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url() ?>assets/admin/assets/js/global-plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/assets/vendors/backstretch/jquery.backstretch.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/assets/js/registration-login.js"></script>
    <script>
    $("#session_system").submit(function(event) {
        event.preventDefault();
        $.ajax({
          url:'<?= site_url(Hasher::make(1)); ?>',
          type:'POST',
          data:$("form").serialize(),
          success:function(dato){ 
            var valores = eval(dato);
            if (valores[0]==1) {
                $("#error").html("<b style='color: #ff0000;'>Error de captcha</b>");
                setTimeout(function(){
                     window.location='';
                },1500);
            }else{
                window.location="<?= site_url(Hasher::make(20)); ?>";
            }
          }
        });
    });
</script>
</body>
</html>

<!--===== Footer End ========-->