<?php $id=$this->session->userdata('user_id');
$obj=$this->db->query("SELECT * FROM dp_auth_users WHERE id='$id' ")->row();
 ?>
<div class="profile-page">
    <div class="row profile-cover">
        <div class="row">
            <div class="col-md-3 profile-image">
                <div class="profile-image-container">
                    <?php if($obj->imagen){ ?>
                        <img src="<?php echo base_url();?>assets/file_usuario/<?php echo $obj->imagen; ?>" alt="image">
                    <?php }else{ ?>
                        <img src="<?php echo base_url();?>assets/logos/upea1.png" alt="image">
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-12 profile-info">
                <div class=" profile-info-value">
                    <h3><?php echo date('d'); ?></h3>
                    <p>DIA</p>
                </div>
                <div class=" profile-info-value">
                    <h3><?php echo date('m'); ?></h3>
                    <p>MES</p>
                </div>
                <div class=" profile-info-value">
                    <h3><?php echo date('Y'); ?></h3>
                    <p>AÑO</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 profile-under-cover-style">
            &nbsp;
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row margin-top-70">
        <div class="col-md-3 margin-bottom-40" style="background:rgba(255, 255, 255, 0.5); border-right: 10px solid #F1F2F2;">
            
            <ul class="list-group profile-sidebar margin-bottom-10 margin-top-15" id="sidebar-nav-1">
                <li class="list-group-item active">
                    <a href=""><i class="fa fa-bar-chart-o"></i> PERFIL</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo base_url(Hasher::make(20))?>" class=""><i class="icon-user"></i> SALIR</a>
                </li>
            </ul>    
            <hr/>
            <button type="button" class="btn red btn-outline btn-circle m-b-10 btn-block"  data-toggle="modal" data-target="#modal-basic">IMAGEN PERFIL</button>
            <div class="margin-bottom-50"></div>

            <form action="page-profile-dashboard.html#" id="sky-form2" class="sky-form">
                <div id="inline-start"></div>
            </form> 
        </div>        
        <div class="col-md-9" style="background:rgba(255, 255, 255, 0.5);">
            <div class="row margin-top-10" style="margin-bottom: -49px;">   
                <div class="col-md-12">

                    <div class="panel panel-profile">
                        <div class="panel-heading overflow-hidden">
                            <h2 class="panel-title heading-sm pull-left"><i class="fa fa-tasks"></i>INFORMACION</h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 page-people-directory">
                                    
                                    <div class="list-group contact-group">
                                        <a href="javascript:;" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <?php if($obj->imagen){ ?>
                                                        <img src="<?php echo base_url();?>assets/file_usuario/<?php echo $obj->imagen; ?>" alt="image" class="img-circle">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url();?>assets/logos/upea1.png" alt="image" class="img-circle">
                                                    <?php } ?>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">NOMBRE<small><?php echo $obj->first_name ?></small></h4>
                                                    <h4 class="media-heading">APELLIDOS<small><?php echo $obj->last_name ?></small></h4>
                                                    <h4 class="media-heading">USUARIO<small><?php echo $obj->email ?></small></h4>
                                                    
                                                </div>
                                            </div><!-- media -->
                                        </a><!-- list-group -->
                                        
                                        
                                            <div class="media">
                                                <div class="media-body">
                                                    <form method="post" id="guardar_nuevo_usuario_pass" enctype="multipart/form-data">
                                                    <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id'); ?>">
                                                        <fieldset class="">
                                                            <legend>SEGURIDAD DEL USUARIO : </legend>  
                                                            <div class="panel-body">
                                                                <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label>.:::NUEVO USUARIO:::.</label>
                                                                    <input type="text" name="name" onkeyup="validar_usuario(this.value)" class="form-control" placeholder="Ingresar usuario..." required>
                                                                    <span id="error_u_p"></span>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label>.:::NUEVO CONTRASEÑA:::.</label>
                                                                    <input type="password" name="password" class="form-control" placeholder="Ingresar contraseña..." required>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" id="ver_boton" class="btn red btn-outline btn-circle m-b-10 btn-block">GUARDAR</button>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        
                                        
                                    </div>

                                </div>   
                            </div>
                        </div>        
                    </div>

                </div>
                
            </div><!--/row-->
       

        
        </div>
    </div>

</div>  





<div class="modal" id="modal-basic" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content ">
      <div class="modal-header" style="background:#e74c3c;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
        <button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title"><strong style="color:#fff;">NUEVO IMAGEN</strong></h4>
      </div>
      <form method="post" id="guardar_imagen_usuario" enctype="multipart/form-data">
            
        <div class="modal-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label class="form-label">NUEVO IMAGEN PERFIL</label> 
                  <input type="file" name="imagen" class="form-control nuevaFoto" accept="image/png, .jpeg, .jpg, image/gif" required>
                  <span id="error_img"></span>
                  
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label class="form-label">VISUALIZAR</label> <br>
                    <?php if($obj->imagen){ ?>
                        <img class="visualizar" style="width: 100%" src="<?php echo base_url();?>assets/file_usuario/<?php echo $obj->imagen; ?>">
                    <?php }else{ ?>
                        <img class="visualizar" style="width: 100%" src="<?php echo base_url();?>assets/logos/upea1.png" >
                    <?php } ?>
                </div>
            </div>
            <input type="hidden" name="imagen_a" value="<?php echo $obj->imagen; ?>">
            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
        </div>
      <div class="modal-footer">
          <button type="submit" class="btn red btn-outline btn-circle m-b-10 btn-lg btn-block"><span class="fa fa-save"></span> GUARDAR DATOS</button>
      </div>
      </form><hr>
    </div>
  </div>
</div>


<script type="text/javascript">
$(".nuevaFoto").change(function(){
    var imagen=this.files[0];
    if (imagen["type"]!="image/jpeg" && 
        imagen["type"]!="image/png" && 
        imagen["type"]!="image/gif" && 
        imagen["type"]!="image/jpg") {
        $(".nuevaFoto").val('');
    $("#error_img").html('<b style="color:#ff0000;">Formato invalido...</b>');
    $(".visualizar").attr("src",'<?php echo base_url();?>assets/logos/upea1.png');
    }else{
        if(imagen['size']>5000000){
            $(".nuevaFoto").val('');
            $("#error_img").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
        }else{
            $("#error_img").html('');
            var datosImagen=new FileReader;
            datosImagen.readAsDataURL(imagen);
            $(datosImagen).on("load",function(event){
                var rutaImagen=event.target.result;
                $(".visualizar").attr("src",rutaImagen);
            });
        }
    }
});
$("#guardar_imagen_usuario").submit(function(event) {
  event.preventDefault();
  var formData=new FormData($("#guardar_imagen_usuario")[0]);
  $.ajax({
      url:'<?php echo base_url();?>backend/Dashboard/guardar_imagen_usuario',
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
});
function validar_usuario(usu){
$.post('<?php echo base_url();?>backend/Dashboard/validar_usuario', {usu}, function(data) {
    var valores = eval(data);
    if (valores[0]===0) {
        document.getElementById('ver_boton').disabled=false;
        $("#error_u_p").html("<b style='color: #008000;'>Usuario no existe</b>");
    }else{
        document.getElementById('ver_boton').disabled=true;
        $("#error_u_p").html("<b style='color: #ff0000;'>Usuario ya existe</b>");
    }
});
}
$("#guardar_nuevo_usuario_pass").submit(function(event) {
  event.preventDefault();
  var formData=new FormData($("#guardar_nuevo_usuario_pass")[0]);
  $.ajax({
      url:'<?php echo base_url();?>backend/Dashboard/guardar_nuevo_usuario_pass',
      type:'POST',
      data:formData,
      cache:false,
      processData:false,
      contentType:false,
      success:function(){ 
        swal("NOTA", "SEÑOR USUARIO SE REINICIARA EL SISTEMA, PARA CERRAR TODAS LAS SESIONES HABIERTAS DEL SISTEMA", "success"); 
        setTimeout(function(){
               window.location='<?php echo base_url(Hasher::make(1))?>';
        },1000);
      }
  });
});
</script>