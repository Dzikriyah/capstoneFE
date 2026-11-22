<section class="profile-card">


                <!-- ====================================
                     PROFILE HEADER
                ===================================== -->

                <div class="profile-card-header">


                    <div class="profile-heading-icon">

                        <img
                            src="{{ asset('assets/Icon/User-gold.svg') }}"
                            alt=""
                        >

                    </div>


                    <div class="profile-heading-content">

                        <h1>
                            Profile Saya
                        </h1>

                        <p>
                            Kelola informasi pribadi dan akun anda
                        </p>

                    </div>

                </div>



                <!-- Divider -->

                <div class="section-divider"></div>



                <!-- ====================================
                     PROFILE FORM
                ===================================== -->

                <form
                    class="profile-form"
                    id="profileForm"
                >


                    <!-- ==================================
                         PERSONAL INFORMATION
                    =================================== -->

                    <div class="personal-information">


                        <!-- =================================
                             PROFILE PHOTO
                        ================================== -->

                        <div class="profile-photo-section">


                            <div class="profile-image-wrapper">

                                <img
                                    id="profileImage"
                                    class="profile-image"
                                    src="{{ asset('assets/Images/Elon.jpg') }}"
                                    alt="Foto Profil"
                                >

                                <button
                                    type="button"
                                    class="camera-button"
                                    id="cameraButton"
                                    aria-label="Ganti foto profil"
                                >

                                    <img
                                        src="{{ asset('assets/Icon/Camera.svg') }}"
                                        alt=""
                                    >

                                </button>

                            </div>


                            <input
                                type="file"
                                id="profileImageInput"
                                accept="image/png,image/jpeg,image/jpg"
                                hidden
                            >


                            <p class="photo-helper">
                                Klik gambar untuk ganti foto profile
                                <br>
                                PNG, JPG, JPEG (Maks. 2MB)
                            </p>

                        </div>



                        <!-- =================================
                             PERSONAL FIELDS
                        ================================== -->

                        <div class="personal-fields">


                            <!-- Nama Lengkap -->

                            <div class="form-group">

                                <label for="fullName">
                                    Nama Lengkap
                                </label>


                                <div class="input-wrapper">


                                    <img
                                        class="input-icon"
                                        src="{{ asset('assets/Icon/user.svg') }}"
                                        alt=""
                                    >


                                    <input
                                        type="text"
                                        id="fullName"
                                        name="fullName"
                                        value="Kimi Antonelli"
                                        placeholder="Masukkan nama lengkap"
                                        autocomplete="name"
                                    >

                                </div>

                            </div>



                            <!-- Email -->

                            <div class="form-group">

                                <label for="email">
                                    Email
                                </label>


                                <div class="input-wrapper">


                                    <img
                                        class="input-icon"
                                        src="{{ asset('assets/Icon/Email.svg') }}"
                                        alt=""
                                    >


                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="kimi@gmail.com"
                                        placeholder="Masukkan email"
                                        autocomplete="email"
                                    >

                                </div>

                            </div>



                            <!-- No Telepon -->

                            <div class="form-group">

                                <label for="phone">
                                    No Telepon
                                </label>


                                <div class="input-wrapper">


                                    <img
                                        class="input-icon"
                                        src="{{ asset('assets/Icon/Telpon.svg') }}"
                                        alt=""
                                    >


                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        value="081234567890"
                                        placeholder="Masukkan nomor telepon"
                                        autocomplete="tel"
                                    >

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- ====================================
                         PASSWORD SECTION
                    ===================================== -->

                    <section class="password-section">


                        <!-- Divider -->

                        <div class="section-divider"></div>



                        <!-- Password Heading -->

                        <div class="password-heading">


                            <div class="password-heading-icon">

                                <img
                                    src="{{ asset('assets/Icon/Password.svg') }}"
                                    alt=""
                                >

                            </div>


                            <div>

                                <h2>
                                    Ubah Password
                                </h2>

                                <p>
                                    Isi bagian ini jika ingin mengganti password
                                </p>

                            </div>

                        </div>



                        <!-- =================================
                             PASSWORD SAAT INI
                        ================================== -->

                        <div class="form-group current-password-field">

                            <label for="currentPassword">
                                Password Saat Ini
                            </label>


                            <div class="input-wrapper">


                                <img
                                    class="input-icon"
                                    src="{{ asset('assets/Icon/Password.svg') }}"
                                    alt=""
                                >


                                <input
                                    type="password"
                                    id="currentPassword"
                                    name="currentPassword"
                                    placeholder="Masukkan password saat ini"
                                    autocomplete="current-password"
                                >


                                <button
                                    type="button"
                                    class="toggle-password"
                                    data-target="currentPassword"
                                    aria-label="Tampilkan password saat ini"
                                >

                                    <img
                                        src="{{ asset('assets/Icon/Mata.svg') }}"
                                        alt=""
                                    >

                                </button>

                            </div>

                        </div>



                        <!-- =================================
                             PASSWORD BARU + KONFIRMASI
                        ================================== -->

                        <div class="password-row">


                            <!-- Password Baru -->

                            <div class="form-group">

                                <label for="newPassword">
                                    Password Baru
                                </label>


                                <div class="input-wrapper">


                                    <img
                                        class="input-icon"
                                        src="{{ asset('assets/Icon/Password.svg') }}"
                                        alt=""
                                    >


                                    <input
                                        type="password"
                                        id="newPassword"
                                        name="newPassword"
                                        placeholder="Masukkan password baru"
                                        autocomplete="new-password"
                                    >


                                    <button
                                        type="button"
                                        class="toggle-password"
                                        data-target="newPassword"
                                        aria-label="Tampilkan password baru"
                                    >

                                        <img
                                            src="{{ asset('assets/Icon/Mata.svg') }}"
                                            alt=""
                                        >

                                    </button>

                                </div>

                            </div>



                            <!-- Konfirmasi Password -->

                            <div class="form-group">

                                <label for="confirmPassword">
                                    Konfirmasi Password Baru
                                </label>


                                <div class="input-wrapper">


                                    <img
                                        class="input-icon"
                                        src="{{ asset('assets/Icon/Password.svg') }}"
                                        alt=""
                                    >


                                    <input
                                        type="password"
                                        id="confirmPassword"
                                        name="confirmPassword"
                                        placeholder="Konfirmasi password baru"
                                        autocomplete="new-password"
                                    >


                                    <button
                                        type="button"
                                        class="toggle-password"
                                        data-target="confirmPassword"
                                        aria-label="Tampilkan konfirmasi password"
                                    >

                                        <img
                                            src="{{ asset('assets/Icon/Mata.svg') }}"
                                            alt=""
                                        >

                                    </button>

                                </div>

                            </div>

                        </div>



                        <!-- =================================
                             SAVE BUTTON
                        ================================== -->

                        <div class="form-actions">

                            <button
                                type="submit"
                                class="save-button"
                                id="saveProfileButton"
                            >
                                Simpan Perubahan
                            </button>

                        </div>

                    </section>

                </form>

            </section>
