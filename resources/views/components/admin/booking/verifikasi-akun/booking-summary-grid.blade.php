<section
        class="booking-summary-grid"
        aria-label="Ringkasan verifikasi akun"
    >


        <!-- MENUNGGU VERIFIKASI -->

        <article class="booking-summary-card pending">

            <div class="booking-summary-icon">

                <img
                    src="{{ asset('assets/Icon/User.svg') }}"
                    alt=""
                    aria-hidden="true"
                >

            </div>

            <div class="booking-summary-info">

                <p class="booking-summary-title">
                    Menunggu Verifikasi
                </p>

                <p class="booking-summary-number">
                    5
                </p>

                <p class="booking-summary-description">
                    Pengajuan baru
                </p>

            </div>

        </article>


        <!-- TERVERIFIKASI -->

        <article class="booking-summary-card verified">

            <div class="booking-summary-icon">

                <img
                    src="{{ asset('assets/Icon/Centang.svg') }}"
                    alt=""
                    aria-hidden="true"
                >

            </div>

            <div class="booking-summary-info">

                <p class="booking-summary-title">
                    Terverifikasi
                </p>

                <p class="booking-summary-number">
                    12
                </p>

                <p class="booking-summary-description">
                    Akun telah disetujui
                </p>

            </div>

        </article>


        <!-- DITOLAK -->

        <article class="booking-summary-card rejected">

            <div class="booking-summary-icon">

                <img
                    src="{{ asset('assets/Icon/Close.svg') }}"
                    alt=""
                    aria-hidden="true"
                >

            </div>

            <div class="booking-summary-info">

                <p class="booking-summary-title">
                    Ditolak
                </p>

                <p class="booking-summary-number">
                    2
                </p>

                <p class="booking-summary-description">
                    Pengajuan ditolak
                </p>

            </div>

        </article>

    </section>
