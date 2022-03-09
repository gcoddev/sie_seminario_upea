<div class="table-responsive">
<input type="hidden" name="id_estudiante" id="id_estudiante" value="<?php echo $value->id_persona; ?>">
  <div class="panel-body">
    <table class="table table-striped table-bordered" style="border-spacing:0px; width:100%">
      <thead>
          <tr style=" background:#ddd;color:#000; box-shadow: 0px 5px 10px rgb(62, 66, 0);">
              <th>DATOS PERSONALES</th>
          </tr>
      </thead>
      <tbody>
            <tr>
              <td><?php echo $value->nombre; ?> </td>
            </tr>
      </tbody>
    </table>
  </div> 
  
  <a href="<?php echo base_url(Hasher::make(55,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> Matriculacion Virtual 2021</a></br>
  <a href="<?php echo base_url(Hasher::make(56,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> Titulacion Efectiva 2021</a></br>
  <a href="<?php echo base_url(Hasher::make(57,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> Beneficios Estudiantil 2021</a></br>

  <a href="<?php echo base_url(Hasher::make(50,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> CICLO de WEBINARs - (Semana Aniversario de Carrera) </a></br>
  <a href="<?php echo base_url(Hasher::make(51,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> Registro de Software, Videojuegos, Páginas Web y Social Media</a></br>
  <a href="<?php echo base_url(Hasher::make(52,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> CITAS Y REFERENCIAS BIBLIOGRAFICAS</a></br>
  <a href="<?php echo base_url(Hasher::make(53,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> WEBINAR GIS DAY</a></br>
  <a href="<?php echo base_url(Hasher::make(54,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> OPEN EXPO 2021</a>
  
  
  <!-- <a href="<?php echo base_url(Hasher::make(50,$value->id_persona))?>" target="_block" class="btn btn-danger btn-block btn-lg"><span class="fa fa-print"></span> 3 )IMPRIMIR CERTIFICADO</a> -->
</div>