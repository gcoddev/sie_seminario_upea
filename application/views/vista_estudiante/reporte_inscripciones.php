<!--======== Grid Menu Start ========-->
 
<div class="top-page-header" style=" box-shadow: 0px 5px 10px rgb(231, 76, 60, 0.5);">
    <div class="page-breadcrumb ">
        <nav class="c_breadcrumbs">
            <ul>
                <li><a href="<?php echo base_url(Hasher::make(6)); ?>">INICIO</a></li>
                <li class="active"><a href="<?php echo base_url(Hasher::make(22)); ?>">REPORTE</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="c_panel top_bordered_danger" style=" box-shadow: 0px 5px 10px rgb(231, 76, 60, 0.5);">
      <div class="">
        <div class="clearfix"></div>
        <h1 class="text-danger" align="center">GENERAR REPORTE</h1>
        <div class="c_content">
            <div class="row">
            <form method="post" id="buscar_datos_fechas">
              <div class="col-lg-4 col-md-4 col-sm-6 col-md-12">
                  <div class="form-group">
                      <label class="form-label">FECHA DE INICIO</label> 
                      <div class="input-group margin-bottom-15">
                          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                          <input type="date" class="form-control" name="fecha_i" required>
                      </div>  
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-md-12">
                  <div class="form-group">
                      <label class="form-label">FECHA FINAL</label> 
                      <div class="input-group margin-bottom-15">
                          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                          <input type="date" class="form-control" name="fecha_f" value="<?php echo date('Y-m-d') ?>" required>
                      </div>  
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-md-12">
                  <div class="form-group"><br>
                     <button type="submit" class="btn purple btn-outline btn-circle m-b-10 btn-lg"><span class="fa fa-save"></span> BUSCAR DATOS</button>
                  </div>
                </div>
            </form>
            </div>
            <div class="row">
                
              <div class="table-responsive">
                <div class="panel-body" id="ver_contenido">
                
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$("#buscar_datos_fechas").submit(function(event) {
    event.preventDefault();
    $.ajax({
        url:'<?php echo base_url();?>Controller_estudiante/buscar_datos_fechas',
        type:'POST',
        data:$("form").serialize(),
        success:function(dat){
          $("#ver_contenido").html(dat)
        }
    });
});
</script>