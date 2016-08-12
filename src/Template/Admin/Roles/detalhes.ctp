    
<section class="content-header">
    <h1>
        Detalhes do Perfil
        <small>-<?= Configure::read('APP_NAME'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= Configure::read('ADMIN_URL');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= Configure::read('ADMIN_URL');?>/perfil"><i class="fa fa-dashboard"></i> Perfil</a></li>
        <li class="active">Detalhes do Perfil</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <!-- Application buttons -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Ações</h3>
                </div>

                <div class="box-body">

                    <div class="btn-group">
                        <ul class="dropdown-menu" role="menu">
                            <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $role->id]) ?> </li>
                            <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
                        </ul>
                    </div><!-- btn-group-->
                    <a href="<?= Configure::read('ADMIN_URL');?>/perfil" class="btn btn-app btn-flat"><i class="fa fa-folder"></i> Listar</a>
                    <a href="<?= Configure::read('ADMIN_URL');?>/perfil/adicionar" class="btn btn-app btn-flat"><i class="fa fa-plus-circle"></i> Adicionar</a>
                </div><!-- /.box-body -->
            </div><!-- /.box /.box-info -->
        </div><!-- col-md-3 -->


        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalhes do Perfil "<strong><?= $role->name ?></strong>"</h3>
                </div><!-- /.box-header -->

                <div class="box-body no-padding">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong><?= __('ID') ?></strong></td>
                                    <td><?= $this->Number->format($role->id) ?></td>
                                </tr>

                                <tr>
                                    <td><strong><?= __('Nome') ?></strong></td>
                                    <td><?= h($role->name) ?></td>
                                </tr>

                                <tr>
                                    <td><strong><?= __('Alias') ?></strong></td>
                                    <td><?= h($role->alias) ?></td>
                                </tr>

                                <tr>
                                	<td><strong>Criado em</strong></td>
                                	<td><?= $this->Time->format($role->created,'dd-MM-YYYY',null);?></td>
                                </tr>

                                <tr>
                                	<td><strong>Última Alteração</strong></td>
                                	<td><?= $this->Time->format($role->modified,'dd-MM-YYYY',null);?></td>
                                </tr>

                            </tbody>
                        </table><!-- /.table table-striped table-bordered -->
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->


        </div><!-- /col-md-9 -->
    </div><!-- /row -->

</section><!-- /.content -->
