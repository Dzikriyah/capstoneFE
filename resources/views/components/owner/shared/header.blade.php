<header class="topbar">
                <!-- Hamburger Button (Hanya Muncul di Mobile/Tablet) -->
                <button type="button" class="btn-hamburger" id="btnOpenSidebar" aria-label="Buka Menu">
                    <span class="hamburger-bar"></span>
                    <span class="hamburger-bar"></span>
                    <span class="hamburger-bar"></span>
                </button>

                <div class="topbar-actions">
                    <button type="button" class="btn-notif" aria-label="Notifikasi">
                        <img src="{{ asset('assets/Icon/Notif.svg') }}" alt="Notifikasi">
                    </button>

                    <div class="owner-pill">
                        <div class="owner-avatar">
                            <img src="{{ asset('assets/Icon/User-gold.svg') }}" alt="Foto Profil">
                        </div>
                        <div class="owner-details">
                            <span class="owner-name">Owner</span>
                            <span class="owner-role">Business Owner</span>
                        </div>
                        <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="owner-dropdown">
                    </div>
                </div>
            </header>
