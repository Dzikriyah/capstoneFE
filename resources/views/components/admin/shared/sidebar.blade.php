<aside class="admin-sidebar">


        <!-- =================================================
             LOGO
        ================================================== -->

        <div class="admin-logo-wrapper">

    <img
        src="{{ asset('assets/Icon/Logo.svg') }}"
        alt="IB Gaming"
        class="admin-logo"
    >

    <div class="admin-brand-text">

        <p class="admin-brand-name">
            IB GAMING
        </p>

        <p class="admin-brand-tagline">
            PLAY · EAT · ENJOY
        </p>

    </div>

</div>



        <!-- =================================================
             NAVIGATION
        ================================================== -->

        <nav
            class="admin-nav"
            aria-label="Navigasi Admin"
        >


            <!-- =================================================
                 DASHBOARD
            ================================================== -->

            <div class="admin-nav-section">

                <ul class="admin-nav-list">

                    <li>

                        <a
                            href="{{ route('admin.dashboard-admin') }}"
                            @class(['admin-nav-link', 'active' => request()->routeIs('admin.dashboard-admin')])
                            @if (request()->routeIs('admin.dashboard-admin')) aria-current="location" @endif
                        >

                            <img
                                src="{{ asset('assets/Icon/Home.svg') }}"
                                alt=""
                                class="admin-nav-icon"
                                aria-hidden="true"
                            >

                            <span class="admin-nav-text">
                                Dashboard
                            </span>

                        </a>

                    </li>

                </ul>

            </div>



            <!-- =================================================
                 OPERASIONAL PLAYSTATION
            ================================================== -->

            <div class="admin-nav-section">


                <p class="admin-nav-section-title">
                    Operasional PlayStation
                </p>


                <ul class="admin-nav-list">


                    <!-- Sewa PS -->

                    <li>

                        <a
                            href="{{ route('admin.sewa-ps') }}"
                            @class(['admin-nav-link', 'active' => request()->routeIs('admin.sewa-*')])
                            @if (request()->routeIs('admin.sewa-*')) aria-current="location" @endif
                        >

                            <img
                                src="{{ asset('assets/Icon/Game.svg') }}"
                                alt=""
                                class="admin-nav-icon"
                                aria-hidden="true"
                            >

                            <span class="admin-nav-text">
                                Sewa PS
                            </span>

                        </a>

                    </li>



                    <!-- Booking PS -->

                    <li>

                        <a
                            href="{{ route('admin.booking.verifikasi-akun') }}"
                            @class(['admin-nav-link', 'active' => request()->routeIs('admin.booking.*')])
                            @if (request()->routeIs('admin.booking.*')) aria-current="location" @endif
                        >

                            <img
                                src="{{ asset('assets/Icon/Keranjang.svg') }}"
                                alt=""
                                class="admin-nav-icon"
                                aria-hidden="true"
                            >

                            <span class="admin-nav-text">
                                Booking PS
                            </span>

                        </a>

                    </li>



                    <!-- Kelola Unit PS -->

                    <li>

                        <a
                            href="{{ route('admin.kelola-unit') }}"
                            @class(['admin-nav-link', 'active' => request()->routeIs('admin.kelola-unit')])
                            @if (request()->routeIs('admin.kelola-unit')) aria-current="location" @endif
                        >

                            <img
                                src="{{ asset('assets/Icon/TV.svg') }}"
                                alt=""
                                class="admin-nav-icon"
                                aria-hidden="true"
                            >

                            <span class="admin-nav-text">
                                Kelola Unit PS
                            </span>

                        </a>

                    </li>

                </ul>

            </div>



            <!-- =================================================
                 OPERASIONAL F&B
            ================================================== -->

            <div class="admin-nav-section">


                <p class="admin-nav-section-title">
                    Operasional F &amp; B
                </p>


                <ul class="admin-nav-list">


                    <!-- Pesanan F&B -->

                    <li>

                        <a
                            href="{{ route('admin.pesanan-fnb') }}"
                            @class(['admin-nav-link', 'active' => request()->routeIs('admin.pesanan-*')])
                            @if (request()->routeIs('admin.pesanan-*')) aria-current="location" @endif
                        >

                            <img
                                src="{{ asset('assets/Icon/FNB.svg') }}"
                                alt=""
                                class="admin-nav-icon"
                                aria-hidden="true"
                            >

                            <span class="admin-nav-text">
                                Pesanan F &amp; B
                            </span>

                        </a>

                    </li>



                    <!-- Kelola Menu F&B -->

                    <li>

                        <a
                            href="{{ route('admin.kelola-menu') }}"
                            @class(['admin-nav-link', 'active' => request()->routeIs('admin.kelola-menu')])
                            @if (request()->routeIs('admin.kelola-menu')) aria-current="location" @endif
                        >

                            <img
                                src="{{ asset('assets/Icon/Menu.svg') }}"
                                alt=""
                                class="admin-nav-icon"
                                aria-hidden="true"
                            >

                            <span class="admin-nav-text">
                                Kelola Menu F &amp; B
                            </span>

                        </a>

                    </li>

                </ul>

            </div>

        </nav>



        <!-- =================================================
             LOGOUT
        ================================================== -->

        <div class="admin-sidebar-bottom">

            <a
                href="#"
                class="admin-logout"
            >

                <img
                    src="{{ asset('assets/Icon/Logout.svg') }}"
                    alt=""
                    class="admin-logout-icon"
                    aria-hidden="true"
                >

                <span class="admin-logout-text">
                    Logout
                </span>

            </a>

        </div>

    </aside>
