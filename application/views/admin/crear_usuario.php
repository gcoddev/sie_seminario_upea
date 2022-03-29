<?php if ($datos1) : $lista=$datos1->ci?>
    <div class="modal-header">
        <h4 class="modal-title"><?= $datos1->nombre ?> <?= $datos1->paterno ?> <?= $datos1->materno ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
    </div>

        <form method="post" id="guardar_usuario">
            <input type="hidden" value="<?= $datos1->id ?>" name="id">
            <div class="form-group">
                <h5>Seleccionar grupo<span class="text-danger">*</span></h5>
                <div class="box-body">

                    <div class="demo-radio-button">
                        <?php foreach ($grupos as $gg) : ?>
                            <input name="grupo_<?= $gg->id ?>" value="<?= $gg->id ?>" type="checkbox" id="<?= $gg->id ?>" class="with-gap" >
                            <label for="<?= $gg->id ?>"><?= $gg->name ?></label>
                        <?php endforeach ?>
                    </div>

                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn
 btn-info float-right">Guardar</button>
                </div>

        </form>
    <?php else : ?>
        <div class="modal-header">
            <h4 class="modal-title">DATOS NO ENCONTRADOS</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
        </div>
    <?php endif ?>


    <script>
          $("#guardar_usuario").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '<?= site_url(Hasher::make(67)); ?>',
                type: 'POST',
                data: $(this).serializeArray(),
                success:function(response){
                    location.reload()
                }
            });
        //    console.log(ci);
        });
    </script>

    <div id="fily"></div>