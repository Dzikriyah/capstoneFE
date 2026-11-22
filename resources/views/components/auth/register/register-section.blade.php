<section class="register-section">

                <div class="register-card">

                    <!-- Register Header -->
                    <header class="register-header">

                        <p class="register-label">
                            REGISTER
                        </p>

                        <p class="register-description">
                            Buat akunmu sekarang dan nikmati semua layanan IB
                            Gaming dengan mudah.
                        </p>

                    </header>


                    <!-- Register Form -->
                    <form
                        class="register-form"
                        id="registerForm"
                    >

                        <!-- Full Name & Username -->
                        <div class="form-row">

                            <!-- Full Name -->
                            <div class="form-group">

                                <label for="fullname">
                                    Full Name
                                </label>

                                <div class="input-wrapper">

                                    <span class="input-icon">

                                        <img
                                            src="{{ asset('assets/Icon/User.svg') }}"
                                            alt=""
                                        >

                                    </span>

                                    <input
                                        type="text"
                                        id="fullname"
                                        name="fullname"
                                        placeholder="Masukkan nama lengkap"
                                        autocomplete="name"
                                        required
                                    >

                                </div>

                            </div>


                            <!-- Username -->
                            <div class="form-group">

                                <label for="username">
                                    Username
                                </label>

                                <div class="input-wrapper">

                                    <span class="input-icon">

                                        <img
                                            src="{{ asset('assets/Icon/User.svg') }}"
                                            alt=""
                                        >

                                    </span>

                                    <input
                                        type="text"
                                        id="username"
                                        name="username"
                                        placeholder="Pilih username"
                                        autocomplete="username"
                                        required
                                    >

                                </div>

                            </div>

                        </div>


                        <!-- Email Address -->
                        <div class="form-group">

                            <label for="email">
                                Email Address
                            </label>

                            <div class="input-wrapper">

                                <span class="input-icon">

                                    <img
                                        src="{{ asset('assets/Icon/Email.svg') }}"
                                        alt=""
                                    >

                                </span>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="Masukkan email aktif"
                                    autocomplete="email"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Phone Number -->
                        <div class="form-group">

                            <label for="phone">
                                Phone Number
                            </label>

                            <div class="input-wrapper">

                                <span class="input-icon">

                                    <img
                                        src="{{ asset('assets/Icon/Telpon.svg') }}"
                                        alt=""
                                    >

                                </span>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="Masukkan nomor handphone"
                                    autocomplete="tel"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Password & Confirm Password -->
                        <div class="form-row">

                            <!-- Password -->
                            <div class="form-group">

                                <label for="password">
                                    Password
                                </label>

                                <div class="input-wrapper">

                                    <span class="input-icon">

                                        <img
                                            src="{{ asset('assets/Icon/Password.svg') }}"
                                            alt=""
                                        >

                                    </span>

                                    <input
                                        type="password"
                                        id="password"
                                        name="password"
                                        placeholder="Password"
                                        autocomplete="new-password"
                                        required
                                    >

                                    <button
                                        type="button"
                                        class="toggle-password"
                                        data-target="password"
                                        aria-label="Tampilkan password"
                                        aria-pressed="false"
                                    >

                                        <img
                                            src="{{ asset('assets/Icon/Mata.svg') }}"
                                            alt=""
                                        >

                                    </button>

                                </div>

                            </div>


                            <!-- Confirm Password -->
                            <div class="form-group">

                                <label for="confirmPassword">
                                    Confirm Password
                                </label>

                                <div class="input-wrapper">

                                    <span class="input-icon">

                                        <img
                                            src="{{ asset('assets/Icon/Password.svg') }}"
                                            alt=""
                                        >

                                    </span>

                                    <input
                                        type="password"
                                        id="confirmPassword"
                                        name="confirmPassword"
                                        placeholder="Ulangi Password"
                                        autocomplete="new-password"
                                        required
                                    >

                                    <button
                                        type="button"
                                        class="toggle-password"
                                        data-target="confirmPassword"
                                        aria-label="Tampilkan konfirmasi password"
                                        aria-pressed="false"
                                    >

                                        <img
                                            src="{{ asset('assets/Icon/Mata.svg') }}"
                                            alt=""
                                        >

                                    </button>

                                </div>

                            </div>

                        </div>


                        <!-- Register Button -->
                        <button
                            type="submit"
                            class="register-button"
                        >

                            <span>Register</span>

                            <img
                                src="{{ asset('assets/Icon/Panah.svg') }}"
                                alt=""
                                class="button-arrow"
                            >

                        </button>


                        <!-- Login Link -->
                        <div class="register-footer">

                            <p>
                                Sudah punya akun?
                            </p>

                            <a href="{{ route('auth.login') }}">
                                Login di sini
                            </a>

                        </div>

                    </form>


                    <!-- Register Success Modal -->
                    <div
                        class="success-modal"
                        id="successModal"
                    >

                        <div class="success-modal-card">

                            <div class="success-icon">
                                <span>✓</span>
                            </div>

                            <h2>
                                Registrasi Berhasil!
                            </h2>

                            <p>
                                Akun IB Gaming kamu berhasil dibuat.
                                Silakan login untuk menikmati layanan kami.
                            </p>

                            <button
                                type="button"
                                id="successLoginButton"
                            >
                                Login Sekarang
                            </button>

                        </div>

                    </div>

                </div>

            </section>
