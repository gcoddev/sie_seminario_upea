<div class="col-md-12"><h3>DATOS PERSONALES</h3>

    <div class="alert alert-success"><strong>CARNET :</strong> <?php echo $obj->ci; ?></div>
    <div class="alert alert-info"><strong>NOMBRE Y AP. :</strong> <?php echo $obj->nombre.' '.$obj->paterno.' '.$obj->materno; ?></div>
    <div class="col-md-12">
      <div class="form-group">
          <label>.:::ASIGNAR CARRERA ACARGO:::.</label>
            <select name="dpto" id="dpto" class="form-control" required>
              <option></option>
              <option value="LP">LA PAZ</option>
              <option value="BN">BENI</option>
              <option value="CBB">COCHABAMBA</option>
              <option value="SCZ">SANTA CRUZ</option>
              <option value="TJ">TARIJA</option>
              <option value="PD">PANDO</option>
              <option value="OR">ORURO</option>
              <option value="PT">POTOSI</option>
              <option value="SC">SUCRE</option>
            </select>
        </div>
    </div>
    <h3>ROL / TIPO USUARIOS</h3>

    <div class="row" id="cargar_rol">
        <?php foreach ($this->db->get("dp_auth_groups")->result() as $t_use) { 
            $s=0;$idd=0;
            foreach ($this->db->query("SELECT * FROM dp_auth_users_groups WHERE user_id='$obj->id_usuario' ")->result() as $listar_marcado) {
                if ($t_use->id==$listar_marcado->group_id) {
                  $s=1; 
                  $idd=$t_use->id;
                } 
            } 
            if($s!=0){ 
            echo '<label class="switch-input primary">
                  <input type="checkbox" checked onclick="eliminar_rol_usuario('.$idd.')"  >
                  <i data-on="SI" data-off="NO"></i> >>>'.$t_use->name.'
                </label>';
            }else{ 
              echo '<label class="switch-input primary">
                  <input type="checkbox" onclick="nuevo_rol_usuario('.$t_use->id.','.$obj->id_usuario.')" >
                  <i data-on="SI" data-off="NO"></i> >>>'.$t_use->name.'
                </label>';
            }
            
        } ?>
    </div>
</div>
<input type="hidden" id="ci" value="<?php echo $obj->ci ?>">
<input type="hidden" id="id_usuario" value="<?php echo $obj->id_usuario ?>">
<script>
function inicio(){
    var ci=$("#ci").val()
    $.post('<?php echo base_url();?>backend/Users/buscar_c', {ci}, function(data) {
        $("#ver_usuario").html(data);
    });
}
function nuevo_rol_usuario(id_rol,id_usuario){
    $.post('<?php echo base_url();?>backend/Users/nuevo_rol_usuario', {id_rol,id_usuario}, function(data) {
        alertify.success("ASIGNADO CON EXITO... ");
        inicio()
    });
}
function eliminar_rol_usuario(idd){
    var id_usuario=$("#id_usuario").val();
    // alert(idd+' '+id_usuario)
    $.post('<?php echo base_url();?>backend/Users/eliminar_rol_usuario', {idd,id_usuario}, function(data) {
        alertify.error("ELIMINADO CON EXITO... ");
        inicio()
    });
}
</script>