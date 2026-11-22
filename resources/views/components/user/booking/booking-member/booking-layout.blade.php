<section class="booking-layout">


            <!-- =================================================
                 KOLOM UTAMA
            ================================================== -->

            <div class="booking-main">


                <!-- =================================================
                     DATA DIRI
                ================================================== -->

                <section class="booking-card personal-data-card">

                    <div class="booking-card-header">

                        <div class="booking-card-icon">

                            <img
                                src="{{ asset('assets/Icon/User.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                        </div>


                        <div class="booking-card-heading">

                            <h2>
                                Data Diri
                            </h2>

                            <p>
                                Pastikan Data diri yang dimasukkan
                                sesuai dengan identitas
                            </p>

                        </div>

                    </div>


                    <div class="personal-data-form">


                        <!-- Nama Lengkap -->
                        <div class="form-group">

                            <label for="fullName">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                id="fullName"
                                name="fullName"
                                placeholder="Masukan Nama Lengkap"
                                autocomplete="name"
                            >

                        </div>


                        <!-- Email -->
                        <div class="form-group">

                            <label for="email">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Contoh: namakamu@mail.com"
                                autocomplete="email"
                            >

                        </div>


                        <!-- Nomor Telepon -->
                        <div class="form-group phone-field">

                            <label for="phoneNumber">
                                Nomor Telepon
                            </label>

                            <input
                                type="tel"
                                id="phoneNumber"
                                name="phoneNumber"
                                placeholder="Contoh: 08123456789"
                                autocomplete="tel"
                            >

                        </div>

                    </div>

                </section>



                <!-- =================================================
                     DOKUMEN VERIFIKASI
                ================================================== -->

                <section class="booking-card verification-card">

                    <div class="booking-card-header">

                        <div class="booking-card-icon">

                            <img
                                src="{{ asset('assets/Icon/Note.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                        </div>


                        <div class="booking-card-heading">

                            <h2>
                                Dokumen Verifikasi
                            </h2>

                            <p>
                                Unggah Foto KTP dan Foto wajah untuk
                                proses verifikasi oleh admin
                            </p>

                        </div>

                    </div>


                    <div class="verification-grid">


                        <!-- =================================================
                             FOTO KTP
                        ================================================== -->

                        <div class="document-upload-box">

                            <div class="document-upload-heading">

                                <div class="document-icon">

                                    <img
                                        src="{{ asset('assets/Icon/Id.svg') }}"
                                        alt=""
                                        aria-hidden="true"
                                    >

                                </div>


                                <div>

                                    <h3>
                                        Foto KTP
                                    </h3>

                                    <p>
                                        Upload Foto KTP yang jelas dan
                                        terbaca.
                                        <br>
                                        Format: JPG, PNG (Maks. 5MB)
                                    </p>

                                </div>

                            </div>


                            <input
                                type="file"
                                id="ktpFile"
                                name="ktpFile"
                                accept=".jpg,.jpeg,.png"
                                hidden
                            >


                            <label
                                for="ktpFile"
                                class="file-button"
                            >
                                Pilih File
                            </label>


                            <span
                                class="selected-file"
                                id="ktpFileName"
                            ></span>

                        </div>



                        <!-- =================================================
                             FOTO WAJAH
                        ================================================== -->

                        <div class="document-upload-box">

                            <div class="document-upload-heading">

                                <div class="document-icon">

                                    <img
                                        src="{{ asset('assets/Icon/User.svg') }}"
                                        alt=""
                                        aria-hidden="true"
                                    >

                                </div>


                                <div>

                                    <h3>
                                        Foto Wajah
                                    </h3>

                                    <p>
                                        Upload Foto Wajah yang jelas.
                                        <br>
                                        Format: JPG, PNG (Maks. 5MB)
                                    </p>

                                </div>

                            </div>


                            <input
                                type="file"
                                id="faceFile"
                                name="faceFile"
                                accept=".jpg,.jpeg,.png"
                                hidden
                            >


                            <label
                                for="faceFile"
                                class="file-button"
                            >
                                Pilih File
                            </label>


                            <span
                                class="selected-file"
                                id="faceFileName"
                            ></span>

                        </div>

                    </div>

                </section>



                <!-- =================================================
                     PERNYATAAN
                ================================================== -->

                <section class="booking-card statement-card">

                    <div class="booking-card-header">

                        <div class="booking-card-icon">

                            <img
                                src="{{ asset('assets/Icon/Note.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                        </div>


                        <div class="booking-card-heading">

                            <h2>
                                Pernyataan
                            </h2>

                            <p>
                                Unggah Foto KTP dan Foto wajah untuk
                                proses verifikasi oleh admin
                            </p>

                        </div>

                    </div>


                    <div class="statement-content">

                        <label
                            for="agreement"
                            class="statement-checkbox"
                        >

                            <input
                                type="checkbox"
                                id="agreement"
                                name="agreement"
                            >

                            <span class="custom-checkbox"></span>

                            <span class="statement-text">
                                Saya menyatakan bahwa data yang saya
                                berikan adalah benar dan sesuai dengan
                                identitas asli
                            </span>

                        </label>


                        <p class="statement-description">
                            Data ini digunakan untuk keperluan
                            verifikasi dan keamanan penyewaan
                            PlayStation di IB Gaming
                        </p>

                    </div>

                </section>



                <!-- =================================================
                     BUTTON JOIN MEMBER
                ================================================== -->

                <div class="booking-submit-wrapper">

                    <button
                        type="button"
                        class="join-member-button"
                        id="joinMemberButton"
                    >
                        Join Member
                    </button>

                </div>

            </div>



            <!-- =================================================
                 SIDEBAR INFORMASI
            ================================================== -->

            <aside
                class="booking-information"
                aria-label="Informasi pengajuan booking"
            >

                <div class="information-card">


                    <h2>
                        Informasi
                    </h2>


                    <!-- =================================================
                         STEP 1
                    ================================================== -->

                    <div class="information-step">

                        <div class="step-number">
                            1
                        </div>


                        <div class="step-content">

                            <h3>
                                Login Akun
                            </h3>

                            <p>
                                Pastikan Sudah Login untuk
                                mengajukan booking PlayStation
                            </p>

                        </div>

                    </div>



                    <!-- =================================================
                         STEP 2
                    ================================================== -->

                    <div class="information-step">

                        <div class="step-number">
                            2
                        </div>


                        <div class="step-content">

                            <h3>
                                Isi Data Diri
                            </h3>

                            <p>
                                Lengkapi Data Diri sesuai
                                identitas asli
                            </p>

                        </div>

                    </div>



                    <!-- =================================================
                         STEP 3
                    ================================================== -->

                    <div class="information-step">

                        <div class="step-number">
                            3
                        </div>


                        <div class="step-content">

                            <h3>
                                Unggah Dokumen
                            </h3>

                            <p>
                                Upload foto KTP dan foto wajah
                                yang jelas
                            </p>

                        </div>

                    </div>



                    <!-- =================================================
                         STEP 4
                    ================================================== -->

                    <div class="information-step">

                        <div class="step-number">
                            4
                        </div>


                        <div class="step-content">

                            <h3>
                                Verifikasi Admin
                            </h3>

                            <p>
                                Admin akan memverifikasi data kamu.
                                Kamu akan mendapatkan notifikasi
                                setelah verifikasi selesai
                            </p>

                        </div>

                    </div>



                    <!-- =================================================
                         STEP 5
                    ================================================== -->

                    <div class="information-step">

                        <div class="step-number">
                            5
                        </div>


                        <div class="step-content">

                            <h3>
                                Lanjut Ke Form Booking
                            </h3>

                            <p>
                                Jika disetujui, kamu bisa melanjutkan
                                ke pemesanan unit
                            </p>

                        </div>

                    </div>

                </div>

            </aside>

        </section>
