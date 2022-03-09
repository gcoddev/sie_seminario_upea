


<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Seminarios</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Seminarios Activos</li>

                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="col-lg-6 col-12">
            <a href="#" onclick="nuevo_seminario(); return false;" class="box bg-danger bg-hover-danger pull-up">
                <div class="" style="background-image: url(https://www.multipurposethemes.com/admin/eduadmin-template/images/svg-icon/color-svg/st-2.svg); background-position: right bottom; background-repeat: no-repeat;">
                    <div class="box-body">
                        <div class="d-flex align-items-center">
                            <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                <span class="text-white icon-Cart2 font-size-40"><span class="path1"></span><span class="path2"></span></span>
                            </div>
                            <div class="ml-10">
                                <h2 class="text-white mb-0">Crear un nuevo seminario</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="row fx-element-overlay">
            <?php $listar = $this->Modelo_estudiante->listar_seminarios(); ?>
            <?php $con = 1; ?>
            <?php if ($listar) : ?>
                <?php foreach ($listar as $value) : ?>
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="box box-default">
                            <div class="fx-card-item">
                                <div class="fx-card-avatar fx-overlay-1"> <img style="width:500px; height:500px;" src="<?= base_url(); ?><?= $value->imagen; ?>" alt="user">
                                    <div class="fx-overlay scrl-up">
                                        <ul class="fx-info">
                                            <li><a class="btn btn-outline image-popup-vertical-fit" href="<?= base_url(); ?><?= $value->imagen; ?>"><i class="mdi mdi-magnify"></i></a></li>
                                            <li><a class="waves-effect waves-light btn mb-5 bg-gradient-danger" onclick="eliminar_estudiante('<?php echo $value->id_capacitacion; ?>')"><i class="mdi mdi-delete"></i>ELIMANAR</a></li>
                                            <li><a class="btn btn-outline" onclick="editar_seminario('<?php echo $value->id_capacitacion; ?>')" href="javascript:void(0);"><i class="mdi mdi-settings"></i>EDITAR</a></li>
                                            <li><a class="btn btn-outline" href="<?= base_url(hasher::make(61, $value->id_capacitacion)) ?>" href="javascript:void(0);"><i class="mdi mdi-settings"></i>detalles</a></li>

                                        </ul>
                                     <!--    <a href="<?= base_url(hasher::make(61, $value->id_capacitacion)) ?>"><button type="button" class="waves-effect waves-light btn mb-5 bg-gradient-warning">MAS DETALLES</button></a> -->
                                        <!-- <a href="<?= base_url()?>Controller_inscripcion/detales_seminario1/".<?$value->id_capacitacion?>'<button type="button" class="waves-effect waves-light btn mb-5 bg-gradient-warning">MAS DETALLES</button></a> -->

                                    </div>
                                </div>
                                <div class="fx-card-content text-left mb-0">
                                    <div class="product-text">
                                        <h2 class="pro-price text-blue"><?php echo $con++; ?></h2>
                                        <h4 class="box-title mb-0">Seminario: <?php echo $value->nombre; ?></h4>
                                        <br>
                                        <small class="text-muted db">Expositor: <?php echo $value->expositor; ?></small>
                                        <br>
                                        <small class="text-muted db">Descripcion: <?php echo $value->descripcion; ?></small>
                                        <br>
                                        <small class="text-muted db">Hora: <?php echo $value->hora; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>

    </section>
    <!-- /.content -->
</div>
<script>
    function eliminar_estudiante(idinscripciones) {
        Swal.fire({
            title: 'INACTIVAR',
            text: 'Esta seguro de BORRAR ',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'SI!'
        }).then((result) => {
            if (result.value) {
                borrar_parentesco(idinscripciones);
            }
        });
    }

    function borrar_parentesco(idinscripciones) {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Controller_estudiante/alimina_seminiario',
            data: {
                idinscripciones: idinscripciones
            },
            //dataType: "dataType",
            success: function(response) {
                //	$(datos_parentesco1()).load(document.URL + datos_parentesco1());
                window.location.reload();
            }
        });
    }

    function editar_seminario(id_se) {
        $('#modal-left').modal('show');
    }

    function nuevo_seminario() {
        $('#nuevo_seminario').modal('show');
    }
</script>
<div class="modal modal-left fade" id="modal-left" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Your content comes here</p>
            </div>
            <div class="modal-footer modal-footer-uniform">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary float-right">Actualizar</button>
            </div>
        </div>
    </div>
