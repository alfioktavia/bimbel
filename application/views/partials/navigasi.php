<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('asset/dist/img/avatar5.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

		<ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU UTAMA</li>
          <li>
              <a href= "<?= site_url('dashboard');?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                <span class="pull-right-container">
                </span>
              </a>
          </li>
          <li>
              <a href= "<?= site_url('siswa');?>">
                <i class="fa fa-dashboard"></i> <span>Siswa</span>
                <span class="pull-right-container">
                </span>
              </a>
          </li>
          <li>
              <a href= "<?= site_url('ortu');?>">
                <i class="fa fa-dashboard"></i> <span>Orang Tua</span>
                <span class="pull-right-container">
                </span>
              </a>
          </li>
          <li>
              <a href= "<?= site_url('guru');?>">
                <i class="fa fa-dashboard"></i> <span>Guru</span>
                <span class="pull-right-container">
                </span>
              </a>
          </li>
          <li>
              <a href= "<?= site_url('transaksi');?>">
                <i class="fa fa-dashboard"></i> <span>Transaksi</span>
                <span class="pull-right-container">
                </span>
              </a>
          </li>
          <li>
              <a href= "<?= site_url('logout');?>">
                <i class="fa fa-sign-out"></i> <span>Keluar</span>
                <span class="pull-right-container">
                </span>
              </a>
          </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

  