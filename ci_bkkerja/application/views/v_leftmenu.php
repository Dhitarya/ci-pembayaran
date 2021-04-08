<div class="left_col scroll-view">
  <div class="navbar nav_title" style="border: 0;">
    <a href="<?php echo base_url('main') ?>" class="site_title"><span>Pendaftaran Kerja</span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="<?php echo base_url() ?>.jpg" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Selamat Datang,</span>
      <h2>aaa</h2>
    </div>
  </div>
  <!-- /menu profile quick info -->

  <br />

  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>Menu Utama</h3>
      <ul class="nav side-menu">
        <li><a href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> Home</a>
        </li>
        <li><a><i class="fa fa-building"></i> Lowongan Job Fair <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="<?php echo base_url('main/gudang') ?>"><i class="fa fa-table"></i>Data Pekerjaan</a></li>
            <li><a href="<?php echo base_url('main/gdinput') ?>"><i class="fa fa-edit"></i>Input Data Pekerjaan</a></li>
            <li><a href="<?php echo base_url('main/gdutin') ?>"><i class="fa fa-edit"></i>Input Utiliti</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-user"></i> Pendaftaran Pencaker <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="<?php echo base_url('main/cst') ?>"><i class="fa fa-table"></i>Data Customer</a></li>
            <li><a href="<?php echo base_url('main/cstinput') ?>"><i class="fa fa-edit"></i>Input Customer</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-book"></i> Pendaftaran Perusahaan<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="<?php echo base_url('main/kontraksewa') ?>"><i class="fa fa-table"></i>Daftar Kontrak</a></li>
            <li><a href="<?php echo base_url('main/kontrakinput') ?>"><i class="fa fa-edit"></i>Input Kontrak Sewa</a></li>
      </ul>
    </li>
    </div>
    <div class="menu_section">
      <h3>Setting</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-users"></i> Data User <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="<?php echo base_url('main/user') ?>"><i class="fa fa-table"></i>Data User</a></li>
            <li><a href="<?php echo base_url('main/userinput') ?>"><i class="fa fa-edit"></i>Input Data User</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="menu_section">
      <h3>Sistem</h3>
      <ul class="nav side-menu">
        <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
      </ul>
    </div>

  </div>
  <!-- /sidebar menu -->

</div>
