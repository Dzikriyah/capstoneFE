<dialog class="tambah-durasi-popup" id="tambahDurasiDialog" aria-labelledby="tambahDurasiTitle">

        <!-- HEADER -->
        <div class="tambah-durasi-header">

            <div class="tambah-durasi-header-left">

                <div class="tambah-durasi-title-icon">
                    <img
                        src="{{ asset('assets/Icon/Timer.svg') }}"
                        alt=""
                    >
                </div>

                <div class="tambah-durasi-title-content">
                    <h2 id="tambahDurasiTitle">Tambah Durasi Sewa</h2>
                    <p>Perpanjangan Waktu Bermain untuk Pelanggan</p>
                </div>

            </div>

            <button type="button" class="tambah-durasi-close" data-close-duration aria-label="Tutup" autofocus>&times;</button>

        </div>


        <!-- INFORMASI SESI -->
        <div class="tambah-durasi-current">

            <h3>Informasi Sesi Saat Ini</h3>

            <div class="tambah-durasi-current-grid">

                <!-- PELANGGAN -->
                <div class="tambah-durasi-info-card">

                    <div class="tambah-durasi-info-icon">

                        <img
                            src="{{ asset('assets/Icon/User.svg') }}"
                            alt=""
                        >

                    </div>

                    <div class="tambah-durasi-info-content">

                        <strong>Pelanggan</strong>
                        <span>Kimi Antonelli</span>
                        <span>081234567890</span>

                    </div>

                </div>


                <!-- UNIT PS -->
                <div class="tambah-durasi-info-card">

                    <div class="tambah-durasi-info-icon">

                        <img
                            src="{{ asset('assets/Icon/TV.svg') }}"
                            alt=""
                        >

                    </div>

                    <div class="tambah-durasi-info-content">

                        <strong>Unit PS</strong>
                        <span>TV 02</span>
                        <span>PS 4</span>

                    </div>

                </div>

            </div>

        </div>


        <!-- INFORMASI WAKTU -->
        <div class="tambah-durasi-time-info">

            <div class="tambah-durasi-time-item">
                <h3>Waktu Mulai</h3>
                <p>14:00</p>
            </div>

            <div class="tambah-durasi-time-item">
                <h3>Estimasi Selesai Saat Ini</h3>
                <p id="durasiSelesaiSaatIni">16:00</p>
            </div>

            <div class="tambah-durasi-time-item">
                <h3>Harga Per Jam</h3>
                <p>Rp 8.000</p>
            </div>

        </div>


        <!-- TAMBAH DURASI -->
        <div class="tambah-durasi-control-section">

            <div class="tambah-durasi-control">

                <h3>Tambah Jam</h3>

                <div class="tambah-durasi-counter">
                    <button type="button" class="tambah-durasi-counter-button" data-step="-1" aria-label="Kurangi jam">&minus;</button>
                    <input type="number" class="tambah-durasi-counter-value" id="durasi-jam" value="0"
                        min="0" max="24" step="1" aria-label="Tambah jam">
                    <button type="button" class="tambah-durasi-counter-button" data-step="1" aria-label="Tambah jam">+</button>
                </div>

            </div>


            <div class="tambah-durasi-control">

                <h3>Tambah Menit</h3>

                <div class="tambah-durasi-counter">
                    <button type="button" class="tambah-durasi-counter-button" data-step="-1" aria-label="Kurangi menit">&minus;</button>
                    <input type="number" class="tambah-durasi-counter-value" id="durasi-menit" value="0"
                        min="0" max="59" step="1" aria-label="Tambah menit">
                    <button type="button" class="tambah-durasi-counter-button" data-step="1" aria-label="Tambah menit">+</button>
                </div>

            </div>


            <div class="tambah-durasi-note">

                <div class="tambah-durasi-note-icon">
                    !
                </div>

                <p>
                    Estimasi selesai baru akan dihitung
                    berdasarkan tambahan waktu yang dimasukkan
                </p>

            </div>

        </div>


        <!-- RINGKASAN -->
        <div class="tambah-durasi-summary">

            <h3>Ringkasan Setelah Penambahan</h3>

            <div class="tambah-durasi-summary-list">

                <div class="tambah-durasi-summary-row">
                    <span>Total Durasi Sewa</span>
                    <strong id="durasiRingkasan">2 Jam + 0 Jam</strong>
                </div>

                <div class="tambah-durasi-summary-row">
                    <span>Estimasi Selesai (Baru)</span>
                    <strong id="durasiEstimasi">16:00 (+0 Menit)</strong>
                </div>

                <div class="tambah-durasi-summary-row">
                    <span>Tambahan Biaya</span>
                    <strong id="durasiBiaya">Rp 0</strong>
                </div>

                <div class="tambah-durasi-summary-row">
                    <span>Total Pembayaran</span>
                    <strong id="durasiTotal">Rp 16.000</strong>
                </div>

            </div>

        </div>


        <!-- FOOTER -->
        <div class="tambah-durasi-footer">

            <button type="button" class="tambah-durasi-cancel-button" data-close-duration>Batal</button>

            <button type="button" class="tambah-durasi-save-button" id="simpanDurasi" disabled>Simpan Durasi</button>

        </div>

</dialog>
<div class="tambah-durasi-feedback" id="durasiFeedback" role="status" aria-live="polite"></div>
