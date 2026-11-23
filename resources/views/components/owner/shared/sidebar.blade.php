<aside class="sidebar" id="sidebar">
    <div class="sidebar-top">
        <div class="brand-wrapper">
            <a href="{{ route('owner.dashboard-owner') }}" class="brand-link">
                <img src="{{ asset('assets/Icon/Logo.svg') }}" alt="IB Gaming" class="brand-logo">
                <div class="brand-text">
                    <h2>IB GAMING</h2>
                    <p>PLAY &bull; EAT &bull; ENJOY</p>
                </div>
            </a>
            <!-- Tombol Tutup Sidebar di HP -->
            <button type="button" class="btn-close-sidebar" id="btnCloseSidebar" aria-label="Tutup Menu">
                &times;
            </button>
        </div>

        <nav class="sidebar-nav">
            <a href="{{ route('owner.dashboard-owner') }}"
                @class(['nav-link', 'active' => request()->routeIs('owner.dashboard-owner')])
                @if (request()->routeIs('owner.dashboard-owner')) aria-current="page" @endif>
                <img src="{{ asset('assets/Icon/Home.svg') }}" alt="" class="nav-icon">
                <span>Dashboard</span>
            </a>
            <span class="nav-category">Laporan Operasional PlayStation</span>
            <ul class="nav-list">
                <li>
                    <a href="{{ route('owner.laporan-sewa-ps') }}"
                        @class(['nav-link', 'active' => request()->routeIs('owner.laporan-sewa-ps')])
                        @if (request()->routeIs('owner.laporan-sewa-ps')) aria-current="page" @endif>
                        <img src="{{ asset('assets/Icon/Game.svg') }}" alt="" class="nav-icon">
                        <span>Laporan Sewa PS</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('owner.laporan-fnb') }}"
                        @class(['nav-link', 'active' => request()->routeIs('owner.laporan-fnb')])
                        @if (request()->routeIs('owner.laporan-fnb')) aria-current="page" @endif>
                        <img src="{{ asset('assets/Icon/Food Icon.svg') }}" alt="" class="nav-icon">
                        <span>Laporan F &amp; B</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('owner.laporan-booking') }}"
                        @class(['nav-link', 'active' => request()->routeIs('owner.laporan-booking')])
                        @if (request()->routeIs('owner.laporan-booking')) aria-current="page" @endif>
                        <img src="{{ asset('assets/Icon/Controller Icon.svg') }}" alt="" class="nav-icon">
                        <span>Laporan Booking</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('owner.laporan-denda') }}"
                        @class(['nav-link', 'active' => request()->routeIs('owner.laporan-denda')])
                        @if (request()->routeIs('owner.laporan-denda')) aria-current="page" @endif>
                        <img src="{{ asset('assets/Icon/Notif.svg') }}" alt="" class="nav-icon">
                        <span>Laporan Denda</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="sidebar-bottom">
        <a href="{{ route('auth.login') }}" class="logout-link">
            <img src="{{ asset('assets/Icon/Logout.svg') }}" alt="" class="logout-icon">
            <span>Logout</span>
        </a>
    </div>
</aside>
