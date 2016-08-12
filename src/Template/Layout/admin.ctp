
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
        <?= Configure::read('APP_NAME'); ?> |
        <?= $title_for_layout; ?>
    </title>
    <?=
    $this->Html->meta(
        'favicon.ico',
        '/img/favicon.ico',
        ['type' => 'icon']
    );
    ?>

    <?= $this->Html->css([
        'bootstrap.min',
        'font-awesome-4.5.0/css/font-awesome.min',
        'style_admin',
        'skins/skin-blue',
        'skins/_all-skins.min'
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <?= $this->Html->script([
        'jQuery-2.1.4.min',
        'bootstrap.min',
    ]) ?>

</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">
        <?= $this->element('admin/header'); ?>
    </header>


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <?= $this->element('admin/sidebar'); ?>
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php echo $this->Flash->render(); ?>
        <!-- Main content -->
        <?= $this->fetch('content') ?>
    </div><!-- /.content-wrapper -->


    <!-- Main Footer -->
    <?= $this->element('admin/footer'); ?>

</div><!-- ./wrapper -->


</body>
</html>
