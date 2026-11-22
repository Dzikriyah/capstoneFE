<header class="header">


            <!-- ========================================
                 LOGO
            ========================================= -->

            <a
                href="{{ route('user.home') }}"
                class="brand-logo"
            >

                <img
                    class="link-logo-branding"
                    src="{{ asset('assets/Icon/Logo.svg') }}"
                    alt="IB Gaming"
                >

                <div class="brand-text">

                    <span class="brand-name">
                        IB GAMING
                    </span>

                    <span class="brand-tagline">
                        PLAY · EAT · ENJOY
                    </span>

                </div>

            </a>


            <!-- ========================================
                 NAVIGATION
            ========================================= -->

            <nav
                class="main-navigation-menu"
                aria-label="Navigasi utama"
            >


                <!-- Beranda -->

                <a
                    class="link"
                    href="{{ route('user.home') }}"
                    aria-current="page"
                >

                    <span class="text-wrapper">
                        Beranda
                    </span>

                    <img
                        class="akar-icons-home"
                        src="{{ asset('assets/Icon/Home.svg') }}"
                        alt=""
                        aria-hidden="true"
                    >

                </a>


                <!-- Booking PS -->

                <a
                    class="div"
                    href="{{ route('user.booking.booking-member') }}"
                >

                    <span class="text-wrapper">
                        Booking PS
                    </span>

                    <img
                        class="carbon-game-console"
                        src="{{ asset('assets/Icon/PlayStation Logo.svg') }}"
                        alt=""
                        aria-hidden="true"
                    >

                </a>


                <!-- Pesan F&B -->

                <a
                    class="link-2"
                    href="{{ route('user.fnb.pesan-fnb') }}"
                >

                    <span class="text-wrapper">
                        Pesan FNB
                    </span>

                    <img
                        class="img"
                        src="{{ asset('assets/Icon/Food Icon.svg') }}"
                        alt=""
                        aria-hidden="true"
                    >

                </a>

            </nav>


            <!-- ========================================
                 HEADER ACTIONS
            ========================================= -->

            <div class="auth-action-buttons">


                <!-- ====================================
                     KERANJANG
                ===================================== -->

                <a
                    class="vector-wrapper"
                    href="{{ route('user.cart') }}"
                    aria-label="Keranjang pesanan"
                >

                    <img
                        class="vector"
                        src="{{ asset('assets/Icon/Keranjang.svg') }}"
                        alt=""
                        aria-hidden="true"
                    >

                </a>


                <!-- ====================================
                     NOTIFIKASI
                ===================================== -->

                <a
                    class="vector-wrapper"
                    href="{{ route('user.notification') }}?from=home"
                    aria-label="Notifikasi"
                >

                    <img
                        class="vector-2"
                        src="{{ asset('assets/Icon/Notif.svg') }}"
                        alt=""
                        aria-hidden="true"
                    >

                </a>


                <!-- ====================================
                     PROFILE
                ===================================== -->

                <div class="profile-menu">


                    <!-- Profile Button -->

                    <button
                        type="button"
                        class="profile-button"
                        id="profileButton"
                        aria-expanded="false"
                        aria-haspopup="true"
                        aria-label="Buka menu profil"
                    >

                        <!-- Profile Image -->

                        <img
                            class="profile-image"
                            src="{{ asset('assets/Images/Elon.jpg') }}"
                            alt="Kimi"
                        >


                        <!-- Profile Name -->

                        <span class="profile-name">
                            Kimi
                        </span>


                        <!-- Arrow -->

                        <img
                            class="profile-arrow"
                            src="{{ asset('assets/Icon/Arrow.svg') }}"
                            alt=""
                            aria-hidden="true"
                        >

                    </button>


                    <!-- ====================================
                         PROFILE DROPDOWN
                    ===================================== -->

                    <div
                        class="profile-dropdown"
                        id="profileDropdown"
                        role="menu"
                    >


                        <!-- Profile Information -->

                        <div class="profile-dropdown-header">


                            <img
                                class="dropdown-profile-image"
                                src="{{ asset('assets/Images/Elon.jpg') }}"
                                alt="Kimi Antonelli"
                            >


                            <div class="dropdown-profile-info">

                                <span class="dropdown-profile-name">
                                    Kimi Antonelli
                                </span>

                                <span class="dropdown-profile-email">
                                    kimi@gmail.com
                                </span>

                            </div>

                        </div>


                        <!-- Divider -->

                        <div class="dropdown-divider"></div>


                        <!-- Profile -->

                        <a
                            href="{{ route('user.profile') }}"
                            class="dropdown-item"
                            role="menuitem"
                        >

                            <span class="dropdown-item-icon">
                                <img
                                    src="{{ asset('assets/Icon/User-gold.svg') }}"
                                    alt=""
                                >
                            </span>

                            <span>
                                Profile Saya
                            </span>

                        </a>


                        <!-- Logout -->

                        <button
                            type="button"
                            class="dropdown-item logout-button"
                            id="logoutButton"
                            role="menuitem"
                        >

                            <span class="dropdown-item-icon">
                                 <img
                                    src="{{ asset('assets/Icon/Logout.svg') }}"
                                    alt=""
                                >
                            </span>

                            <span>
                                Logout
                            </span>

                        </button>

                    </div>

                </div>

            </div>

        </header>
