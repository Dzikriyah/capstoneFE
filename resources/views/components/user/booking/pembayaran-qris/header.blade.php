<header class="header">

        <a href="{{ route('user.home') }}" class="brand-logo">

            <img
                class="link-logo-branding"
                src="{{ asset('assets/Icon/Logo.svg') }}"
                alt="IB Gaming"
            >

            <div class="brand-text">
                <span class="brand-name">IB GAMING</span>
                <span class="brand-tagline">PLAY · EAT · ENJOY</span>
            </div>

        </a>


       <nav class="main-navigation-menu" aria-label="Navigasi utama">

    <!-- BERANDA -->
    <a
        class="link"
        href="{{ route('user.home') }}"
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


    <!-- BOOKING PS - AKTIF -->
    <a
        class="div"
        href="{{ route('user.booking.booking-member') }}"
        aria-current="page"
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


    <!-- PESAN FNB - TIDAK AKTIF -->
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


      <div class="auth-action-buttons">

    <!-- =========================================
         KERANJANG
    ========================================== -->

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


    <!-- =========================================
         NOTIFIKASI
    ========================================== -->

    <a
        class="vector-wrapper"
        href="{{ route('user.notification') }}"
        aria-label="Notifikasi"
    >
        <img
            class="vector-2"
            src="{{ asset('assets/Icon/Notif.svg') }}"
            alt=""
            aria-hidden="true"
        >
    </a>


    <!-- =========================================
         PROFILE
    ========================================== -->

    <div class="profile-menu">

        <button
            type="button"
            class="profile-button"
            id="profileButton"
            aria-expanded="false"
            aria-haspopup="true"
            aria-label="Buka menu profil"
        >

            <img
                class="profile-image"
                src="{{ asset('assets/Images/Elon.jpg') }}"
                alt="Kimi"
            >

            <span class="profile-name">
                Kimi
            </span>

            <img
                class="profile-arrow"
                src="{{ asset('assets/Icon/Arrow.svg') }}"
                alt=""
                aria-hidden="true"
            >

        </button>


        <!-- =====================================
             PROFILE DROPDOWN
        ====================================== -->

        <div
            class="profile-dropdown"
            id="profileDropdown"
            role="menu"
        >

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


            <div class="dropdown-divider"></div>


            <!-- PROFILE SAYA -->

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


            <!-- LOGOUT -->

            <a
                href="{{ route('index') }}"
                class="dropdown-item logout-button"
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

            </a>

        </div>

    </div>

</div>

    </header>
