<div class="sidebar sidebar-style-2" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('beranda.admin') }}" class="logo"
                style="display: flex; align-items: center; text-decoration: none;">

                <span style="font-weight: bold; font-size: 20px; color: white; letter-spacing: -1px;">RPL</span>
                <span
                    style="font-weight: normal; font-size: 20px; color: white; margin-left: 3px; letter-spacing: -1px;">SMK Krian 1</span>
            </a>

            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ request()->routeIs('beranda.admin') ? 'active' : '' }}">
                    <a href="{{ route('beranda.admin') }}">
                        <i class="fas fa-home"></i>
                        <p>beranda</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('konfigurasi.*') ? 'active' : '' }}">
                    <a href="{{ route('konfigurasi.edit', 1) }}">
                        <i class="fas fa-cog"></i>
                        <p>Konfigurasi</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data Sekolah</h4>
                </li>

                <li class="nav-item {{ request()->routeIs('berita.*') ? 'active' : '' }}">
                    <a href="{{ route('berita.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Berita</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
                    <a href="{{ route('kategori.index') }}">
                        <i class="fas fa-tags"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('prestasi.*') ? 'active' : '' }}">
                    <a href="{{ route('prestasi.index') }}">
                        <i class="fas fa-trophy"></i>
                        <p>Prestasi</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('fasilitas.*') ? 'active' : '' }}">
                    <a href="{{ route('fasilitas.index') }}">
                        <i class="fas fa-school"></i>
                        <p>Fasilitas</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('galeri.*') ? 'active' : '' }}">
                    <a href="{{ route('galeri.index') }}">
                        <i class="fas fa-images"></i>
                        <p>Galeri</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('guru.*') ? 'active' : '' }}">
                    <a href="{{ route('guru.index') }}">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Guru</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('alumni.*') ? 'active' : '' }}">
                    <a href="{{ route('alumni.index') }}">
                        <i class="fas fa-user-graduate"></i>
                        <p>Alumni</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('pesan.*') ? 'active' : '' }}">
                    <a href="{{ route('pesan.index') }}">
                        <i class="fas fa-comment-dots"></i>
                        <p>Kritik & Pesan</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Eksternal</h4>
                </li>

                <li class="nav-item">
                    <a href="{{ route('view.beranda') }}" target="_blank">
                        <i class="fas fa-globe"></i>
                        <p>Lihat Website</p>
                    </a>
                </li>





                <li class="nav-item" style="margin-top: 180px">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
