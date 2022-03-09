<!--======== Grid Menu Start ========-->


<div class="clearfix"></div>
<h1 class="text-danger" align="center">LISTAR cursos</h1>
<div class="c_content">
  <div class="row">
    <div class="col-lg-4 col-xs-12"><br>
      <button class="btn purple btn-outline btn-circle m-b-10 btn-lg" data-toggle="modal" data-target="#nuevo_datos"><i class="fa fa-plus"></i> AGREGAR curso</button>
    </div>


  </div>
  <div class="row">
    <div class="table-responsive">
      <div class="panel-body">
        <table id="datatable_persona" class="table table-striped table-bordered" style="border-spacing:0px; width:100%"><br>
          <thead>
            <tr style=" background:#9B59B6;color:#fff; box-shadow: 0px 5px 10px rgb(62, 66, 0);">
              <th>#</th>
              <th>TEMA</th>
              <th>PONENTES</th>
              <th>DETALLE</th>
              <th>FECHA INICIO</th>
              <th>HORA</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody id="showA">
            <?php $listar = $this->Modelo_estudiante->listar_estudiante_cursos();
            $con = 1;
            foreach ($listar as $value) { ?>
              <tr>
                <td><?php echo $con++; ?></td>
                <td><?php echo $value->nombre; ?></td>
                <td><?php echo $value->expositor; ?></td>
                <td><?php echo $value->descripcion; ?></td>
                <td><?php echo $value->descripcion; ?></td>
                <td><?php echo $value->hora; ?></td>


                <!-- <td><?php echo fecha_literal('2020-12-12', 4); ?></td> -->
                <td>
                  <button class="btn purple btn-outline btn-circle m-b-10 editar-curso" id="<?php echo $value->id_capacitacion; ?>"><span class=""></span> MODIFICAR</button>
                </td>
                <td>
                  <button class="btn purple btn-outline btn-circle m-b-10" onclick="eliminar_estudiante('<?php echo $value->id_capacitacion; ?>')"><span class="fa fa-trash"></span> ELIMINAR</button>
                </td>
              </tr>
            <?php   } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="nuevo_datos" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header" style="background:#9B59B6;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
        <button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title"><strong style="color:#fff;">AGREGAR NUEVOS SEMIANRIOS/</strong></h4>
      </div>
      <form method="post" id="guardar_nuevo_inscripcion_estudiante" enctype="multipart/form-data">

        <div class="modal-body">
          <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
            <div class="form-group">
              <label class="form-label">TEMA </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar TEMA..." name="tema" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">PONENTE</label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar expositor ponente..." name="ponente" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">DETALLE/TRAYECTORIA</label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar descripcion..." name="detalle" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">FECHA </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="date" class="form-control input-lg" placeholder="Ingresar f..." name="fecha" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">FECHA fin inscripcion </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="date" class="form-control input-lg" placeholder="Ingresar f..." name="fecha_fin_insc" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">HORA </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar hora ... 14:00" name="hora" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">IMAGEN </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="file" class="form-control input-lg" placeholder="Ingresar hora ... 14:00" name="file" required>
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
      </form>
      <hr>
    </div>
  </div>
</div>


<div class="modal" id="mod_datos" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header" style="background:#9B59B6;color: #fff; box-shadow: 0px 5px 10px rgb(62, 66, 62);">
        <button type="button" class="close1" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title"><strong style="color:#fff;">AGREGAR NUEVOS SEMIANRIOS/</strong></h4>
      </div>
      <form method="post" id="form_curso">

        <div class="modal-body">
          <div class="col-lg-12 col-md-12 col-sm-12 col-md-12">
            <input type="hidden" class="form-control input-lg" name="id_capacitacion" id="id_capacitacion" required>

            <div class="form-group">
              <label class="form-label">TEMA </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar TEMA..." name="tema" id="nombre" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">PONENTE</label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar expositor ponente..." name="expositor" id="expositor" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">DETALLE/TRAYECTORIA</label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar descripcion..." name="descripcion" id="descripcion" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">FECHA </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="date" class="form-control input-lg" placeholder="Ingresar f..." name="fecha_inicio" id="fecha_inicio" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">FECHA fin inscripcion </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="date" class="form-control input-lg" placeholder="Ingresar f..." name="fecha_fin_insc" id="fecha_fin_insc" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">HORA </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="text" class="form-control input-lg" placeholder="Ingresar hora ... 14:00" name="hora" id="hora" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">IMAGEN </label>
              <div class="input-group margin-bottom-15">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="file" class="form-control input-lg" placeholder="Ingresar hora ... 14:00" name="file" required>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-md-12" id="ver_contenido">

          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" onclick="actualizarm_curso();return false;"><span class="fa fa-save"></span> GUARDAR DATOS</button>
          <button type="button" class="btn purple btn-outline btn-circle m-b-10 btn-lg" data-dismiss="modal"><span class="fa fa-close"></span> CANCELAR</button>
        </div>
      </form>
      <hr>
    </div>
  </div>
