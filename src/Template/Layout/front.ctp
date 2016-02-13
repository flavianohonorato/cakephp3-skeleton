
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
        'style',
        'font-awesome-4.5.0/css/font-awesome.min'
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <?= $this->Html->script([
        '../vendor/jQuery/jQuery-2.1.4.min',
        'bootstrap.min',
        'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        'classie',
        'cbpAnimatedHeader',
        'functions'
    ]) ?>

</head>

    <body id="page-top" class="index">

        <?= $this->element('front/navigation'); ?>


            <?php echo $this->Flash->render(); ?>


            <?= $this->fetch('content') ?>

        <?= $this->element('front/footer'); ?>

    </body>
</html>
