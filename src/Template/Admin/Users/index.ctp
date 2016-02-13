<section class="content-header">
    <h1>
        Usuários
        <small>- <?= Configure::read('SITE_NAME'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= Configure::read('ADMIN_URL');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Categorias</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Listagem de Usuários</h3>
                    <div class="box-tools">
                        <div class="input-group" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Pesquisar" />
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->

                <div class="box-body no-padding">

                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('username', __('Username')); ?></th>
                            <th><?= $this->Paginator->sort('first_name', __('Nome')); ?></th>
                            <th><?= $this->Paginator->sort('email', __('Email')); ?></th>
                            <th><?= $this->Paginator->sort('perfil', __('Perfil')); ?></th>
                            <th><?= $this->Paginator->sort('created', __('Criado em')); ?></th>
                            <th class="text-center"><?= __('Ações') ?></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->username) ?></td>
                                <td><?= h($user->first_name) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->perfil) ?></td>
                                <td><?= $this->Time->format($user->created,'dd-MM-YYYY',null);?></td>
                                <td class="text-center">
                                    <?= $this->Html->link(__('Detalhes'), ['action' => 'detalhes', $user->id], ['class' => 'btn btn-info btn-flat btn-xs']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'editar', $user->id], ['class' => 'btn btn-primary btn-flat btn-xs']) ?>
                                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'deletar', $user->id],
                                        ['confirm' => __('Tem certeza ue quer apagar este registro?', $user->id), 'class' => 'btn btn-sm btn-danger btn-flat btn-xs']); ?>
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
                    <a href="<?= Configure::read('ADMIN_URL');?>/posts" class="btn btn-app btn-flat"><i class="fa fa-folder"></i> Posts</a>
                    <a href="<?= Configure::read('ADMIN_URL');?>/users/adicionar" class="btn btn-app btn-flat"><i class="fa fa-plus-circle"></i> Adicionar</a>

                </div><!-- /.box-body -->
            </div><!-- /.box /.box-info -->

        </div><!-- col-md-3 -->
    </div><!-- row -->

</section><!-- /.content -->
