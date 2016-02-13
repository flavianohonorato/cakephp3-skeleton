<section class="sidebar">

  <!-- Sidebar user panel -->
  <?php $user = $this->request->session()->read('Auth.User'); ?>
  <div class="user-panel">
    <div class="pull-left image">
        <img src="<?= Configure::read('FRONT_URL'); ?>/img/admin/avatar.png" alt="<?php echo $user['first_name'] . ' ' . $user['last_name']; ?>" class="img-circle">
    </div>
    <div class="pull-left info">
      <p><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></p>
    </div>
  </div>

  
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">Dashboard Menu</li>

    <!-- PAGINAS  -->
    <li>
      <a href="<?= Configure::read('ADMIN_URL');?>/paginas"><i class="fa fa-tasks"></i> <span>Páginas</span></a>
    </li>

    <!-- USUÁRIOS -->
    <li class="treeview">
      <a href="#"><i class="fa fa-user"></i> <span>Usuários</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="<?= Configure::read('ADMIN_URL');?>/users"><i class="fa fa-bars"></i> Listar</a></li>
        <li><a href="<?= Configure::read('ADMIN_URL');?>/users/adicionar"> <i class="fa fa-user-plus"></i>Adicionar</a></li>
      </ul>
    </li>
  </ul><!-- /.sidebar-menu -->
</section><!-- /.sidebar -->