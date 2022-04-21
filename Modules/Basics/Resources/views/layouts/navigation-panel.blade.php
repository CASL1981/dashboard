<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="{{ asset(Auth()->user()->image_user) }}" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">{{ Auth::user()->name }}</p>
            <p class="designation">
                {{ Auth::user()->role_id }}
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.basics') }}">
          <i class="fa fa-home menu-icon"></i>
          <span class="menu-title">Dashboard Basico</span>
        </a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
          <i class="fab fa-trello menu-icon"></i>
          <span class="menu-title">Modulos Generales</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts">
          <ul class="nav flex-column sub-menu">
            @can('usuario read') 
              <li class="nav-item"><a class="nav-link" href="{{ route('basic.destinations') }}">Centros de Costos</a></li>
            @endcan
            @can('role read')
              <li class="nav-item"> <a class="nav-link" href="#">####</a></li>              
            @endcan
            {{-- <li class="nav-item"> <a class="nav-link" href="#">Horizontal Menu</a></li> --}}
          </ul>
        </div>
      </li>      
    </ul>
  </nav>