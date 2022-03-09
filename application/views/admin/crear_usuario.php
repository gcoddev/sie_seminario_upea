<?php if ($datos1) : ?>
    <div class="modal-header">
        <h4 class="modal-title"><?= $datos1->nombre ?> <?= $datos1->paterno ?> <?= $datos1->materno ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
    </div>

    <form method="post" id="guardar_usuario">
        <div class="form-group">
            <h5>Seleccionar grupo<span class="text-danger">*</span></h5>
            <div class="box-body">

                <div class="demo-radio-button">
                    <?php foreach ($grupos as $gg) : ?>
                        <input name="grup" value="<?= $gg->id ?>" type="radio" id="<?= $gg->id ?>" class="with-gap" >
                        <label for="radio_7"><?= $gg->name ?></label>
                    <?php endforeach ?>
                </div>

            </div>
            <div class="box-header with-border">
                    <i class="fa fa-check-circle text-black"></i>

                    <h4 class="box-title">Basic Radio Button Design Colors</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="demo-radio-button">
                            <input name="group4" type="radio" id="radio_7" class="radio-col-primary" checked />
                            <label for="radio_7">Primary</label>
                            <input name="group4" type="radio" id="radio_9" class="radio-col-success" />
                            <label for="radio_9">Success</label>
                            <input name="group4" type="radio" id="radio_10" class="radio-col-info" />
                            <label for="radio_10">Info</label>
                            <input name="group4" type="radio" id="radio_12" class="radio-col-warning" />
                            <label for="radio_12">Warning</label>
                            <input name="group4" type="radio" id="radio_13" class="radio-col-danger" />
                            <label for="radio_13">Danger</label>
                        </div>

                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-info float-right">Guardar</button>
            </div>

        </form>
    <?php else : ?>
        <div class="modal-header">
            <h4 class="modal-title">DATOS NO ENCONTRADOS</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
        </div>
    <?php endif ?>