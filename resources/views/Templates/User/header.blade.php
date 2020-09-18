<nav class="main-header navbar navbar-expand navbar-dark navbar-danger">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>


  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        {{ Auth::user()->name }}
         <i class="fas fa-user"></i>
      </a>
      <div class="dropdown-menu mt-2">

        <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" class="dropdown-item">
          <i class="fas fa-power-off text-danger"></i>
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        

      </div>
    </li>

  </ul>
</nav>