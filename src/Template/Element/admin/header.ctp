<!-- Logo -->
<a href="<?= Configure::read('ADMIN_URL');?>" class="logo">
  <span class="logo-mini"><b>C</b>3</span>
  <span class="logo-lg"><?= Configure::read('APP_NAME') ?></span>
</a>

<nav class="navbar navbar-static-top" role="navigation">
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
    <li><a href="<?= Configure::read('FRONT_URL') ?>" target="blanck">Acessar site</a></li>
      
      <!-- User Account Menu -->
      <?php $user = $this->request->session()->read('Auth.User'); ?>
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img class="img-responsive" src="" alt=""> 
          
          <span class="hidden-xs">
            <?php echo $user['first_name'] . ' ' . $user['last_name']; ?>
          </span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
              <img src="<?= Configure::read('ADMIN_URL'); ?>/img/admin/avatar.png" alt="<?php echo $user['first_name'] . ' ' . $user['last_name']; ?>" class="img-circle">
            <p>
              <?php echo $user['first_name'] . ' ' . $user['last_name']; ?>
              <?php echo $user['email']; ?>
            </p>
          </li>

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-right">
              <a href="<?= Configure::read('ADMIN_URL');?>/logout" class="btn btn-default btn-flat">Logout</a>
            </div>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</nav>