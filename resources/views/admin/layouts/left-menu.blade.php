  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('/template/admin/AdminLTE3/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Electron Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://scontent.fpnh22-1.fna.fbcdn.net/v/t1.6435-9/72346489_2528544227375161_2578776653182271488_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=0debeb&_nc_ohc=jU34_f-IaEgAX83IdQU&_nc_ht=scontent.fpnh22-1.fna&oh=3c750c3ff5bf25fa667b10f12cf0c4f2&oe=612541C8" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Đỗ Trung Đức</a>
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
           <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Danh mục sản phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category_index')}}" class="nav-link">
                  <p>Danh sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category_create')}}" class="nav-link">
                  <p>Thêm mới</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quản lý tin tức
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('news_index')}}" class="nav-link">
                  <p>Danh sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('news_create')}}" class="nav-link">
                  <p>Thêm mới</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>