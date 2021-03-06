<nav class="navbar navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a href="<?php echo base_url('siswa');?>" class="navbar-brand"><b>E-Learning</b></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url() ;?>siswa/">Beranda</a></li>
            <li><a href="<?php echo base_url() ;?>materi/">Materi Pelajaran</a></li>
            <li><a href="#">Video Pembelajaran</a></li>
            <li><a href="<?php echo base_url() ;?>quiz/">Quiz</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url() ;?>diskusi/">Forum Diskusi Kelas</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url(); ?>profil/">Profile</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
        </div>
      </form>
    </div>
    <!-- /.navbar-collapse -->
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <!-- /.messages-menu -->

        <!-- Notifications Menu -->

        <!-- Tasks Menu -->

        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="<?php echo base_url('_assets/default.jpg') ?>" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">
              <?=$siswa['nama_siswa']?>

            </span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="<?php echo base_url('_assets/default.jpg') ?>" class="img-circle" alt="User Image">

              <p>
               <?=$siswa['nama_siswa']?>
                <small><?=$kelas['nama_kelas']?></small>
              </p>
            </li>
            <!-- Menu Body -->
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url(); ?>user/Profile/" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url();?>Login_user/Log_out" class="btn keluar btn-default btn-flat">Keluar</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-custom-menu -->
  </div>
  <!-- /.container-fluid -->
</nav>