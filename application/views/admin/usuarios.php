<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">Usuarios</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page"></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>

<section class="content">
    <a onclick="nuevo_usuario(); return false;" class="btn btn-app btn-warning" href="#">
        <span class="badge bg-primary">00</span>
        <i class="fa fa-users"></i> Nuevo Usuario
    </a>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="productorder" class="table table-hover no-wrap product-order" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>

                                    <th>email</th>
                                    <th>Quantity</th>
                                    <th></th>
                                    <th>Estado</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?= $user->first_name ?></td>
                                        <td><?= $user->last_name ?></td>

                                        <td><?= $user->email ?></td>
                                        <td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?></td>
                                        <td><?php echo anchor("auth/edit_user/" . $user->id, 'Edit'); ?></td>
                                        <td>
                                            <?php foreach ($user->groups as $group) : ?>
                                                <?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
                                            <?php endforeach ?>
                                        </td>
                                        <td><span class="badge badge-pill badge-success">Paid</span></td>
                                        <td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
                                                <i class="ti-marker-alt"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p><?php echo anchor('auth/create_user', lang('index_create_user_link')) ?> | <?php echo anchor('auth/create_group', lang('index_create_group_link')) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    function nuevo_usuario() {
        $('#busca_ci1').modal('show');
    }
    function buscar_ci1(ci1){
        if (ci1.length >= 4) {
           $.ajax({
                type: "POST",
                url: "<?php echo base_url(Hasher::make(65)); ?>",
                data: {
                    ci1: ci1
                },

                success: function(response) {
                    $("#crear_1").html(response)
                }
            }); 

        }

    }
</script>
<div class="modal modal-warning fade" id="busca_ci1">
    <div class="modal-dialog">
        <div class="modal-content bg-warning">
            <div class="form-group">
                <label>Número de carnet</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ti-user"></i></span>
                    </div>
                    <input onkeyup="buscar_ci1(this.value)" type="number" id="ci1" name="ci1" class="form-control" placeholder="C.I.">
                </div>
            </div>
        </div>
        <div id="crear_1" class="modal-content">
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>