<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link"> 
      <span class="brand-text font-weight"><i class="fa fa-landmark ml-3"></i>&nbsp e-notariil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img') }}/fotonotaris.jpg" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Wahyu Analista</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Data Master</li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Klien
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/klien/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/klien" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Sertipikat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/sertipikat/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/sertipikat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">Monitoring</li>
          
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Proses Berkas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/order/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/order" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitoring Data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">Report</li>
          <li class="nav-item">
            <a href="/dashboard/orderSelesai" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Berkas Selesai</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>