<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$i          = 1;
$nbr_groups = ($count_groups > 0) ? ' <span class="badge badge-info">' . $count_groups . '</span>' : NULL;

?>
<div class="top-page-header">
    <div class="page-title">
        <h2>SISTEMA DE TITULOS</h2>
    </div>
    <div class="page-breadcrumb">
        <nav class="c_breadcrumbs">
            <ul>
                <li><a href="<?php echo base_url(Hasher::make(20))?>">INICIO</a></li>
                <li class="active"><a href="">GRUPO</a></li>
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
           <button class="btn red btn-outline btn-circle m-b-10 btn-lg" data-toggle="modal" data-target="#modal-basic"><i class="fa fa-plus"></i> NUEVO GRUPO</button>
           
            <div class="table-responsive">
            <div class="panel-body">
              	<table class="table table-hover table-striped">
					<thead>
						<tr style=" background:#e74c3c;color:#fff; box-shadow: 0px 5px 10px rgb(62, 66, 0);">
							<th>#</th>
							<th>{lang_name}</th>
							<th>{lang_color}</th>
							<th>{lang_description}</th>
							<th>{lang_actions}</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($groups as $group): ?>
						<tr>
							<th scope="row"><?php echo $i++; ?></th>
							<td><?php echo htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8'); ?></td>
							<td>-</td>
							<td><?php echo htmlspecialchars($group->description, ENT_QUOTES, 'UTF-8'); ?></td>
							<td>
							<button type="button" onclick="editar_grupo('<?php echo $group->id; ?>')" class="btn red btn-outline btn-circle m-b-10 btn-sm"> <span class="fa fa-pencil"></span> Editar</button>							
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"  style="background:#e74c3c;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
          <button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
          <h4 class="modal-title text-center"><strong style="color:#fff;">AGREGAR NUEVOS GRUPO</strong> </h4>
        </div>
        <form method="post" id="guardar_nuevo_grupo" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="panel-body">
                  	<div class="col-md-12">
                    	<div class="form-group1 ">
                        	<label>.:::NOMBRE GRUPO :::.</label>
                          	<input type="text" name="group_name" class="form-control" placeholder="Ingresar..." required>
                      	</div>
                  	</div>

                  	<div class="col-md-12">
                    	<div class="form-group1 ">
                        	<label>.:::DESCRIPCION:::.</label>
                         	<input type="text" name="description" class="form-control" placeholder="Ingresar..." >
                      	</div>
                  	</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn red btn-outline btn-circle m-b-10 btn-lg">GUARDAR DATOS</button>
                <button type="button" class="btn red btn-outline btn-circle m-b-10 btn-lg" data-dismiss="modal">CANCELAR</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal" id="modal-editar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"  style="background:#e74c3c;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
          <button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
          <h4 class="modal-title text-center"><strong style="color:#fff;">AGREGAR MODIFICAR GRUPO</strong> </h4>
        </div>
            <div class="modal-body" id="contenido_editar">
        	
            </div>
      </div>
    </div>
</div>
<script>
$("#guardar_nuevo_grupo").submit(function(event) {
    event.preventDefault();
    var formData=new FormData($("#guardar_nuevo_grupo")[0]);
    
    $('#loading').modal({backdrop: 'static', keyboard: false});
    $.ajax({
        url:'<?php echo base_url(); ?>backend/groups/add',
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
function editar_grupo(id){
	$("#modal-editar").modal('show');
	$.post('<?php echo base_url(); ?>backend/groups/editar_grupo', {id}, function(data) {
		$("#contenido_editar").html(data)
	});
}
</script>