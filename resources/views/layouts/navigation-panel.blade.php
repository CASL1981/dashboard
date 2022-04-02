<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="{{ asset('images/profile/face5.jpg') }}" alt="image"/>
        </div>
        <div class="profile-name">
          <p class="name">{{ Auth::user()->name }}</p>
          <p class="designation">
            Super Admin
          </p>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>      
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
        <i class="fab fa-trello menu-icon"></i>
        <span class="menu-title">Page Layouts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="page-layouts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.users') }}">Usuarios</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">RTL</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Horizontal Menu</a></li>
        </ul>
      </div>
    </li>      
  </ul>
</nav>