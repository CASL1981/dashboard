{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>


                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

    
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
    
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

    
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

    
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

        </div>
    </div>
</nav> --}}
{{-- ----------------- --}}
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar ">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="/dashboard" style="width: 80px;"><img src="{{ asset('images/icon.png') }}" alt="logo"/></a>      
      <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="{{ asset('images/icon.png') }}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="fas fa-bars"></span>
      </button>      
      <ul class="navbar-nav navbar-nav-right">
        
        {{-- <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="fas fa-bell mx-0"></i>
            <span class="count">16</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <a class="dropdown-item">
              <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
              </p>
              <span class="badge badge-pill badge-warning float-right">View all</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-danger">
                  <i class="fas fa-exclamation-circle mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-medium">Application Error</h6>
                <p class="font-weight-light small-text">
                  Just now
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="fas fa-wrench mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-medium">Settings</h6>
                <p class="font-weight-light small-text">
                  Private message
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="far fa-envelope mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-medium">New user registration</h6>
                <p class="font-weight-light small-text">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-envelope mx-0"></i>
            <span class="count">25</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <div class="dropdown-item">
              <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
              </p>
              <span class="badge badge-info badge-pill float-right">View all</span>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                  <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                </h6>
                <p class="font-weight-light small-text">
                  The meeting is cancelled
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                  <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                </h6>
                <p class="font-weight-light small-text">
                  New product launch
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                  <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                </h6>
                <p class="font-weight-light small-text">
                  Upcoming board meeting
                </p>
              </div>
            </a>
          </div>
        </li> --}}
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="{{ asset('images/profile/face5.jpg') }}" alt="profile"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <i class="fas fa-cog text-primary"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="dropdown-item" {{ route('logout') }} onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="fas fa-power-off text-primary"></i>Logout
              </a>                
          </form>
          </div>
        </li>
        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="#">
            <i class="fas fa-ellipsis-h"></i>
          </a>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="fas fa-bars"></span>
      </button>
    </div>
  </nav>