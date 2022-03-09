<!--======== Grid Menu Start ========-->
 
<div class="top-page-header" style=" box-shadow: 0px 5px 10px rgb(231, 76, 60, 0.5);">
    <div class="page-breadcrumb ">
        <nav class="c_breadcrumbs">
            <ul>
                <li><a href="<?php echo base_url(Hasher::make(6)); ?>">INICIO</a></li>
                <li class="active"><a href="<?php echo base_url(Hasher::make(21)); ?>">INSCRIPCION</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="c_panel top_bordered_danger" style=" box-shadow: 0px 5px 10px rgb(231, 76, 60, 0.5);">
      <div class="">
        <div class="clearfix"></div>
        <h1 class="text-danger" align="center">LISTAR ESTUDIANTE INSCRITO</h1>
        <div class="c_content">
            <div class="row">
                <!-- <div class="col-lg-4 col-xs-12"><br>
                  <button class="btn purple btn-outline btn-circle m-b-10 btn-lg" data-toggle="modal" data-target="#nuevo_datos"><i class="fa fa-plus"></i> AGREGAR ESTUDIANTE</button>
                </div> -->
                
              
            </div>
            <div class="row">
              <div class="table-responsive">
                <div class="panel-body">
                  <table id="datatable_persona" class="table table-striped table-bordered" style="border-spacing:0px; width:100%"><br>
                    <thead>
                      <tr style=" background:#9B59B6;color:#fff; box-shadow: 0px 5px 10px rgb(62, 66, 0);">
                          <th>#</th>
                          <th>CARNET</th>
      				            <th>NOMBRE</th>
                          <th>APELLIDOS</th>
                          <th>CURSO</th>
      				            <th>ENTREGA CERTIFICADO</th>
      				            <th>FECHA</th>
      				            <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $listar=$this->Modelo_estudiante->listar_estudiante_inscrito();
                    $con=1; foreach ($listar as $value) { ?>
                          <tr>
                            <td><?php echo $con++; ?></td>
                            <td><?php echo $value->ci.' '.$value->expedido; ?></td>
                            <td><?php echo $value->persona; ?></td>
                            <td><?php echo $value->paterno.' '.$value->materno; ?></td>
                            <td><?php echo $value->curso; ?></td>
                            <td align="center"><?php if($value->certificado=='1'){ echo mb_strtoupper('ENTREGADO','utf-8'); }else{ echo "...";}
                             ?></td>
                            <td><?php echo fecha_literal($value->fecha_insc,4); ?></td>
                            <td>
                            	<button class="btn purple btn-outline btn-circle m-b-10" onclick="eliminar_estudiante('<?php echo $value->id_inscripcion; ?>')"><span class="fa fa-trash"></span>	ELIMINAR</button>
                            </td>
                          </tr>
                      <?php   } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="nuevo_datos" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header" style="background:#9B59B6;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
        <button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title"><strong style="color:#fff;">AGREGAR NUEVOS ESTUDIANTE</strong></h4>
      </div>
      <form method="post" id="guardar_nuevo_inscripcion_estudiante" enctype="multipart/form-data">
            
      <div class="modal-body">
          	<div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
	            <div class="form-group">
	                <label class="form-label">CARNET DE IDENTIDAD</label> 
	                <div class="input-group margin-bottom-15">
	                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
	                    <input type="text" onkeyup="buscar_carnet(this.value)" class="form-control input-lg" placeholder="Ingresar carnet..."  min="0" maxlength="20" name="ci" required>
	                </div>  
	            </div>
         	</div>
         	<div class="col-lg-12 col-md-12 col-sm-12 col-md-12" id="ver_contenido">
         		
         	</div>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn purple btn-outline btn-circle m-b-10 btn-lg"><span class="fa fa-save"></span> GUARDAR DATOS</button>
          <button type="button" class="btn purple btn-outline btn-circle m-b-10 btn-lg" data-dismiss="modal"><span class="fa fa-close"></span> CANCELAR</button>
      </div>
      </form><hr>
    </div>
  </div>
</div>

<script>
function buscar_carnet(ci){
	$.post('<?php echo base_url(); ?>Controller_estudiante/buscar_carnet', {ci}, function(data) {
		$("#ver_contenido").html(data)
	});
}

  $("#guardar_nuevo_inscripcion_estudiante").submit(function(event) {
    event.preventDefault();
    var formData=new FormData($("#guardar_nuevo_inscripcion_estudiante")[0]);
    var id_estudiante=$("#id_estudiante").val()
    if (id_estudiante>0) {
	    $('#loading').modal({backdrop: 'static', keyboard: false});
	    $.ajax({
	        url:'<?php echo base_url(); ?>Controller_estudiante/guardar_nuevo_inscripcion_estudiante',
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
  function eliminar_estudiante(idinscripciones){
    swal({ title: " :::NOTA:::", text: "ESTA SEGURO QUE DESEA ELIMINAR EL DATO?", type: "warning", showCancelButton: true, confirmButtonColor: "#DD6B55", confirmButtonText: "ACEPTAR", cancelButtonText: "CANCELAR", closeOnConfirm: false, closeOnCancel: false }, function(isConfirm){ 
      if (isConfirm) { 
      $.post('<?php echo base_url(); ?>Controller_estudiante/eliminar_estudiante', {idinscripciones}, function() {
          swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS", "success");
          setTimeout(function(){
               window.location='';
          },1000);
      });
      } else { 
        swal("NOTA", "HAS CANCELADO EL PROCESO :)", "error");
      } 
    });
  }

</script>