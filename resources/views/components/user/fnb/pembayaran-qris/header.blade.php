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

            <a class="link" href="{{ route('user.home') }}">

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


            <a class="div" href="{{ route('user.booking.booking-member') }}">

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


            <a
                class="link-2"
                href="{{ route('user.fnb.pesan-fnb') }}"
                aria-current="page"
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


        <div
            class="auth-action-buttons"
            id="authActionButtons"
        ></div>

    </header>
