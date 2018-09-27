<!--<nav class="navbar navbar-expand navbar-light bg-light static-top dashboard-navbar"> -->
<nav class="navbar navbar-expand navbar-light bg-light static-top">
   <a class="navbar-brand mr-1" href="{{ url('/') }}">{{ config('app.name', 'Crypta') }}</a>
   <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
   <i class="fas fa-bars"></i>
   </button>
   <!-- Navbar Search -->
   <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
         <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">All transactions</a>
            </div>
         </li>
         <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
               <a class="dropdown-item" href="#">{{ Auth::user()->username }}</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Settings</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
         </li>
      </ul>
   </div>
</nav>
