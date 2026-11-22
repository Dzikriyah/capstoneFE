<section class="sewa-detail-container">


        <!-- =========================
             INFORMASI ATAS
        ========================== -->
        <div class="sewa-detail-top">


            <!-- =========================
                 INFORMASI PELANGGAN
            ========================== -->
            <div class="sewa-info-card sewa-customer-card">

                <div class="sewa-card-title">

                    <img
                        src="{{ asset('assets/Icon/User.svg') }}"
                        alt=""
                        class="sewa-card-title-icon"
                    >

                    <h2>Informasi Pelanggan</h2>

                </div>


                <!-- NAMA PELANGGAN -->
                <div class="sewa-form-group">

                    <label for="namaPelanggan">
                        Nama Pelanggan
                    </label>

                    <div class="sewa-input-wrapper">

                        <img
                            src="{{ asset('assets/Icon/User.svg') }}"
                            alt=""
                            class="sewa-input-icon"
                        >

                        <input
                            type="text"
                            id="namaPelanggan"
                            name="namaPelanggan"
                            placeholder="Masukan Nama Pelanggan"
                        >

                    </div>

                </div>


                <!-- NO TELEPON -->
                <div class="sewa-form-group">

                    <label for="noTelepon">
                        No Telepon
                    </label>

                    <div class="sewa-input-wrapper">

                        <img
                            src="{{ asset('assets/Icon/Telpon.svg') }}"
                            alt=""
                            class="sewa-input-icon"
                        >

                        <input
                            type="tel"
                            id="noTelepon"
                            name="noTelepon"
                            placeholder="08XX-XXXX-XXX"
                        >

                    </div>

                </div>

            </div>


            <!-- =========================
                 INFORMASI UNIT PS
            ========================== -->
            <div class="sewa-info-card sewa-unit-card">

                <div class="sewa-card-title">

                    <img
                        src="{{ asset('assets/Icon/TV.svg') }}"
                        alt=""
                        class="sewa-card-title-icon"
                    >

                    <h2>Informasi Unit Ps</h2>

                </div>


                <div class="sewa-unit-row">

                    <span>TV</span>

                    <span>TV 2</span>

                </div>


                <div class="sewa-unit-row">

                    <label for="sewaJenisUnit">Jenis Unit</label>
                    <select id="sewaJenisUnit" name="jenisUnit" class="sewa-select-display">
                        <option value="PS4" selected>PS 4</option>
                    </select>

                </div>

            </div>

        </div>


        <!-- =========================
             DETAIL SEWA
        ========================== -->
        <div class="sewa-info-card sewa-rental-card">

            <div class="sewa-card-title">

                <img
                    src="{{ asset('assets/Icon/Note.svg') }}"
                    alt=""
                    class="sewa-card-title-icon"
                >

                <h2>Detail Sewa</h2>

            </div>


            <div class="sewa-rental-content">


                <!-- =========================
                     KOLOM KIRI
                ========================== -->
                <div class="sewa-rental-column">


                    <!-- ID TRANSAKSI -->
                    <div class="sewa-detail-row">

                        <label for="idTransaksi">
                            ID Transaksi
                        </label>

                        <input
                            type="text"
                            id="idTransaksi"
                            name="idTransaksi"
                            value="TRX-0018"
                            readonly
                        >

                    </div>


                    <!-- TANGGAL SEWA -->
                    <div class="sewa-detail-row">

                        <label for="tanggalSewa">
                            Tanggal Sewa
                        </label>

                        <input
                            type="text"
                            id="tanggalSewa"
                            name="tanggalSewa"
                            value="31 Okt 2026"
                            readonly
                        >

                    </div>


                    <!-- JAM MULAI -->
                    <div class="sewa-detail-row">

                        <label for="jamMulai">
                            Jam Mulai
                        </label>

                        <input
                            type="text"
                            id="jamMulai"
                            name="jamMulai"
                            value="14.00"
                            readonly
                        >

                    </div>


                    <!-- ESTIMASI SELESAI -->
                    <div class="sewa-detail-row">

                        <label for="estimasiSelesai">
                            Estimasi Selesai
                        </label>

                        <input
                            type="text"
                            id="estimasiSelesai"
                            name="estimasiSelesai"
                            value="16.00"
                            readonly
                        >

                    </div>

                </div>


                <!-- =========================
                     PEMBATAS
                ========================== -->
                <div class="sewa-rental-divider"></div>


                <!-- =========================
                     KOLOM KANAN
                ========================== -->
                <div class="sewa-rental-column">


                    <!-- DURASI -->
                    <div class="sewa-detail-row">

                        <label for="durasi">
                            Durasi
                        </label>

                        <select id="durasi" name="durasi" class="sewa-select-display sewa-duration-select">
                            @foreach (range(1, 12) as $jam)
                                <option value="{{ $jam }}" @selected($jam === 2)>{{ $jam }} Jam</option>
                            @endforeach
                        </select>

                    </div>


                    <!-- HARGA PER JAM -->
                    <div class="sewa-detail-row">

                        <label for="hargaPerJam">
                            Harga Per Jam
                        </label>

                        <input
                            type="text"
                            id="hargaPerJam"
                            name="hargaPerJam"
                            data-harga-per-jam="8000"
                            value="Rp 8.000"
                            readonly
                        >

                    </div>


                    <!-- TOTAL -->
                    <div class="sewa-detail-row">

                        <label for="total">
                            Total
                        </label>

                        <input
                            type="text"
                            id="total"
                            name="total"
                            value="Rp 16.000"
                            readonly
                        >

                    </div>


                    <!-- =========================
                         METODE PEMBAYARAN
                    ========================== -->
                    <div class="sewa-detail-row sewa-payment-row">

                        <span class="sewa-payment-label" id="sewa-payment-label">
                            Metode Pembayaran
                        </span>

                        <div class="sewa-payment-options" role="group" aria-labelledby="sewa-payment-label">
                            <label class="sewa-payment-option">
                                <input class="sewa-radio" type="radio" name="metode_pembayaran" value="tunai" checked>
                                <span>Tunai</span>
                            </label>

                            <label class="sewa-payment-option">
                                <input class="sewa-radio" type="radio" name="metode_pembayaran" value="qris">
                                <span>QRIS</span>
                            </label>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             AKSI
        ========================== -->
        <div class="sewa-info-card sewa-action-card">

            <div class="sewa-card-title sewa-action-title">

                <h2>Aksi</h2>

            </div>

            <a href="{{ route('admin.sewa-ps') }}" class="sewa-start-button">
                Mulai Sesi Sewa
            </a>

        </div>

    </section>
