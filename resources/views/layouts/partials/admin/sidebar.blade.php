<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      <span class="align-middle">AdminKit</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Pages
      </li>
      
      <li class="sidebar-item {{Request::is('admin') ? 'active' : ''}}">
        <a class="sidebar-link" href="/admin">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <li class="sidebar-item {{Request::is('admin/mobil') ? 'active' : ''}}">
        <a class="sidebar-link" href="/admin/mobil">
          <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Mobil</span>
        </a>
      </li>
      
      <li class="sidebar-item {{Request::is('admin/penyewa') ? 'active' : ''}}">
        <a class="sidebar-link" href="/admin/penyewa">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Penyewa</span>
        </a>
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

    
</nav>