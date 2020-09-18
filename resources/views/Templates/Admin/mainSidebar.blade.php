<aside class="main-sidebar elevation-4 sidebar-dark-primary">

  <a href="#" class="brand-link navbar-info">
    <img src="/assets/AdminLTE/dist/img/AdminLTELogo.png" alt="Fell My Spirit Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Seller Page</span>
  </a>


  <div class="sidebar ">

    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
      <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div> --}}


    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview {{ (request()->segment(2) == 'web') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ (request()->segment(2) == 'web') ? 'active' : '' }}">
            <i class="fas fa-cash-register"></i>
            <p> Store <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/web/mystore" class="nav-link {{ (request()->is('admin/web/mystore')) ? 'active' : '' }}">
                <i class="fas fa-store"></i>
                <p> My Store</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/web/loyalty" class="nav-link {{ (request()->is('admin/web/loyalty')) ? 'active' : '' }}">
                <i class="fas fa-medal"></i>
                <p> Loyalty Point</p>
              </a>
            </li>

          </ul>
        </li>
        
        <li class="nav-item has-treeview {{ (request()->segment(2) == 'manager') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ (request()->segment(2) == 'manager') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users-cog"></i>
            <p> My Account <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/manager/akun" class="nav-link {{ (request()->is('admin/manager/akun')) ? 'active' : '' }}">
                <i class="nav-icon ion ion-person-add"></i>
                <p>Account</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link">
                <i class="fas fa-power-off"></i>
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

  </div>

</aside>