<section class="sewa-digunakan-container">


        <!-- =========================
             STATUS SESSION
        ========================== -->
        <div class="sewa-digunakan-status-grid">


            <!-- STATUS SESI -->
            <div class="sewa-session-card">

                <div class="sewa-session-icon-wrapper">

                    <img
                        src="{{ asset('assets/Icon/Game.svg') }}"
                        alt=""
                        class="sewa-session-icon"
                    >

                </div>

                <div class="sewa-session-content">

                    <p class="sewa-session-label">
                        Status Sesi
                    </p>

                    <p class="sewa-session-status">
                        Sedang Bermain
                    </p>

                    <p class="sewa-session-description">
                        Sesi sedang aktif, waktu terus berjalan
                    </p>

                </div>

            </div>


            <!-- SISA WAKTU -->
            <div class="sewa-session-card sewa-time-card">

                <div class="sewa-time-icon-wrapper">

                    <img
                        src="{{ asset('assets/Icon/Timer.svg') }}"
                        alt=""
                        class="sewa-time-icon"
                    >

                </div>

                <div class="sewa-session-content">

                    <p class="sewa-session-label">
                        Sisa Waktu
                    </p>

                    <p class="sewa-session-time">
                        01:15:30
                    </p>

                </div>

            </div>

        </div>


        <!-- =========================
             INFORMASI PELANGGAN & UNIT
        ========================== -->
        <div class="sewa-digunakan-info-grid">


            <!-- INFORMASI PELANGGAN -->
            <div class="sewa-digunakan-card sewa-customer-used-card">

                <div class="sewa-used-card-title">

                    <img
                        src="{{ asset('assets/Icon/User.svg') }}"
                        alt=""
                        class="sewa-used-card-title-icon"
                    >

                    <h2>Informasi Pelanggan</h2>

                </div>


                <div class="sewa-customer-information">

                    <div class="sewa-customer-avatar">

                        <img
                            src="{{ asset('assets/Icon/User.svg') }}"
                            alt=""
                        >

                    </div>

                    <div class="sewa-customer-data">

                        <p class="sewa-customer-name">
                            Kimi Antonelli
                        </p>

                        <p class="sewa-customer-phone">
                            081234567890
                        </p>

                    </div>

                </div>

            </div>


            <!-- INFORMASI UNIT PS -->
            <div class="sewa-digunakan-card sewa-unit-used-card">

                <div class="sewa-used-card-title">

                    <img
                        src="{{ asset('assets/Icon/TV.svg') }}"
                        alt=""
                        class="sewa-used-card-title-icon"
                    >

                    <h2>Informasi Unit Ps</h2>

                </div>


                <div class="sewa-used-unit-row">

                    <span>TV</span>

                    <span>TV 2</span>

                </div>


                <div class="sewa-used-unit-row">

                    <span>Jenis Unit</span>

                    <div class="sewa-used-unit-value">
                        Ps 4
                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             DETAIL SEWA
        ========================== -->
        <div class="sewa-digunakan-card sewa-used-rental-card">

            <div class="sewa-used-rental-title">

                <h2>Detail Sewa</h2>

            </div>


            <div class="sewa-used-rental-content">


                <!-- KOLOM KIRI -->
                <div class="sewa-used-rental-column">

                    <div class="sewa-used-detail-row">
                        <span>ID Transaksi</span>
                        <span>TRX-0018</span>
                    </div>

                    <div class="sewa-used-detail-row">
                        <span>Tanggal Sewa</span>
                        <span>31 Okt 2026</span>
                    </div>

                    <div class="sewa-used-detail-row">
                        <span>Jam Mulai</span>
                        <span>14.00</span>
                    </div>

                    <div class="sewa-used-detail-row">
                        <span>Estimasi Selesai</span>
                        <span id="sewaEstimasiSelesai">16.00</span>
                    </div>

                </div>


                <!-- PEMBATAS -->
                <div class="sewa-used-rental-divider"></div>


                <!-- KOLOM KANAN -->
                <div class="sewa-used-rental-column">

                    <div class="sewa-used-detail-row">
                        <span>Durasi Awal</span>
                        <span>2 Jam</span>
                    </div>

                    <div class="sewa-used-detail-row">
                        <span>Harga Per Jam</span>
                        <span>Rp 8.000</span>
                    </div>

                    <div class="sewa-used-detail-row">
                        <span>Total</span>
                        <span id="sewaTotalPembayaran">Rp 16.000</span>
                    </div>

                    <div class="sewa-used-detail-row">

                        <span>Status Pembayaran</span>

                        <span class="sewa-payment-status">
                            Sudah di Bayar
                        </span>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             ACTION BUTTON
        ========================== -->
        <div class="sewa-digunakan-actions">

            <button type="button" class="sewa-add-duration-button" id="openTambahDurasi" aria-haspopup="dialog" aria-controls="tambahDurasiDialog">Tambah Durasi</button>

           <button type="button" class="sewa-end-session-button" id="openAkhiriSewa" aria-haspopup="dialog" aria-controls="akhiriSewaDialog">Akhiri Sesi Sewa</button>

        </div>

    </section>
