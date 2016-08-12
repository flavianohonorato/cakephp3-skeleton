<section class="content-header">
    <h1>
        Adicionar Perfil
        <small>- <?= Configure::read('APP_NAME'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= Configure::read('ADMIN_URL');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= Configure::read('ADMIN_URL');?>/users"><i class="fa fa-folder"></i> Perfil</a></li>
        <li class="active">Adicionar Perfil</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Adicionar Perfil</h3>
                </div><!-- /.box-header -->

                <?= $this->Form->create($role, array('role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <div class="box-body">
                    <!-- name -->
		            <div class="form-group">
		                <?= $this->Form->input('name', array('class' => 'form-control', 'label' => 'Nome', 'type' => 'text', 'placeholder' => 'Nome')); ?>
		            </div>

		            <!-- alias -->
		            <div class="form-group">
		                <?= $this->Form->input('alias', array('class' => 'form-control', 'label' => 'Alias', 'type' => 'text', 'placeholder' => 'Alias')); ?>
		            </div>

		            <div class="hr-line-dashed"></div>

		            <div class="form-group">
		                <?= $this->Form->input('description', array('class' => 'form-control', 'label' => 'Descrição', 'type' => 'textarea')); ?>
		            </div><!-- .form-group -->

		            <div class="hr-line-dashed"></div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                <a href="javascript:history.back()" class="btn btn-flat btn-default btn-lg"><i class="fa fa-arrow-left fa-lg"></i> Voltar</a>
                    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-flat btn-primary btn-lg']) ?>
                    <?= $this->Form->end() ?>
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </div><!-- col-md-9 -->

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            
            <!-- Application buttons -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Ações</h3>
                </div>

                <div class="box-body">
                    <a href="<?= Configure::read('ADMIN_URL');?>/users" class="btn btn-app btn-flat"><i class="fa fa-folder"></i> Listar</a>
                    <a href="<?= Configure::read('ADMIN_URL');?>/users" class="btn btn-app bg-maroon btn-flat"><i class="fa fa-exclamation"></i> Cancelar</a>
                </div><!-- /.box-body -->
            </div><!-- /.box /.box-info -->
        </div><!-- col-md-3 -->
    </div><!-- row -->

</section><!-- /.content -->