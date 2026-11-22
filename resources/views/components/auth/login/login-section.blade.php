<section class="login-section">

                <div class="login-card">

                    <!-- Login Header -->
                    <header class="login-header">

                        <div class="login-brand">

                            <div class="login-brand-icon">

                                <img
                                    src="{{ asset('assets/Icon/Logo.svg') }}"
                                    alt="IB Gaming Logo"
                                >

                            </div>

                            <h2>IB GAMING</h2>
                            <p>PLAY · EAT · ENJOY</p>

                        </div>


                        <div class="login-heading">
                            <h1>Welcome Back</h1>
                        </div>

                    </header>


                    <!-- Login Form -->
                    <form class="login-form" id="loginForm">

                        <!-- Email / Username -->
                        <div class="form-group">

                            <label for="identity">
                                Email or Username
                            </label>

                            <div class="input-wrapper">

                                <span class="input-icon-left">

                                    <img
                                        src="{{ asset('assets/Icon/Email.svg') }}"
                                        alt=""
                                    >

                                </span>

                                <input
                                    type="text"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email or username"
                                    autocomplete="username"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Password -->
                        <div class="form-group">

                            <label for="password">
                                Password
                            </label>

                            <div class="input-wrapper">

                                <span class="input-icon-left">

                                    <img
                                        src="{{ asset('assets/Icon/Password.svg') }}"
                                        alt=""
                                    >

                                </span>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Enter your password"
                                    autocomplete="current-password"
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


                        <!-- Remember Me & Forgot Password -->
                        <div class="form-options">

                            <label class="remember-option">

                                <input
                                    type="checkbox"
                                    name="remember"
                                    id="rememberMe"
                                >

                                <span>Remember me</span>

                            </label>


                            <a
                                href="#"
                                class="forgot-password"
                            >
                                Forgot password?
                            </a>

                        </div>


                        <!-- Login Button -->
                        <button
                            type="submit"
                            class="login-button"
                        >

                            <span>Login</span>

                            <span class="button-icon">

                                <img
                                    src="{{ asset('assets/Icon/Panah.svg') }}"
                                    alt=""
                                >

                            </span>

                        </button>

                    </form>


                    <!-- Login Footer -->
                    <footer class="login-footer">

                        <p>
                            Don't have an account?
                            <a href="{{ route('auth.register') }}">Register</a>
                        </p>

                    </footer>

                </div>

            </section>
