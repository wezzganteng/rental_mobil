<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-light fixed-top shadow" style="background: white; height: 75px">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: white">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
            height="15"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <div class="container ">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
                  <a class="nav-link" href="/"> beranda </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">tentang </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/">daftar mobil</a>
                </li>
              </ul>
        </div>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      @guest
                            @if (Route::has('login'))
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                            @endif
&nbsp;|&nbsp;
                            @if (Route::has('register'))
                                
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                
                            @endif
                        @else
      <div class="d-flex align-items-center" style="background: white ">
        
        <!-- Avatar -->
        <div class="dropdown" >
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            {{Auth::user()->name}}
            &nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
              </svg>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
          
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="/mobil_yang_disewa">Mobil Yang di sewa</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </li>
          </ul>
        </div>
      </div>
      @endguest

      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <header>
    <!-- Intro settings -->
    <style>
      /* Default height for small devices */
      #intro-example {
        height: 400px;
      }
  
      /* Height for devices larger than 992px */
      @media (min-width: 992px) {
        #intro-example {
          height: 600px;
        }
      }
    </style>
  
    <!-- Navbar -->
    <!-- Navbar -->
  
    <!-- Background image -->
    <br><br><br>
    <div
      id="intro-example"
      class="p-5 text-center bg-image"
      style="background-image: url('https://img.freepik.com/premium-photo/front-view-generic-brandless-moder-car_110488-502.jpg?size=626&ext=jpg&ga=GA1.1.1423743673.1693659453&semt=ais');"
    >
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Mobilku</h1>
            <h5 class="mb-4">Tempat Rental mobil terpecaya dan murah</h5>
            <a
              class="btn btn-outline-light btn-lg m-2"
              href="https://www.youtube.com/watch?v=c9B4TPnak1A"
              role="button"
              rel="nofollow"
              target="_blank"
            >MULAI</a
            >
            <a
              class="btn btn-outline-light btn-lg m-2"
              href="https://mdbootstrap.com/docs/standard/"
              target="_blank"
              role="button"
            >SEWA MOBIL</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>