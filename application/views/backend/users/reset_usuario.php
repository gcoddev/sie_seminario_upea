<div class="col-md-12"><h3>DATOS PERSONALES</h3>

    <div class="alert alert-success"><strong>CARNET :</strong> <?php echo $obj->ci; ?></div>
    <div class="alert alert-info"><strong>NOMBRE Y AP. :</strong> <?php echo $obj->nombre.' '.$obj->paterno.' '.$obj->materno; ?></div>
<?php 
$nombre=mb_strtoupper($obj->nombre,'utf-8');
$a=explode(" ", $nombre); 
$usuario=$a[0].'_'.$obj->ci;
$pass=date("d-m-Y", strtotime($obj->fecha_nac));
?>

</div>    
<div class="col-lg-12">
    <div class="form-group">
        <label class="form-label">NUEVO USUARIO</label> 
        <div class="input-group margin-bottom-15">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <span class="twitter-typeahead" >
            <input type="text" class="form-control" value="<?php echo $usuario; ?>" disabled >
            </span>
        </div>  
    </div>    
</div>
<div class="col-lg-12">
    <div class="form-group">
        <label class="form-label">NUEVA CONTRASEÑA</label> 
        <div class="input-group margin-bottom-15">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <span class="twitter-typeahead" >
            <input type="text" class="form-control" value="<?php echo $pass; ?>" disabled >
            </span>
        </div>  
    </div>    
</div>
<form id="guardar_reset_usuario" method="post">
    <div class="col-lg-12">
        <input type="hidden" name="usuario" value="<?php echo $usuario; ?>"> 
        <input type="hidden" name="pass" value="<?php echo $pass; ?>"> 
        <input type="hidden" name="id_usuario" value="<?php echo $obj->id_usuario ?>">
        <button type="submit" class="btn red btn-outline btn-circle m-b-10 btn-lg"><span class="fa fa-save"></span> GUARDAR DATOS</button>
        <button type="button" class="btn red btn-outline btn-circle m-b-10 btn-lg" data-dismiss="modal"><span class="fa fa-close"></span> CANCELAR</button>
    </div>
</form>
<script>
$("#guardar_reset_usuario").submit(function(event) {
    event.preventDefault();
    $('#loading').modal({backdrop: 'static', keyboard: false});
    $.ajax({
        url:'<?php echo base_url();?>backend/Users/guardar_reset_usuario',
        type:'POST',
        data:$("form").serialize(),
        success:function(){
            swal("NOTA!", "EXITOSAMENTE MODIFICADOS LOS DATOS", "success");
            setTimeout(function(){
                window.location='';
            },1000);
        }
    });
});
</script>