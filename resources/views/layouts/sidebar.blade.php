<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('dashboard.index')}}">APP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{route('dashboard.index')}}">APP</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ active('dashboard*') }}"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>           
      <li class="menu-header">master</li>
        <li class="{{ Request::is('admin/pengaduan') ? 'active' : '' }}">
                      <a href="{{ route('pengaduan.index') }}"><i class="fas fa-phone-volume"></i>Pengaduan</a>
                  </li>
          {{-- <li class="menu-header">Petugas</li> --}}
                  <li class="{{ Request::is('admin/petugas') ? 'active' : '' }}">
                      <a href="{{ route('petugas.index') }}"><i class="fas fa-user-tie"></i>Petugas</a>
                  </li>
          {{-- <li class="menu-header">Masyarakat</li> --}}
          <li class="{{ Request::is('admin/masyarakat') ? 'active' : '' }}">
                      <a href="{{ route('masyarakat.index') }}"><i class="fas fa-users"></i>Masyarakat</a>
                  </li>
          {{-- <li class="menu-header">pengaduan</li> --}}
                  <li class="{{ Request::is('admin/laporan') ? 'active' : '' }}">
                      <a href="{{ route('laporan.index') }}"><i class="far fa-clipboard"></i>Laporan</a>
                  </li>
      <li class="menu-header">User</li>
      <li class="{{ active('user*') }}"><a class="nav-link" href="{{route('user.index')}}"><i class="fas fa-user"></i><span>User</span></a></li>           
    </ul>
  </aside>
</div>