</div>
<script>
  $('#showA').on('click', '.editar-curso', function() {
    var id = $(this).attr('id');

    $('#mod_datos').modal('show');
    //alert(id);
    $.ajax({
      type: 'post',
      url: '<?php echo base_url(); ?>Controller_estudiante/editar_nuevo/' + id,
      async: false,
      datatype: 'json',
      success: function(data) {
        //alert(data); 
        var parsedData = JSON.parse(data);
        $('#id_capacitacion').val(parsedData.id_capacitacion);
        $('#nombre').val(parsedData.nombre);
        $('#expositor').val(parsedData.expositor);
        $('#descripcion').val(parsedData.descripcion);
        $('#fecha_inicio').val(parsedData.fecha_inicio);
        $('#fecha_fin_insc').val(parsedData.fecha_fin_insc);
        $('#hora').val(parsedData.hora);
      },
      error: function() {
        alert('error no se edito el dato');
      }
    });
  });


  function actualizarm_curso() {
    var id = $('#id_capacitacion').val();
    var data = new FormData($('#form_curso')[0]);
    $.ajax({
      type: 'post',
      url: '<?php echo base_url(); ?>Controller_estudiante/modificar_nuevo_inscripcion_estudiante/' + id,
      async: false,
      data: data,
      contentType: false,
      processData: false,
      // datatype: 'json',
      success: function(response) {
        alert('imagen');
        if (response == 'error1') {
          swal({
            title: "Tiene que llenar los campos",
            icon: "warning",
            timer: 2000
          });
        } else {
          swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS", "success");
          setTimeout(function() {
            window.location = '';
          }, 1000);
        }
      }
    });
  }
</script>
<script>
  function buscar_carnet(ci) {
    $.post('<?php echo base_url(); ?>Controller_estudiante/buscar_carnet', {
      ci
    }, function(data) {
      $("#ver_contenido").html(data)
    });
  }

  $("#guardar_nuevo_inscripcion_estudiante").submit(function(event) {
    event.preventDefault();
    var formData = new FormData($("#guardar_nuevo_inscripcion_estudiante")[0]);
    var id_estudiante = $("#id_estudiante").val()

    $('#loading').modal({
      backdrop: 'static',
      keyboard: false
    });
    $.ajax({
      url: '<?php echo base_url(); ?>Controller_estudiante/guardar_nuevo_inscripcion_estudiante',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function() {
        swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS", "success");
        setTimeout(function() {
          window.location = '';
        }, 1000);
      }
    });

  });

  function eliminar_estudiante(idinscripciones) {
    swal({
      title: " :::NOTA:::",
      text: "ESTA SEGURO QUE DESEA ELIMINAR EL DATO?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "ACEPTAR",
      cancelButtonText: "CANCELAR",
      closeOnConfirm: false,
      closeOnCancel: false
    }, function(isConfirm) {
      if (isConfirm) {
        $.post('<?php echo base_url(); ?>Controller_estudiante/eliminar_estudiante', {
          idinscripciones
        }, function() {
          swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS", "success");
          setTimeout(function() {
            window.location = '';
          }, 1000);
        });
      } else {
        swal("NOTA", "HAS CANCELADO EL PROCESO :)", "error");
      }
    });
  }
</script>