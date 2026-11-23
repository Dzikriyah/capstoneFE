<dialog class="akhiri-sewa-popup" id="akhiriSewaDialog" aria-labelledby="akhiriSewaTitle">

        <!-- =====================================================
             HEADER POPUP
        ====================================================== -->
        <div class="akhiri-sewa-header">

            <div class="akhiri-sewa-header-left">

                <div class="akhiri-sewa-success-icon">
                    <img
                        src="{{ asset('assets/Icon/Centang.svg') }}"
                        alt=""
                    >
                </div>

                <div class="akhiri-sewa-header-text">

                    <h2 id="akhiriSewaTitle">Sewa Berhasil Diselesaikan</h2>

                    <p>
                        Sewa berhasil diselesaikan
                    </p>

                </div>

            </div>


            <!-- TOMBOL CLOSE -->
            <button
                type="button"
                class="akhiri-sewa-close"
                aria-label="Tutup" autofocus
            >
                <img
                    src="{{ asset('assets/Icon/Close.svg') }}"
                    alt=""
                >
            </button>

        </div>


        <!-- =====================================================
             ISI POPUP
        ====================================================== -->
        <div class="akhiri-sewa-content">


            <!-- =================================================
                 KOLOM KIRI
            ================================================== -->
            <div class="akhiri-sewa-left">


                <!-- INFORMASI PELANGGAN -->
                <div class="akhiri-sewa-info-card">

                    <div class="akhiri-sewa-card-title">

                        <div class="akhiri-sewa-small-icon">
                            <img
                                src="{{ asset('assets/Icon/User.svg') }}"
                                alt=""
                            >
                        </div>

                        <h3>
                            Informasi Pelanggan
                        </h3>

                    </div>


                    <div class="akhiri-sewa-info-row">
                        <span>Nama Pelanggan</span>
                        <strong>Kimi Antonelli</strong>
                    </div>

                    <div class="akhiri-sewa-info-row">
                        <span>No Telepon</span>
                        <strong>081234567890</strong>
                    </div>

                </div>


                <!-- INFORMASI UNIT PS -->
                <div class="akhiri-sewa-info-card">

                    <div class="akhiri-sewa-card-title">

                        <div class="akhiri-sewa-small-icon">
                            <img
                                src="{{ asset('assets/Icon/Game.svg') }}"
                                alt=""
                            >
                        </div>

                        <h3>
                            Informasi Unit PS
                        </h3>

                    </div>


                    <div class="akhiri-sewa-unit-name">
                        TV 2
                    </div>

                    <p class="akhiri-sewa-unit-type">
                        PS4
                    </p>

                </div>


                <!-- DETAIL PENYEWAAN -->
                <div class="akhiri-sewa-rental-card">

                    <div class="akhiri-sewa-card-title">

                        <div class="akhiri-sewa-small-icon">
                            <img
                                src="{{ asset('assets/Icon/Note.svg') }}"
                                alt=""
                            >
                        </div>

                        <h3>
                            Detail Penyewaan
                        </h3>

                    </div>


                    <div class="akhiri-sewa-rental-list">

                        <div class="akhiri-sewa-rental-row">
                            <span>No. Transaksi</span>
                            <strong>TRX-0018</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Tanggal Sewa</span>
                            <strong>10 Oktober 2026</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Jam Sewa</span>
                            <strong>14.00</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Total Durasi</span>
                            <strong data-receipt-duration>2 Jam</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Harga Per Jam</span>
                            <strong>Rp 8.000</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Metode Pembayaran</span>
                            <strong>QRIS</strong>
                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 KOLOM KANAN - STRUK
            ================================================== -->
            <div class="akhiri-sewa-receipt">

                <div class="akhiri-sewa-receipt-inner">


                    <!-- LOGO -->
                    <img
                        src="{{ asset('assets/Icon/Logo.svg') }}"
                        alt="IB Gaming"
                        class="akhiri-sewa-receipt-logo"
                    >


                    <h3>
                        STRUK SEWA PLAYSTATION
                    </h3>

                    <p class="akhiri-sewa-receipt-transaction">
                        No. Transaksi: TRX-0018
                    </p>


                    <div class="akhiri-sewa-receipt-line"></div>


                    <!-- DETAIL STRUK -->
                    <div class="akhiri-sewa-receipt-list">

                        <div>
                            <span>Tanggal Sewa</span>
                            <strong>10 Oktober</strong>
                        </div>

                        <div>
                            <span>Waktu Mulai</span>
                            <strong>14:00</strong>
                        </div>

                        <div>
                            <span>Waktu Selesai</span>
                            <strong data-receipt-end>16:00</strong>
                        </div>

                        <div>
                            <span>Durasi</span>
                            <strong data-receipt-duration>2 Jam</strong>
                        </div>

                    </div>


                    <div class="akhiri-sewa-receipt-divider"></div>


                    <div class="akhiri-sewa-receipt-list">

                        <div>
                            <span>Biaya Durasi Awal</span>
                            <strong>Rp 16.000</strong>
                        </div>

                        <div>
                            <span>Tambahan Durasi</span>
                            <strong data-receipt-extra>Rp 0</strong>
                        </div>

                    </div>


                    <!-- TOTAL -->
                    <div class="akhiri-sewa-total">

                        <span>Total Pembayaran</span>

                        <strong data-receipt-total>
                            Rp 16.000
                        </strong>

                    </div>


                    <p class="akhiri-sewa-payment-method">
                        Metode Pembayaran : Tunai
                    </p>


                    <div class="akhiri-sewa-receipt-line"></div>


                    <p class="akhiri-sewa-thankyou">
                        Terima Kasih telah bermain di
                    </p>


                    <img
                        src="{{ asset('assets/Icon/Logo.svg') }}"
                        alt="IB Gaming"
                        class="akhiri-sewa-receipt-logo-bottom"
                    >

                </div>

            </div>

        </div>


        <!-- =====================================================
             FOOTER BUTTON
        ====================================================== -->
        <div class="akhiri-sewa-actions">

            <button
                type="button"
                class="akhiri-sewa-secondary-button"
                data-print-receipt
            >
                Cetak Struk
            </button>

            <button
                type="button"
                class="akhiri-sewa-secondary-button"
                data-download-receipt
            >
                Unduh PDF
            </button>

            <a
                href="{{ route('admin.dashboard-admin') }}"
                class="akhiri-sewa-primary-button"
            >
                Kembali Ke Dashboard
            </a>

        </div>
</dialog>
