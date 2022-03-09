<section class="our-work dsn-container dsn-filter p-relative section-margin" data-dsn-title="Lasts Work">
    <div class="projects-list gallery work-gallery d-grid grid-md-2 grid-lg-3 dsn-isotope grid " data-dsn-item=".work-item">
        <?php if ($certificados) : ?>

            <?php foreach ($certificados as $k => $value) : ?>
                <?php $capacitacion =  $this->Modelo_fuctions->RetornaUnRegistroDeUnaTabla('capacitacion', 'id_capacitacion', $value->id_capacitacion, $query = '') ?>
                <div class="projects-list gallery work-gallery ">
       
                      
               
                    <a target="_blank" class="w-100 p-relative effect-ajax" href="<?= base_url(hasher:: make(63, $value->ci , $capacitacion->id_capacitacion ))?>">
                    <div class="icon">
                            <img src="<?= base_url() ?>grida/assets/img/services/mobile.svg" alt="">
                        </div>
                        <div class="content-box">
                            <!-- <h4 class="title-block mt-20"> <?= $value->nombre ?> </h4> -->

                        </div>
                        <div class="img-next-box " data-overlay="1">
                            <img class="" src="<?= base_url($capacitacion->imagen); ?>" alt="" style="width:1000;height:1000;">
                        </div>

                        <div class="">
                            <h4 class="title-block sec-title">
                                <?= $capacitacion->nombre ?>
                            </h4>
                            <div class="metas">
                                <span>DESCARGAR....</span>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endforeach ?>

    </div>
</section>
<?php else : ?>

    <img class="" src="<?= base_url() ?>img/sin_seminario.gif" alt="">
    <h4 class="">
        NO CUENTA CON SEMINARIOS INSCRITOS!!
    </h4>

<?php endif ?>
<script>
function descargar_certificado(id_persona, id_seminario){
  
    Swal.fire({
            title: 'DESCARGAR...',
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'descargar certificado'
        }).then((result) => {
            if (result.value) {
                window.location.href = '<?= base_url(hasher::make(63)) ?>';
            }
        });
}
</script>