</div>
<!-- /////// -->
<div class="modal modal-right fade" id="nuevo_seminario" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Crear seminario</h4>
                    </div>
                    <!-- /.box-header -->
                    <form id="nuevo_seminario123">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nombre seminario</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre seminario" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Descripción seminario</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="text" name="descripcion" class="form-control" placeholder="Detalle seminario" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Costo</label>
                                        <input type="text" name="costo" class="form-control" placeholder="Costo del seminario" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Duración</label>
                                        <input type="text" name="duracion" class="form-control" placeholder="Duracion del seminario" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Fecha Inicio</label>
                                        <input type="date" name="inicio" class="form-control" placeholder="Fecha inicio" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha Fin</label>
                                        <input type="date" name="fin" class="form-control" placeholder="fecha fin" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>expositor</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="text" name="expositor" class="form-control" placeholder="expositor" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Lugar </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="text" name="lugar" class="form-control" placeholder="Lugar del seminario" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Hora </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="text" name="hora" class="form-control" placeholder="Hora" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group">
                                    <label>Imagen portada</label>


                                    <div class="col-sm-6">
                                        <input style="display:none" type="file" name="portada" id="portada" value="ficheros" onchange="document.getElementById('portada1').src= window.URL.createObjectURL(this.files[0])" required>
                                        <div class="text-center">
                                            <label class="label label-info">imagen de la portada</label>
                                        </div>
                                        <img id="portada1" src="<?= base_url() ?>img/afiche.jpg" alt="CI ANVERSO" style="margin:0 auto;display:block;width:300px;height:auto;cursor:pointer;border-radius:8%" onclick="document.getElementById('portada').click()" required>
                                        <br>
                                        <br>
                                        <!--    <div class="text-center">
                                            <button type="button" class="btn btn-primary" onclick="document.getElementById('portada').click()"><i class="fa fa-camera"></i> Tomar/Subir ANVERSO DEL CI</button>
                                        </div> -->
                                        <br>
                                    </div>




                                    <!--   <label class="file">
                                        <input type="file" name="portada" class="nuevaFoto" id="portada" accept="image/*" required>
                                    </label>
                                    <div class="col-xl-4">
                                        <img width="120" height="100" class="visualizar">
                                    </div> -->
                                </div>
                                <div class="form-group">
                                    <label>Modelo del certificado</label>

                                    <div class="col-sm-6">
                                        <input style="display:none" type="file" name="certificado" id="certificado" value="ficheros" onchange="document.getElementById('certificado1').src= window.URL.createObjectURL(this.files[0])" required>
                                        <div class="text-center">
                                            <label class="label label-info">DISEÑO DEL CERTIFICADO</label>
                                        </div>
                                        <img id="certificado1" src="<?= base_url() ?>img/cer.png" alt="CI ANVERSO" style="margin:0 auto;display:block;width:300px;height:auto;cursor:pointer;border-radius:8%" onclick="document.getElementById('certificado').click()" required>
                                        <br>
                                        <br>
                                        <!--    <div class="text-center">
                                            <button type="button" class="btn btn-primary" onclick="document.getElementById('portada').click()"><i class="fa fa-camera"></i> Tomar/Subir ANVERSO DEL CI</button>
                                        </div> -->
                                        <br>
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <div class="modal-footer modal-footer-uniform">

                                    <button type="button" class="btn btn-rounded btn-warning btn-outline mr-1" data-dismiss="modal">
                                        <i class="ti-trash"></i> Cerrar
                                    </button>
                                    <button id="seminario1" type="submit" class="">
                                        <i class=""></i> Crear Seminario
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        $('#seminario1').on('click', function(event) {
            event.preventDefault();
       

            $.ajax({
                url: '<?= base_url(); ?>Controller_inscripcion/nuevo_seminario',
                type: 'POST',
                data: new FormData($('#nuevo_seminario123')[0]),
                cache: false,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                  /*   return false; */
                    swal.fire("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS", "success");
                    setTimeout(function() {
                        window.location.href='<?= base_url() ?>seminario/'+response;
                       
                    }, 1000);{ }
                }
            });



        });

        $(".nuevaFoto").change(function() {
            var imagen = this.files[0];
            if (imagen["type"] != "image/jpeg" &&
                imagen["type"] != "image/png" &&
                imagen["type"] != "image/gif" &&
                imagen["type"] != "image/jpg") {
                $(".nuevaFoto").val('');
                $("#error_img").html('<b style="color:#ff0000;">Formato invalido...</b>');
                $(".visualizar").attr("src", '<?php echo base_url(); ?>img/u.jpg');
            } else {
                if (imagen['size'] > 200000000) {
                    $(".nuevaFoto").val('');
                    $("#error_img").html('<b style="color:#ff0000;">Imagen exede de 2 mg...</b>');
                } else {
                    $("#error_img").html('');
                    var datosImagen = new FileReader;
                    datosImagen.readAsDataURL(imagen);
                    $(datosImagen).on("load", function(event) {
                        var rutaImagen = event.target.result;
                        $(".visualizar").attr("src", rutaImagen);
                    });
                }
            }
        });
        $(".nuevaFoto1").change(function() {
            var imagen = this.files[0];
            if (imagen["type"] != "image/jpeg" &&
                imagen["type"] != "image/png" &&
                imagen["type"] != "image/gif" &&
                imagen["type"] != "image/jpg") {
                $(".nuevaFoto1").val('');
                $("#error_img").html('<b style="color:#ff0000;">Formato invalido...</b>');
                $(".visualizar1").attr("src", '<?php echo base_url(); ?>img/u.jpg');
            } else {
                if (imagen['size'] > 200000000) {
                    $(".nuevaFoto1").val('');
                    $("#error_img").html('<b style="color:#ff0000;">Imagen exede de 2 mg...</b>');
                } else {
                    $("#error_img").html('');
                    var datosImagen = new FileReader;
                    datosImagen.readAsDataURL(imagen);
                    $(datosImagen).on("load", function(event) {
                        var rutaImagen = event.target.result;
                        $(".visualizar1").attr("src", rutaImagen);
                    });
                }
            }
        });
    });
</script>