<div class="table-responsive">
<input type="hidden" name="id_estudiante" id="id_estudiante" value="<?php echo $value->id; ?>">
  <div class="panel-body">
    <table class="table table-striped table-bordered" style="border-spacing:0px; width:100%">
      <thead>
          <tr style=" background:#ddd;color:#000; box-shadow: 0px 5px 10px rgb(62, 66, 0);">
              <th>NOMBRE</th>
              <th>APELLIDOS</th>
              
          </tr>
      </thead>
      <tbody>
            <tr>
              <td><?php echo $value->nombre; ?> </td>
              <td><?php echo $value->paterno.' '.$value->materno; ?></td>
             
            </tr>
      </tbody>
    </table>
  </div>
</div>

<button type="submit" class="btn purple btn-outline btn-circle m-b-10 btn-lg" id="boton<?=$id?>" onclick="guarmelossss(<?=$value->id?>,<?=$id?>)"><span class="fa fa-save"></span> GUARDAR DATOS</button>