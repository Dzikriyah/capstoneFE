<aside class="profile-sidebar">


                <!-- Profile Saya -->

                <a
                    href="{{ route('user.profile') }}"
                    class="sidebar-item active"
                >

                    <span class="sidebar-item-icon">

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

            </aside>
