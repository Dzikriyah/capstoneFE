<header class="admin-header">

                <div class="admin-search-wrapper">

                    <img
                        src="{{ asset('assets/Icon/Search.svg') }}"
                        alt=""
                        class="admin-search-icon"
                    >

                    <input
                        type="text"
                        class="admin-search"
                        placeholder="Cari menu, booking, pelanggan..."
                    >

                </div>


                <div class="admin-header-right">

                    <!-- Notification -->
                    <button type="button" id="openAdminNotification" aria-haspopup="dialog" aria-controls="adminNotificationDialog"
                        class="admin-notification"
                        aria-label="Notifikasi"
                    >

                        <img
                            src="{{ asset('assets/Icon/Notif.svg') }}"
                            alt="Notifikasi"
                            class="admin-notification-icon"
                        >

                        <span class="admin-notification-badge"></span>

                    </button>


                    <!-- Profile -->
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
