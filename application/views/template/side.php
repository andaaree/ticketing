<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('') ?>" class="brand-link">
      <img src="<?= base_url('') ?>img/its.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">IT Support</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('') ?>img/its.jpg" class="img-circle elevation-2" alt="lah">
        </div>
        <div class="info">
          <a href="#" class="d-block">IT Support Aplication</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('') ?>department" class="nav-link">
              <i class="nav-icon fa fa-building-o" aria-hidden="true"></i>
              <p>
                Departments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('') ?>staff" class="nav-link">
              <i class="nav-icon fa fa-group" aria-hidden="true"></i>
              <p>
                Staff
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('') ?>ticketing" class="nav-link">
              <i class="nav-icon fa fa-ticket"></i>
              <p>
                Ticketing
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?= base_url('') ?>ticketing/history" class="nav-link">
              <i class="nav-icon fa fa-history" aria-hidden="true"></i>
              <p>
              History
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>