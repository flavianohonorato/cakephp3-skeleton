<section class="content-header">
    <h1>
        Editar Usuário
        <small>- <?= Configure::read('SITE_NAME'); ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= Configure::read('ADMIN_URL');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= Configure::read('ADMIN_URL');?>/users"><i class="fa fa-folder"></i> Usuários</a></li>
        <li class="active">Editar Usuário</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Usuário</h3>
                </div><!-- /.box-header -->

                <?= $this->Form->create($user, array('role' => 'form', 'enctype' => 'multipart/form-data')); ?>
                <div class="box-body">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <!-- Nome -->
                            <div class="form-group">
                                <?= $this->Form->input('first_name', array('class' => 'form-control', 'label' => 'Nome')); ?>
                            </div><!-- .form-group -->
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <!-- Sobrenome -->
                            <div class="form-group">
                                <?= $this->Form->input('last_name', array('class' => 'form-control', 'label' => 'Sobrenome')); ?>
                            </div><!-- .form-group -->
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <!-- Email -->
                            <div class="form-group">
                                <?= $this->Form->input('email', array('class' => 'form-control', 'label' => 'Email')); ?>
                            </div><!-- .form-group -->
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <!-- Username -->
                            <div class="form-group">
                                <?= $this->Form->input('username', array('class' => 'form-control', 'label' => 'Nome de Usuário', 'placeholder' => 'ex: fulanodetal')); ?>
                            </div><!-- .form-group -->
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <?= $this->Form->input('password', array('class' => 'form-control', 'label' => 'Password')); ?>
                            </div><!-- .form-group -->                            
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="form-group">
                                <?= $this->Form->input('perfil', array(
                                    'class' => 'form-control',
                                    'label' => 'Perfil',
                                    'empty' => 'Perfil de usuário',
                                    'options' => array(
                                        'admin' => 'Admistrador',
                                        'editor' => 'Editor',
                                        'author' => 'Autor'
                                    ),
                                    'type' => 'select'
                                )); ?>
                            </div><!-- .form-group -->
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group">
                                <?= $this->Form->input('foto_file', array('type' => 'file', 'label' => 'Avatar')); ?>
                            </div><!-- .form-group -->
                        </div>

                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
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