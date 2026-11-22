<aside class="sidebar" id="sidebar">
            <div class="sidebar-top">
                <div class="brand-wrapper">
                    <a href="{{ route('index') }}" class="brand-link">
                        <img src="{{ asset('assets/Icon/Logo.svg') }}" alt="IB Gaming" class="brand-logo">
                        <div class="brand-text">
                            <h2>IB GAMING</h2>
                            <p>PLAY &bull; EAT &bull; ENJOY</p>
                        </div>
                    </a>
                    <!-- Tombol Tutup Sidebar di Mobile -->
                    <button type="button" class="btn-close-sidebar" id="btnCloseSidebar" aria-label="Tutup Menu">
                        &times;
                    </button>
                </div>

                <nav class="sidebar-nav">
                    <span class="nav-category">Laporan Operasional PlayStation</span>
                    <ul class="nav-list">
                        <li>
                            <a href="{{ route('owner.laporan-sewa-ps') }}" class="nav-link">
                                <img src="{{ asset('assets/Icon/Game.svg') }}" alt="" class="nav-icon">
                                <span>Laporan Sewa PS</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('owner.laporan-fnb') }}" class="nav-link">
                                <img src="{{ asset('assets/Icon/Food Icon.svg') }}" alt="" class="nav-icon">
                                <span>Laporan F &amp; B</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('owner.laporan-booking') }}" class="nav-link">
                                <img src="{{ asset('assets/Icon/Controller Icon.svg') }}" alt="" class="nav-icon">
                                <span>Laporan Booking</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('owner.laporan-denda') }}" class="nav-link active">
                                <img src="{{ asset('assets/Icon/Notif.svg') }}" alt="" class="nav-icon">
                                <span>Laporan Denda</spa>
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
