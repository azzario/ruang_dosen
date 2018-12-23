<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top shadow-sm">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">Ruang Dosen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Request::is('/') ? 'active rounded' : '' }}">
          <a href="{{ url('/') }}" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item {{ (Request::is('jadwal/dosen') || Request::is('jadwal/create/dosen')) ? 'active rounded' : '' }}">
          <a href="{{ url('/jadwal/dosen') }}" class="nav-link">Jadwal</a>
        </li>
        <li class="nav-item {{ Request::is('kelas/dosen') ? 'active rounded' : '' }}">
          <a href="{{ url('/kelas/dosen') }}" class="nav-link">Kelas</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Ulangan</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Materi</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ strtok(Auth::user()->nama, ' ') }}</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ url('/profil') }}">Profil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
            </div>
         </li>
      </ul>
    </div>
  </div>
</nav>