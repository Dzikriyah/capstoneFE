<header class="admin-header">

                <!-- SEARCH DI KIRI -->
            <div class="admin-search-wrapper">
                <img
                    src="{{ asset('assets/Icon/Search.svg') }}"
                    alt="Search"
                    class="admin-search-icon"
                >

                <input
                    type="text"
                    class="admin-search"
                    placeholder="Cari menu, booking, pelanggan..."
                >
            </div>


                <!-- NOTIFICATION + PROFILE DI KANAN -->
                <div class="admin-header-right">

                    <button
                        type="button"
                        class="admin-notification"
                        aria-label="Notifikasi"
                    >

                        <a
                href="{{ route('user.notification') }}"
                class="admin-notification"
                aria-label="Notifikasi"
            >
                <img
                    src="{{ asset('assets/Icon/Notif.svg') }}"
                    alt="Notifikasi"
                    class="admin-notification-icon"
                >

                <span class="admin-notification-badge"></span>
            </a>

                    </button>


                    <div class="admin-profile">

                        <img
                            src="{{ asset('assets/Images/Elon.jpg') }}"
                            alt="Admin"
                            class="admin-profile-image"
                        >

                        <div class="admin-profile-info">

                            <p class="admin-profile-name">
                                Admin
                            </p>

                            <p class="admin-profile-role">
                                Administrator
                            </p>

                        </div>

                    </div>

                </div>

            </header>
