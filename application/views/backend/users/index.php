<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
 <div class="top-page-header">
    <div class="page-title">
        <h2>SISTEMA DE TITULOS</h2>
    </div>
    <div class="page-breadcrumb">
        <nav class="c_breadcrumbs">
            <ul>
                <li><a href="<?php echo base_url(Hasher::make(20))?>">INICIO</a></li>
                <li class="active"><a href="">ADMIN USUARIO</a></li>
            </ul>
        </nav>
    </div>
</div>   

<div class="row bordered-top-1">
  <div class="col-md-12">
    <div class="c_panel top_bordered_danger" style=" box-shadow: 0px 5px 10px rgb(231, 76, 60, 0.5);">
      <div class="c_title">
        <h2>ADMINISTRACION DE USUARIOS</h2>
        <div class="clearfix"></div>
        <div class="c_content">
           <!-- <button type="button" onclick="generar_usuario()" class="btn red btn-outline btn-circle m-b-10 btn-lg"><i class="fa fa-user"></i> GENERAR USUARIO</button> -->
           <button type="button" data-toggle="modal" data-target="#modal-basic" class="btn red btn-outline btn-circle m-b-10 btn-lg"><i class="fa fa-plus"></i> ASIGNAR CARGOS USUARIO</button>
           
            <div class="table-responsive">
            <div class="panel-body">
              <table id="datatable_persona" class="table table-striped table-bordered" style="border-spacing:0px; width:100%"><br>
                <thead>
                    <tr style=" background:#e74c3c;color:#fff; box-shadow: 0px 5px 10px rgb(62, 66, 0);">
                        <th>#</th>
                        <th>CARNET</th>
                        <th>NOMBRE </th>
                        <th>APELLIDO</th>
                        <th>TIPO USUARIO</th>
                        <th>IMAGEN</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $con=1; foreach ($listar_users as $value) { ?>
                        <tr>
                            <td><?php echo $con++; ?></td>
                            <td><?php echo $value->ci; ?></td>
                            <td><?php echo $value->nombre; ?></td>
                            <td><?php echo $value->paterno.' '.$value->materno; ?></td>
                            <td>
                                <?php foreach ($this->ion_auth->mostrar_grupo($value->id_usuario) as $key) {
                                    echo '<span class="badge badge-emerald">'.$key->name.'</span>';
                                } ?>
                            </td>
                            <td>
                                <?php if($value->imagen){ ?>
                                    <img width="50" src="<?php echo base_url();?>assets/file_usuario/<?php echo $value->imagen; ?>" alt="image">
                                <?php }else{ ?>
                                    <img width="50" src="<?php echo base_url();?>assets/logos/upea1.png" alt="image">
                                <?php } ?>
                            </td>
                            <td>
                                <button class="btn red btn-outline btn-circle m-b-10" onclick="reset_usuario('<?php echo $value->id_usuario; ?>')" title="RESET USUARIO"><span class="fa fa-key"></span></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal" id="modal-basic" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header" style="background:#e74c3c;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
        <button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title"><strong style="color:#fff;"> ASIGNAR CARGOS USUARIO</strong></h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-label">BUSCAR CARNET DE IDENTIDAD</label> 
                    <div class="input-group margin-bottom-15">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <span class="twitter-typeahead" >
                        <input type="text" maxlength="25" class="form-control" onkeyup="buscar_c(this.value)" placeholder="Buscar carnet..."  >
                        </span>
                    </div>  
                </div>    
            </div>
            <div class="col-lg-12" id="ver_usuario">
                
            </div>
        </div>
            
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modal_reset" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header" style="background:#e74c3c;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
        <button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title"><strong style="color:#fff;"> ARESET USUARIO Y CONTRASEÑA</strong></h4>
      </div>
      <div class="modal-body">
        <div class="row" id="ver_reset">
           
        </div>
            
      </div>
    </div>
  </div>
</div>
<script>
function buscar_c(ci){
    $.post('<?php echo base_url();?>backend/Users/buscar_c', {ci}, function(data) {
        $("#ver_usuario").html(data);
    });
}
function reset_usuario(id_usuario){
    $("#modal_reset").modal('show')
    $.post('<?php echo base_url();?>backend/Users/reset_usuario', {id_usuario}, function(data) {
        $("#ver_reset").html(data);
    });
}

function generar_usuario(){
    $('#loading').modal({backdrop: 'static', keyboard: false});
    $.post('<?php echo base_url();?>backend/Users/generar_usuario', function(dato) {
        swal("NOTA!", "CANTIDAD DE ESTUDIANTES GENERADOS CON EXITO SON ("+dato+")", "success");
        setTimeout(function(){
            window.location='';
        },1000);
    });
}
</script>




