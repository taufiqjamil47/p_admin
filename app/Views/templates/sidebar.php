<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url()?>" class="brand-link">
      <img src="<?= base_url('dist/img/logo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">ATo Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url(); ?>/dist/img/<?= user()->user_image; ?>" class="img-profile rounded-circle">
            </div>
            <div class="info">
                <a href="<?= base_url('user/profile'); ?>" class="d-block"><?= user()->username; ?></a>
            </div>
        </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url('user/dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <?php if (in_groups('admin')) : ?>
            <li class="nav-item">
              <a href="<?= base_url('admin/management'); ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Menejemen Pengguna
                </p>
              </a>
            </li>
          <?php endif; ?>

          <li class="nav-item">
            <a href="<?= base_url('user/profile'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Edit Profile
              </p>
            </a>
          </li> -->
          <hr class="dropdown-divider">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
                <?php if (in_groups('admin')) : ?> 
                  <span class="badge badge-success right">
                    4
                  </span>
                <?php endif; ?>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (in_groups('admin')) : ?>
                <li class="nav-item">
                  <a href="<?= base_url('user/import_teach'); ?>" class="nav-link">
                    <i class="fa fa-upload nav-icon"></i>
                    <p>Import Data Guru</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                    <i class="fa fa-upload nav-icon"></i>
                    <p>Import Data Tendik</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/boxed.html" class="nav-link">
                    <i class="fa fa-upload nav-icon"></i>
                    <p>Import Data Pustakawan</p>
                  </a>
                </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="<?= base_url('user/import_student'); ?>" class="nav-link">
                  <i class="fa fa-upload nav-icon"></i>
                  <p>Import Data Siswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Administrasi Guru
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('user/daftar_kehadiran'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-check"></i>
                  <p>
                    Daftar Hadir
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('user/daftar_penilaian'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-check"></i>
                  <p>
                    Penilaian Belajar
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('user/nilai_latihan_siswa'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-check"></i>
                  <p>
                    Nilai Latihan
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <hr class="dropdown-divider">
          <li class="nav-item">
            <a href="<?= base_url('logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>