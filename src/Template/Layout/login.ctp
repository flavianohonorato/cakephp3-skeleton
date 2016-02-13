
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

    <?= $this->Html->css(['style_login']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<div class="wrapper">
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>

    <ul class="bg-bubbles">
        <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
    </ul>
</div>

</body>
</html>
