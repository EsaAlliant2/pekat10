<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('dashboard.index')}}">APP</a>
    </div>
    <div class="sidebar-header">
                <p class="text-white mb-0">Pengaduan Masyarakat</p>
            </div>
            <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}">Dashboard</a>
                </li>
      
      <li class="menu-header">master</li>
      <li class="{{ Request::is('admin/pengaduan') ? 'active' : '' }}">
                    <a href="{{ route('pengaduan.index') }}">Pengaduan</a>
                </li>
        {{-- <li class="menu-header">Petugas</li> --}}
                <li class="{{ Request::is('admin/petugas') ? 'active' : '' }}">
                    <a href="{{ route('petugas.index') }}">Petugas</a>
                </li>
        {{-- <li class="menu-header">Masyarakat</li> --}}
        <li class="{{ Request::is('admin/masyarakat') ? 'active' : '' }}">
                    <a href="{{ route('masyarakat.index') }}">Masyarakat</a>
                </li>
        {{-- <li class="menu-header">pengaduan</li> --}}
                <li class="{{ Request::is('admin/laporan') ? 'active' : '' }}">
                    <a href="{{ route('laporan.index') }}">Laporan</a>
                </li>
                 
    </ul>
        </nav>
  </aside>
</div>
