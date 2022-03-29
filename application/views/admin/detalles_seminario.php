<!-- Main content -->




<section class="content">



    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="box box-body b-1 text-center no-shadow">
                                <img src="<?= base_url(); ?><?= $sem1->imagen ?>" id="product-image" class="img-fluid" alt="" />
                            </div>
                            <div class="pro-photos">
                                <div class="photos-item item-active">
                                    <img src="<?= base_url(); ?><?= $sem1->imagen ?> " alt="">
                                </div>
                                <div class="photos-item">
                                    <img src="<?= base_url(); ?><?= $sem1->imagen_certificado ?> " alt="">
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <h2 class="box-title mt-0"><?= $sem1->nombre ?></h2>

                            <p><?= $sem1->descripcion ?></p>
                            <a href="#" onclick="zomm_de(); return false;" class="box bg-primary bg-hover-primary pull-up">
                                <div class="box-body">
                                    <div class="d-flex align-items-center">
                                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                            <!-- <span class="text-white icon-Mail font-size-40"></span> -->
                                            <img src="<?= base_url(); ?>img/zoom.png " alt="">
                                        </div>
                                        <div class="ml-10">
                                            <h3 class="text-white mb-0">SUBIR EL ENLACE ZOOM</h3>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="gap-items">
                                <button class="btn btn-success"><i class="mdi mdi-shopping"></i>Mas expositores </button>
                                <button class="btn btn-primary"><i class="mdi mdi-cart-plus"></i> Cambiar imagen de portada</button>
                                <button class="btn btn-warning"><i class="mdi mdi-compare"></i> Subir modelo de certificado</button>
                            </div>
<!--                             <label for="">Confg. de ubicacion y</label>
                            <input type="text" id="y" onblur="actualizarPOsicion('<?= $id_seminario ?>','<?= $posicion[0]->id_posicion ?>','posicion_y',this.value)" value="<?= (!empty($posicion) ? $posicion[0]->posicion_y : 0) ?>">
                            <br>
                            <label for="">Confg.ubicacion x</label>
                            <input type="text" id="x" onblur="actualizarPOsicion('<?= $id_seminario ?>','<?= $posicion[0]->id_posicion ?>','posicion_x',this.value)" value="<?= (!empty($posicion) ? $posicion[0]->posicion_x : 0) ?>"> -->
    
                            <div class="row">
            
                                <div class="box-body">
                                    <div class="d-flex align-items-center">
                                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                            <!-- <span class="text-white icon-Mail font-size-40"></span> -->
                                            <img src="<?= base_url(); ?>img/fily.png " alt="">
                                        </div>
                                        <div class="ml-10">
                                            <h3 class="text-white mb-0">ajustar certificado</h3>

                                        </div>
                                    </div>
                                
                            </a>
                            <?php
                                try{
                            ?>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>posición Y del estudiante<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="text" class="form-control" id="y" onblur="actualizarPOsicion('<?= $id_seminario ?>','<?= $posicion[0]->id_posicion ?>','posicion_y',this.value)" value="<?= (!empty($posicion) ? $posicion[0]->posicion_y : 0) ?>">
                                            <div class="help-block"></div>
                                        </div>
                               
                                    </div>
                                    <div class="form-group">
                                        <h5>posición x del nombre<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="text" class="form-control" id="x" onblur="actualizarPOsicion('<?= $id_seminario ?>','<?= $posicion[0]->id_posicion ?>','posicion_x',this.value)" value="<?= (!empty($posicion) ? $posicion[0]->posicion_x : 0) ?>">
                                            <div class="help-block"></div>
                                        </div>
                               
                                    </div>
                                </div>
                                <h3 class="text-white mb-0">ajustar hoja</h3>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>ancho<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="text" class="form-control" id="y" onblur="actualizarPOsicion('<?= $id_seminario ?>','<?= $posicion[0]->id_posicion ?>','hoja_ancho',this.value)" value="<?= (!empty($posicion) ? $posicion[0]->hoja_ancho : 0) ?>">
                                            <div class="help-block"></div>
                                        </div>
                               
                                    </div>
                                    <div class="form-group">
                                        <h5>alto<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="text" class="form-control" id="x" onblur="actualizarPOsicion('<?= $id_seminario ?>','<?= $posicion[0]->id_posicion ?>','hola_alto',this.value)" value="<?= (!empty($posicion) ? $posicion[0]->hola_alto : 0) ?>">
                                            <div class="help-block"></div>
                                        </div>
                               
                                    </div>
                                </div>
                                <h3 class="text-white mb-0">ajustar QR</h3>
                                <div class="col-12">
                                    <div class="form-group">
                        
                                        <div class="controls">
                                            <input type="text" name="text" class="form-control" id="y" onblur="actualizarPOsicion('<?= $id_seminario ?>','<?= $posicion[0]->id_posicion ?>','qr',this.value)" value="<?= (!empty($posicion) ? $posicion[0]->qr : 0) ?>">
                                            <div class="help-block"></div>
                                        </div>
                               
                                    </div>
                           
                                </div>
                                <h3 class="text-white mb-0">ajustar codigo</h3>
                                <div class="col-12">
                                    <div class="form-group">
                        
                                        <div class="controls">
                                            <input type="text" name="text" class="form-control" id="y" onblur="actualizarPOsicion('<?= $id_seminario ?>','<?= $posicion[0]->id_posicion ?>','codigo',this.value)" value="<?= (!empty($posicion) ? $posicion[0]->codigo : 0) ?>">
                                            <div class="help-block"></div>
                                        </div>
                               
                                    </div>
                           
                                </div>
                            </div>
                            <?php
                                }catch(Exception $e){
                                    echo('No se encontro');
                                }
                            ?>
                            <script>
                                function actualizarPOsicion(id_sem, id, colum, valor) {
                                    $.ajax({
                                        url: '<?php echo base_url() ?>Controller_inscripcion/actualia_posiciones',
                                        type: 'post',
                                        data: {
                                            id_sem,
                                            id,
                                            colum,
                                            valor
                                        },
                                        success: function(resp) {
                                            //$('#lista_estudiantes').html(resp);
                                            //alertsds('actulizada');
                                        },
                                        error: function(e) {
                                            console.log("Ha habido un error: " + e.responseText);
                                        }
                                    });
                                }
                            </script>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
<!-- /.modal -->
<script>
    function zomm_de() {
        $('#zomm_modal').modal('show');
    }
</script>
<div class="modal modal-warning fade" id="zomm_modal">
    <div class="modal-dialog">
        <div class="modal-content bg-warning">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar enlace zomm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="box">

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form id="zomm1" class="form-horizontal form-element">
                        <div class="box-body">
                            <div class="form-group row">
                                <label for="" class="col-sm-2 control-label">Enlace del seminario</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="enlace" name="enlace" placeholder="enlace zoom del seminario" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 control-label">id del zomm</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="idzomm" name="idzomm" placeholder="id zomm" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 control-label">clave del del zomm</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="clave" name="clave" placeholder="clave del zomm" required>
                                </div>
                                <input type="hidden" name="id_seminario" value="<?= $id_seminario ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-info float-right">Guardar</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        $('#zomm1').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: '<?= base_url(); ?>Controller_inscripcion/guardar_zomm',
                type: 'POST',
                data: $('#zomm1').serialize(),

                success: function(response) {
                    console.log(response);
                    Swal.fire(
                        'Registrado',
                        'enlace zomm',
                        'success'
                    )
                }
            });
        });
    });
</script>