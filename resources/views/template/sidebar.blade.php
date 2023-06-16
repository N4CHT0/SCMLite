@if (auth()->check())
    @if (auth()->user()->role == 'admin')
        <div class="main-sidebar sidebar-style-2">
            <!-- Isi sidebar admin -->
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand"
                        style="text-align: center; padding: 10px; margin-bottom: 70px; height: 70px;">
                        <img src="{{ asset('images/SCMLite.png') }}" alt="SCMLite Logo" width="100">
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Pergudangan</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-cube"></i> <span>Barang</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('barang.index') }}">List Barang</a></li>
                                <li><a class="nav-link" href="{{ route('barang.deleted') }}">List Barang Yang Di
                                        Hapus</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-columns"></i> <span>Kategori</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('kategori.index') }}">List Kategori</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-box"></i> <span>Stok</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('stok.index') }}">List Stok</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-warehouse"></i> <span>Gudang</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('gudang.index') }}">List Gudang</a></li>
                            </ul>
                        <li class="menu-header">Pengiriman</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-subway"></i> <span>Pengiriman</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('pengiriman.index') }}">List Pengiriman</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-calendar"></i> <span>Jadwal Pengiriman</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('jadwal_pengiriman.index') }}">List Jadwal</a>
                                </li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-map"></i> <span>Rute</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('rute.index') }}">List Rute</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-tractor"></i> <span>Truk</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('truk.index') }}">List Truk</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-briefcase"></i> <span>Supir</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('supir.index') }}">List Supir</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-home"></i> <span>Outlet</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('outlet.index') }}">List Outlet</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-user"></i> <span>Administator</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('admin.index') }}">List Pengguna</a></li>
                            </ul>
                        <li class=active><a class="nav-link" href="http://127.0.0.1:8000/home"><i
                                    class="far fa-square"></i> <span>Dashboard Admin</span></a></li>
                </aside>
            </div>
        </div>
    @elseif(auth()->user()->role == 'gudang')
        <div class="main-sidebar sidebar-style-2">
            <!-- Isi sidebar gudang -->
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand"
                    style="text-align: center; padding: 10px; margin-bottom: 70px; height: 70px;">
                    <img src="{{ asset('images/SCMLite.png') }}" alt="SCMLite Logo" width="100">
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Pergudangan</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="fas fa-cube"></i> <span>Barang</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('barang.index') }}">List Barang</a></li>
                            <li><a class="nav-link" href="{{ route('barang.deleted') }}">List Barang Yang Di
                                    Hapus</a></li>
                        </ul>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="fas fa-columns"></i> <span>Kategori</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('kategori.index') }}">List Kategori</a></li>
                        </ul>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="fas fa-box"></i> <span>Stok</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('stok.index') }}">List Stok</a></li>
                        </ul>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                class="fas fa-warehouse"></i> <span>Gudang</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('gudang.index') }}">List Gudang</a></li>
                        </ul>
                    <li class=active><a class="nav-link" href="http://127.0.0.1:8000/home"><i
                                class="far fa-square"></i> <span>Home</span></a></li>
            </aside>
        </div>
    @elseif(auth()->user()->role == 'pengiriman')
        <div class="main-sidebar sidebar-style-2">
            <!-- Isi sidebar pengiriman -->
            aside c id="sidebar-wrapper">
            <div class="sidebar-brand" style="text-align: center; padding: 10px; margin-bottom: 70px; height: 70px;">
                <img src="{{ asset('images/SCMLite.png') }}" alt="SCMLite Logo" width="100">
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Pengiriman</li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                            class="fas fa-subway"></i> <span>Pengiriman</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('pengiriman.index') }}">List Pengiriman</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                            class="fas fa-calendar"></i> <span>Jadwal Pengiriman</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('jadwal_pengiriman.index') }}">List Jadwal
                                Pengiriman</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                            class="fas fa-map"></i> <span>Rute</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('rute.index') }}">List Rute</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                            class="fas fa-briefcase"></i> <span>Supir</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('supir.index') }}">List Supir</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                            class="fas fa-home"></i> <span>Outlet</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('outlet.index') }}">List Outlet</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                            class="fas fa-train"></i> <span>Truk</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('truk.index') }}">List Truk</a></li>
                    </ul>
                <li class=active><a class="nav-link" href="http://127.0.0.1:8000/home"><i class="far fa-square"></i>
                        <span>Home</span></a></li>
                </aside>
        </div>
    @endif
@endif
