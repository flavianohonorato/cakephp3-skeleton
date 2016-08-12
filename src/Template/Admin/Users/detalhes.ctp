    
<section class="content-header">
    <h1>
        Detalhes do Usuário
        <small>-<?= Configure::read('APP_NAME'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= Configure::read('ADMIN_URL');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= Configure::read('ADMIN_URL');?>/users"><i class="fa fa-dashboard"></i> Usuário</a></li>
        <li class="active">Detalhes do Usuário</li>
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
                    <a href="<?= Configure::read('ADMIN_URL');?>/users" class="btn btn-app btn-flat"><i class="fa fa-folder"></i> Usuários</a>
                    <a href="<?= Configure::read('ADMIN_URL');?>/users/adicionar" class="btn btn-app btn-flat"><i class="fa fa-plus-circle"></i> Adicionar</a>
                </div><!-- /.box-body -->
            </div><!-- /.box /.box-info -->
        </div><!-- col-md-3 -->


        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalhes do Usuário</h3>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong><?= __('ID') ?></strong></td>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                </tr>

                                <tr>
                                    <td><strong><?= __('Usuário') ?></strong></td>
                                    <td><?= h($user->name) ?></td>
                                </tr>

                                <tr>
                                    <td><strong><?= __('Email') ?></strong></td>
                                    <td><?= h($user->email) ?></td>
                                </tr>

                            </tbody>
                        </table><!-- /.table table-striped table-bordered -->
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->


        </div><!-- /col-md-9 -->
    </div><!-- /row -->

</section><!-- /.content -->
