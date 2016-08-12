<section class="content-header">
    <h1>
        Perfil
        <small>- <?= Configure::read('APP_NAME'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= Configure::read('ADMIN_URL');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Perfil</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Listagem de Perfis</h3>
                </div><!-- /.box-header -->

                <div class="box-body no-padding">

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name', __('Nome')); ?></th>
                            <th><?= $this->Paginator->sort('alias', __('Alias')); ?></th>
                            <th><?= $this->Paginator->sort('created', __('Criado em')); ?></th>
                            <th class="text-center"><?= __('Ações') ?></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($roles as $role) : ?>
                    <tr>
                        <td><?= $role->id; ?></td>
                        <td><?= $role->name; ?></td>
                        <td><?= $role->alias; ?></td>
                        <td><?= $this->Time->format($role->created,'dd-MM-YYYY',null);?></td>
                        <td><?= $this->Time->format($role->modified,'dd-MM-YYYY',null);?></td>
                        <td class="text-center">
                            <a href="<?= Configure::read('ADMIN_URL'); ?>/roles/detalhes/<?= $role->id; ?>" class="btn btn-success btn-flat btn-sm">
                                <i class="fa fa-eye fa-lg"></i>
                            </a>
                            <a href="<?= Configure::read('ADMIN_URL'); ?>/perfil/editar/<?= $role->id; ?>" class="btn btn-info btn-flat btn-sm">
                                <i class="fa fa-pencil fa-lg"></i>
                            </a>
                            <?php
                            echo $this->Html->link(
                                "Del",
                                "#",
                                array("class"=>"btn btn-danger delete-btn btn-flat btn-sm", "data-id"=>$role->id)
                            );
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                        </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
            
        </div><!-- col-md-9 -->


        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Ações</h3>
                </div>

                <div class="box-body">
                    <a href="<?= Configure::read('ADMIN_URL');?>/users" class="btn btn-app btn-flat"><i class="fa fa-folder"></i> Usuários</a>
                    <a href="<?= Configure::read('ADMIN_URL');?>/perfil/adicionar" class="btn btn-app btn-flat"><i class="fa fa-plus-circle"></i> Adicionar</a>

                </div><!-- /.box-body -->
            </div><!-- /.box /.box-info -->

        </div><!-- col-md-3 -->
    </div><!-- row -->

</section><!-- /.content -->


<a data-target="#ConfirmDelete" role="button" data-toggle="modal" id="trigger"></a>
<div class="modal fade" id="ConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Deletar Registro</h4>
            </div>
            <div class="modal-body">
                Deseja realmente apagar este registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left btn-lg" data-dismiss="modal">Cancelar</button>
                <div id="ajax_button"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".delete-btn").click(function(){
        $("#ajax_button").html("<a href='/admin/perfil/delete/"+ $(this).attr("data-id")+"' class='btn btn-danger btn-flat btn-lg'>Confirmar</a>");
        $("#trigger").click();
    });
</script>
