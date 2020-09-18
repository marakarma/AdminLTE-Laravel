<aside class="main-sidebar elevation-4 sidebar-dark-danger">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link navbar-danger">
    <img src="/assets/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">User Page</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar ">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
      <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview {{ (request()->segment(2) == 'web') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ (request()->segment(2) == 'web') ? 'active' : '' }}">
            <i class="fas fa-newspaper"></i>
            <p>
              Artikel Web
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/') }}/admin/web/kategori" class="nav-link {{ (request()->is('admin/web/kategori')) ? 'active' : '' }}">
                <i class="fas fa-tags"></i>
                <p>Kategori</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/') }}/admin/web/artikel" class="nav-link {{ (request()->is('admin/web/artikel')) ? 'active' : '' }}">
                <i class="far fa-file-alt"></i>
                <p>Artikel</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/') }}/admin/web/komentar" class="nav-link {{ (request()->is('admin/web/komentar')) ? 'active' : '' }}">
                <i class="far fa-comment-alt"></i>
                <p>Komentar</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item has-treeview {{ (request()->segment(2) == 'user') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ (request()->segment(2) == 'user') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Starter Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Active Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link ">
            <i class="fas fa-tools"></i>
            <p>
              Lainnya
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <p>{{ __('Logout') }}</p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>


          </ul>
        </li>


        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>