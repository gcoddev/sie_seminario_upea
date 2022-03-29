<div class="col-12">

  <div class="box">
    <div class="box-header with-border">
      <?php $sem = $this->Modelo_fuctions->RetornaUnRegistroDeUnaTablaBD('capacitacion', 'id_capacitacion', $sem, $query = '') ?>
      <h3 class="box-title"><?= $sem->nombre ?></h3>
    </div>
    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">
      Registrar nuevo postulante
    </button>
    <li><a class="btn btn-outline" href="<?= base_url(hasher::make(61, $sem->id_capacitacion)) ?>" href="javascript:void(0);"><i class="mdi mdi-settings"></i>detalles</a></li>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>paterno</th>
              <th>materno</th>
              <th>ci</th>
              <th>Stado certificado</th>
              <th>fecha inscripcion</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($lista) : ?>
              <?php foreach ($lista as $val1) : ?>
                <tr>
                  <?php $dat1 = $this->Modelo_fuctions->RetornaUnRegistroDeUnaTablaBD('base_upea.vista_persona', 'id',  $val1->id_persona, $query = '') ?>
                  <?php if ($dat1) : ?>
                    <td><?= $dat1->nombre ?></td>
                    <td><?= $dat1->paterno ?></td>
                    <td><?= $dat1->materno ?></td>
                    <td><?= $dat1->ci ?></td>
                    <?php if ($val1->certificado == 1) : ?>
                      <td>Con Certificado</td>
                    <?php else : ?>
                      <td>Sin Certificado</td>
                    <?php endif ?>
                    <td><?= $val1->fecha_insc ?></td>
                  <?php else : ?>
                    <?php $dat2 = $this->Modelo_fuctions->RetornaUnRegistroDeUnaTablaBD('persona_exterior', '	id',  $val1->id_persona, $query = '') ?>

                    <td><?= $dat2->nombre ?></td>
                    <td><?= $dat2->paterno ?></td>
                    <td><?= $dat2->materno ?></td>
                    <td><?= $dat2->ci ?></td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  <?php endif ?>

                </tr>

              <?php endforeach ?>
            <?php endif ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">cerrar</h4>
          </div>
          <div id="contacto1" class="single-contact dsn-container p-relative section-margin" data-dsn-title="Registro">
          <div class="modal-body">
            <h2 class="heading-h2">INGRESE SU NUMERO DE CARNET para poder participar del seminario</h2>

            <div class="form-group">
              <div class="entry-box d-flex align-items-center">
                <label class="mr-20"><i class="fas fa-user heading-color"></i>C.I.</label>
                <input id="num_carnet" type="number" name="num_carnet" placeholder="Ingrese su número de carnet" required="required" data-error="el numero de carnet es obligatorio." style="color:green; background-color:#02648a91; font-size:28px;">
              </div>

            </div>

            <a href="#" onclick="revisar_persona('<?= $sem->id_capacitacion ?>','<?= $sem->descripcion ?>'); return false;" class="link-custom v-light background-main image-zoom move-circle mt-30" data-dsn="parallax">INSCRIBIRSE AL SEMINARIO</a>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
  

    </div>
  </div>
  <script>
    function revisar_persona(id_seminario, seminario) {
      console.log(id_seminario);
      var carnet = $('#num_carnet').val();
      console.log(carnet);
     // return false; 
      if (carnet.length > 4) {
        $.ajax({
          type: "POST",
          url: "<?= base_url(hasher::make(59)) ?>",
          data: {
            carnet,
            id_seminario
          },

          success: function(response) {
            console.log(response);
            if (response == 4) {

              Swal.fire({
                title: 'Sus datos no se encuentra registrado en nuestro sistema',
                text: "Desea registrarse????",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si ¡¡ deseo registrarme'
              }).then((result) => {
                if (result.isConfirmed) {
                  var dat = ' <div class="section-title">
                        <span class="tag-heading p-10 mb-15 background-section heading-color">Registro nuevo</span>
                        <h2 class="heading-h2">por favor registre sus datos para poder participar del seminario</h2>
                    </div>

                    <div class="d-grid grid-lg-2">


                        <div class="form-box d-flex align-items-center">

                            <form id="registro_form" class="form w-100" method="post" action="" data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group">
                                        <div class="entry-box d-flex align-items-center">
                                            <label class="mr-20"><i class="fas fa-user heading-color"></i></label>
                                            <input id="name" type="text" name="name" placeholder="Nombres" required="required" data-error="nombre is required.">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="entry-box d-flex align-items-center">
                                            <label class="mr-20"> <i class="fas fa-at heading-color"></i></label>
                                            <input id="paterno" type="text" name="paterno" placeholder="Paterno" required="required" data-error="Apellido paterno is required.">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="entry-box d-flex align-items-center">
                                            <label class="mr-20"> <i class="fas fa-at heading-color"></i></label>
                                            <input id="materno" type="text" name="materno" placeholder="materno" required="required" data-error="Apellido Materno is required.">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="entry-box d-flex align-items-center">
                                            <label class="mr-20"> <i class="fas fa-at heading-color">profeción</i></label>
                                            <input id="profecion" type="text" name="profecion" placeholder="profeción o institucion" required="required" data-error="Apellido Materno is required.">
                                        </div>

                                    </div>
                                    <div class="entry-box d-flex align-items-center">
                                        <label class="mr-20"> <i class="fas fa-at heading-color"></i></label>
                                        <input id="carnet123" type="number" name="carnet123" placeholder="CI" required="required" data-error="CI is required.">
                                        <div class="entry-box d-flex align-items-center">
                                            <label for="">seleccione el expedido</label>
                                            <div class="select">
                                                <select id="exp" name="exp">
                                                    <option value="">EXPEDIDO:</option>
                                                    <option value="LP">LA PAZ</option>
                                                    <option value="OR">ORURO</option>
                                                    <option value="CBBA">COCHABAMBA</option>
                                                    <option value="CH">CHUQUISACA</option>
                                                    <option value="PND">PANDO</option>
                                                    <option value="SC">SANTA CRUZ</option>
                                                    <option value="PT">POTOSÍ</option>
                                                    <option value="BN">BENI</option>
                                                    <option value="TJ">TARIJA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                          
                                    <input type="hidden" name="id_seminario"  value='<?= $sem->id_capacitacion ?>'>
                               

                                </div>
                                <div class="text-right">
                                    <div class="heading-h2" >
                                        <input onclick="registrar(); return false;" type="submit" value="REGISTRARSE" class="">
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>';
                  $('#contacto1').html(dat);
                }
              })

            } else if (response == 1) {
              Swal.fire({
                title: 'Usted ya se en cuentra inscrito',
                text: 'EN EL SEMINARIO: ' + seminario,
                icon: 'error',
                showCancelButton: false
              });
            } else if (response == 2) {
              Swal.fire({
                title: 'SE REALIZÓ EL REGISTRO AL SEMINARIO: ',
                text: seminario,
                icon: 'success',
                showCancelButton: false
              });

            }
          }
        });
      } else {
        Swal.fire({
          title: 'Registre un ci válido',
          text: 'POR FAVOR',
          icon: 'error',
          showCancelButton: false
        });
      }

    }
  </script>
  <script>
    function registrar() {
        var dat = $('#registro_form').serialize();

        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Controller_inscripcion/registrar_persona",
            data: dat,
            success: function(response) {
                Swal.fire({
                    title: '',
                    text: response ,
                    icon: 'error',
                    showCancelButton: false
                });
                setTimeout(function(){
	               window.location='';
	          },1000);
            }

        });
    }
</script>