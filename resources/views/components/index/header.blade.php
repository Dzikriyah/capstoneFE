<header class="header">


            <!-- ================================
                 LOGO
            ================================= -->

            <a
                href="{{ route('index') }}"
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


            <!-- ================================
                 NAVIGATION
            ================================= -->

            <nav
                class="main-navigation-menu"
                aria-label="Navigasi utama"
            >


                <!-- BERANDA -->

                <a
                    class="link"
                    href="{{ route('index') }}"
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


                <!-- BOOKING PS -->

                <a
                    class="div"
                    href="{{ route('auth.login') }}"
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


                <!-- PESAN F&B -->

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


            <!-- ================================
                 HEADER ACTION
            ================================= -->

            <div class="auth-action-buttons">


                <!-- ================================
                     KERANJANG
                ================================= -->

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


                <!-- ================================
                     NOTIFIKASI
                ================================= -->

                <button type="button"
                    class="vector-wrapper"
                    data-open-user-notification aria-haspopup="dialog" aria-controls="userNotificationDialog"
                    aria-label="Notifikasi"
                >

                    <img
                        class="vector-2"
                        src="{{ asset('assets/Icon/Notif.svg') }}"
                        alt=""
                        aria-hidden="true"
                    >

                </button>


                <!-- ================================
                     LOGIN / REGISTER
                ================================= -->

                <a
                    href="{{ route('auth.login') }}"
                    class="link-login-staff"
                >

                    <div class="group">

                        <img
                            src="{{ asset('assets/Icon/User.svg') }}"
                            alt=""
                            class="login-user-icon"
                        >

                        <span class="text-wrapper-2">
                            Masuk / Daftar
                        </span>

                    </div>

                </a>


            </div>


        </header>
