 <nav class="navbar navbar-light bg-white shadow-sm">
     <div class="container-fluid">
         <div class="d-flex align-items-center d-md-none ">
             <button class="navbar-toggler border-0 me-2" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="{{ __('Toggle navigation') }}"><span class="navbar-toggler-icon"></span></button>
             <a class="navbar-brand fw-medium mb-0 h1">
                 {{ config('app.name', 'Licitaciones') }}
             </a>
         </div>
         <div class="d-flex align-items-center ms-auto">
             <div class="dropdown me-3">
                 <button class="btn position-relative" type="button" id="notificationDropdown"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="bi bi-bell"></i>
                     <span class="position-absolute badge rounded-pill bg-danger"
                         style="transform: translate(-20%, -4%);">
                         1
                     </span>
                 </button>
                 <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                     <li>
                         <h6 class="dropdown-header">Notificaciones</h6>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="#">Notificación 1</a></li>
                     <li><a class="dropdown-item" href="#">Notificación 2</a></li>
                     <li><a class="dropdown-item" href="#">Notificación 3</a></li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="#">Ver todas las notificaciones</a>
                     </li>
                 </ul>
             </div>
             <div class="dropdown ms-3">
                 <button class="btn btn-primary rounded-circle text-uppercase" type="button" id="userDropdown"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     {{ substr(Auth::user()->firstname ?? 'U', 0, 1) }}
                 </button>
                 <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                     <li>
                         <h6 class="dropdown-header fw-bold">Mi cuenta</h6>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="{{ route('settings') }}">Settings</a></li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>
                     <li>
                         <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             Cerrar sesión
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="collapse navbar-collapse d-md-none px-4" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto">
             @auth
                 <x-nav-item href="home" title="Dashboard" />
                 <x-nav-item href="bids" title="Bids" />
                 <x-nav-item href="evaluations" title="Evaluations" />
                 <x-nav-item href="awards" title="Awards" />
                 <x-nav-item href="users" title="Users" />
                 <x-nav-item href="settings" title="Settings" />
             @endauth
         </ul>

         <ul class="navbar-nav ms-auto">
             <li class="nav-item">
                 <a class="nav-link text-danger" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
             </li>
         </ul>
     </div>
 </nav>
