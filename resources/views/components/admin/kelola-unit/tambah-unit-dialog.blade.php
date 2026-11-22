<dialog class="tambah-unit-popup" id="tambahUnitDialog" aria-labelledby="tambahUnitTitle">

        <!-- POPUP HEADER -->
        <div class="tambah-unit-header">

            <div class="tambah-unit-header-left">

                <div class="tambah-unit-header-icon-wrapper">
                    <img
                        src="{{ asset('assets/Icon/TV.svg') }}"
                        alt=""
                        class="tambah-unit-header-icon"
                        aria-hidden="true"
                    >
                </div>

                <div class="tambah-unit-header-text">
                    <h2 class="tambah-unit-title" id="tambahUnitTitle">
                        Tambah Unit PS
                    </h2>
                    <p class="tambah-unit-subtitle">
                        Tambahkan Unit PlayStation baru ke dalam sistem
                    </p>
                </div>

            </div>

            <!-- CLOSE BUTTON -->
            <button
                type="button"
                class="tambah-unit-close"
                data-close-tambah-unit
                aria-label="Tutup popup"
            >
                <img
                    src="{{ asset('assets/Icon/Close.svg') }}"
                    alt="Tutup"
                    class="tambah-unit-close-icon"
                >
            </button>

        </div>


        <!-- POPUP FORM -->
        <form class="tambah-unit-form" id="tambahUnitForm" method="dialog">

            <!-- ROW 1: Nama Unit + Jenis PlayStation -->
            <div class="tambah-unit-row">

                <!-- Nama Unit -->
                <div class="tambah-unit-form-group">
                    <label class="tambah-unit-label" for="namaUnit">
                        Nama Unit
                    </label>
                    <div class="tambah-unit-input-wrapper">
                        <input
                            type="text"
                            id="namaUnit"
                            name="namaUnit"
                            autofocus
                            class="tambah-unit-input"
                            placeholder="Contoh TV 9"
                        >
                    </div>
                </div>

                <!-- Jenis PlayStation -->
                <div class="tambah-unit-form-group">
                    <label class="tambah-unit-label" for="jenisPlaystation">
                        Jenis PlayStation
                    </label>
                    <div class="tambah-unit-input-wrapper tambah-unit-select-wrapper">
                        <img
                            src="{{ asset('assets/Icon/PlayStation Logo.svg') }}"
                            alt=""
                            class="tambah-unit-field-icon"
                            aria-hidden="true"
                        >
                        <select
                            id="jenisPlaystation"
                            name="jenisPlaystation"
                            class="tambah-unit-select"
                        >
                            <option value="" disabled selected>PlayStation 4</option>
                            <option value="PS3">PS 3</option>
                            <option value="PS4">PS 4</option>
                            <option value="PS5">PS 5</option>
                        </select>
                        <img
                            src="{{ asset('assets/Icon/Panah.svg') }}"
                            alt=""
                            class="tambah-unit-select-arrow"
                            aria-hidden="true"
                        >
                    </div>
                </div>

            </div>


            <!-- ROW 2: Jumlah Stik + Ukuran TV -->
            <div class="tambah-unit-row">

                <!-- Jumlah Stik -->
                <div class="tambah-unit-form-group">
                    <label class="tambah-unit-label" for="jumlahStik">
                        Jumlah Stik
                    </label>
                    <div class="tambah-unit-input-wrapper tambah-unit-select-wrapper">
                        <img
                            src="{{ asset('assets/Icon/Game.svg') }}"
                            alt=""
                            class="tambah-unit-field-icon"
                            aria-hidden="true"
                        >
                        <select
                            id="jumlahStik"
                            name="jumlahStik"
                            class="tambah-unit-select"
                        >
                            <option value="" disabled selected>2 Stik</option>
                            <option value="1">1 Stik</option>
                            <option value="2">2 Stik</option>
                            <option value="3">3 Stik</option>
                            <option value="4">4 Stik</option>
                        </select>
                        <img
                            src="{{ asset('assets/Icon/Panah.svg') }}"
                            alt=""
                            class="tambah-unit-select-arrow"
                            aria-hidden="true"
                        >
                    </div>
                </div>

                <!-- Ukuran TV -->
                <div class="tambah-unit-form-group">
                    <label class="tambah-unit-label" for="ukuranTV">
                        Ukuran TV
                    </label>
                    <div class="tambah-unit-input-wrapper tambah-unit-select-wrapper">
                        <img
                            src="{{ asset('assets/Icon/TV.svg') }}"
                            alt=""
                            class="tambah-unit-field-icon"
                            aria-hidden="true"
                        >
                        <select
                            id="ukuranTV"
                            name="ukuranTV"
                            class="tambah-unit-select"
                        >
                            <option value="" disabled selected>35"</option>
                            <option value="24">24"</option>
                            <option value="32">32"</option>
                            <option value="35">35"</option>
                            <option value="40">40"</option>
                        </select>
                        <img
                            src="{{ asset('assets/Icon/Panah.svg') }}"
                            alt=""
                            class="tambah-unit-select-arrow"
                            aria-hidden="true"
                        >
                    </div>
                </div>

            </div>


            <!-- ROW 3: Status Unit -->
            <div class="tambah-unit-form-group tambah-unit-form-group--full">
                <label class="tambah-unit-label">
                    Status Unit
                </label>

                <div class="tambah-unit-status-group">

                    <!-- Tersedia -->
                    <label class="tambah-unit-status-option" for="statusTersedia">
                        <input
                            type="radio"
                            id="statusTersedia"
                            name="statusUnit"
                            value="tersedia"
                            class="tambah-unit-radio"
                            checked
                        >
                        <span class="tambah-unit-radio-custom"></span>
                        <span class="tambah-unit-status-label-text">
                            <span class="tambah-unit-status-name">Tersedia</span>
                            <span class="tambah-unit-status-desc">Siap digunakan</span>
                        </span>
                    </label>

                    <!-- Digunakan -->
                    <label class="tambah-unit-status-option" for="statusDigunakan">
                        <input
                            type="radio"
                            id="statusDigunakan"
                            name="statusUnit"
                            value="digunakan"
                            class="tambah-unit-radio"
                        >
                        <span class="tambah-unit-radio-custom"></span>
                        <span class="tambah-unit-status-label-text">
                            <span class="tambah-unit-status-name">Digunakan</span>
                            <span class="tambah-unit-status-desc">Sedang Digunakan</span>
                        </span>
                    </label>

                    <!-- Rusak / Maintenance -->
                    <label class="tambah-unit-status-option" for="statusMaintenance">
                        <input
                            type="radio"
                            id="statusMaintenance"
                            name="statusUnit"
                            value="maintenance"
                            class="tambah-unit-radio"
                        >
                        <span class="tambah-unit-radio-custom"></span>
                        <span class="tambah-unit-status-label-text">
                            <span class="tambah-unit-status-name">Rusak</span>
                            <span class="tambah-unit-status-desc">Tidak dapat digunakan</span>
                        </span>
                    </label>

                </div>
            </div>


            <!-- ACTION BUTTONS -->
            <div class="tambah-unit-actions">

                <button type="button" class="tambah-unit-cancel" data-close-tambah-unit>Batal</button>

                <button type="submit" class="tambah-unit-submit">Simpan Unit</button>

            </div>

        </form>

</dialog>
