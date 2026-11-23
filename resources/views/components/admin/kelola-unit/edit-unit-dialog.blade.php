<dialog class="edit-unit-popup" id="editUnitDialog" aria-labelledby="editUnitTitle">

        <!-- ============================================
             POPUP HEADER
        ============================================= -->
        <div class="edit-unit-header">

            <div class="edit-unit-header-left">

                <div class="edit-unit-header-icon-wrapper">
                    <img
                        src="{{ asset('assets/Icon/TV.svg') }}"
                        alt=""
                        class="edit-unit-header-icon"
                        aria-hidden="true"
                    >
                </div>

                <div class="edit-unit-header-text">
                    <h2 class="edit-unit-title" id="editUnitTitle">
                        Edit Unit PS
                    </h2>
                    <p class="edit-unit-subtitle">
                        Ubah informasi dan status unit playstation
                    </p>
                </div>

            </div>

            <!-- Close button -->
            <button
                type="button"
                class="edit-unit-close"
                data-close-edit-unit
                aria-label="Tutup popup"
            >
                <img
                    src="{{ asset('assets/Icon/Close.svg') }}"
                    alt="Tutup"
                    class="edit-unit-close-icon"
                >
            </button>

        </div>


        <!-- ============================================
             UNIT SUMMARY CARD
        ============================================= -->
        <div class="edit-unit-summary">

            <!-- PlayStation Icon -->
            <div class="edit-unit-summary-icon-wrapper">
                <img
                    src="{{ asset('assets/Icon/PlayStation Logo.svg') }}"
                    alt="PlayStation"
                    class="edit-unit-summary-icon"
                >
            </div>

            <!-- Unit Info -->
            <div class="edit-unit-summary-info">

                <div class="edit-unit-summary-top">
                    <h3 class="edit-unit-summary-name">TV 1</h3>
                    <span class="edit-unit-summary-status">Tersedia</span>
                </div>

                <p class="edit-unit-summary-desc">
                    Unit dalam kondisi normal dan siap digunakan
                </p>

                <div class="edit-unit-summary-specs">

                    <div class="edit-unit-spec">
                        <img src="{{ asset('assets/Icon/TV.svg') }}" alt="" class="edit-unit-spec-icon" aria-hidden="true">
                        <span>TV 32"</span>
                    </div>

                    <div class="edit-unit-spec">
                        <img src="{{ asset('assets/Icon/Game.svg') }}" alt="" class="edit-unit-spec-icon" aria-hidden="true">
                        <span>Stik 2</span>
                    </div>

                    <div class="edit-unit-spec">
                        <img src="{{ asset('assets/Icon/PlayStation Logo.svg') }}" alt="" class="edit-unit-spec-icon" aria-hidden="true">
                        <span>PS 4</span>
                    </div>

                </div>

            </div>

        </div>


        <!-- ============================================
             FORM EDIT
        ============================================= -->
        <form class="edit-unit-form" id="editUnitForm" method="dialog">

            <!-- ROW 1: Nama Unit + Jenis PlayStation -->
            <div class="edit-unit-row">

                <!-- Nama Unit -->
                <div class="edit-unit-form-group">
                    <label class="edit-unit-label" for="editNamaUnit">
                        Nama Unit
                    </label>
                    <input
                        type="text"
                        id="editNamaUnit"
                        autofocus
                        name="namaUnit"
                        required
                        class="edit-unit-input"
                        value="TV 1"
                    >
                </div>

                <!-- Jenis PlayStation -->
                <div class="edit-unit-form-group">
                    <label class="edit-unit-label" for="editJenisPS">
                        Jenis PlayStation
                    </label>
                    <div class="edit-unit-select-wrapper">
                        <select id="editJenisPS" name="jenisPS" class="edit-unit-select">
                            <option value="PS3">PlayStation 3</option>
                            <option value="PS4" selected>PlayStation 4</option>
                            <option value="PS5">PlayStation 5</option>
                        </select>
                        <img
                            src="{{ asset('assets/Icon/Arrow.svg') }}"
                            alt=""
                            class="edit-unit-select-arrow"
                            aria-hidden="true"
                        >
                    </div>
                </div>

            </div>


            <!-- ROW 2: Jumlah Stik + Ukuran TV -->
            <div class="edit-unit-row">

                <!-- Jumlah Stik -->
                <div class="edit-unit-form-group">
                    <label class="edit-unit-label" for="editJumlahStik">
                        Jumlah Stik
                    </label>
                    <input
                        type="number" min="0" step="1" required
                        id="editJumlahStik"
                        name="jumlahStik"
                        class="edit-unit-input"
                        value="2"
                    >
                </div>

                <!-- Ukuran TV -->
                <div class="edit-unit-form-group">
                    <label class="edit-unit-label" for="editUkuranTV">
                        Ukuran TV
                    </label>
                    <div class="edit-unit-select-wrapper">
                        <select id="editUkuranTV" name="ukuranTV" class="edit-unit-select">
                            <option value="24">24 Inch</option>
                            <option value="32">32 Inch</option>
                            <option value="35" selected>35 Inch</option>
                            <option value="40">40 Inch</option>
                            <option value="43">43 Inch</option>
                        </select>
                        <img
                            src="{{ asset('assets/Icon/Arrow.svg') }}"
                            alt=""
                            class="edit-unit-select-arrow"
                            aria-hidden="true"
                        >
                    </div>
                </div>

            </div>


            <!-- STATUS UNIT -->
            <div class="edit-unit-form-group edit-unit-form-group--full">

                <div class="edit-unit-status-group" role="radiogroup" aria-label="Status Unit">

                    <!-- Tersedia -->
                    <label
                        class="edit-unit-status-option edit-unit-status-option--available"
                        for="editStatusTersedia"
                        id="labelTersedia"
                    >
                        <input
                            type="radio"
                            id="editStatusTersedia"
                            name="statusUnit"
                            value="tersedia"
                            class="edit-unit-radio"
                            checked
                        >
                        <span class="edit-unit-radio-custom"></span>
                        <span class="edit-unit-status-text">
                            <span class="edit-unit-status-name">Tersedia</span>
                            <span class="edit-unit-status-desc">Siap digunakan</span>
                        </span>
                    </label>

                    <!-- Digunakan -->
                    <label
                        class="edit-unit-status-option edit-unit-status-option--used"
                        for="editStatusDigunakan"
                        id="labelDigunakan"
                    >
                        <input
                            type="radio"
                            id="editStatusDigunakan"
                            name="statusUnit"
                            value="digunakan"
                            class="edit-unit-radio"
                        >
                        <span class="edit-unit-radio-custom"></span>
                        <span class="edit-unit-status-text">
                            <span class="edit-unit-status-name">Digunakan</span>
                            <span class="edit-unit-status-desc">Sedang Digunakan</span>
                        </span>
                    </label>

                    <!-- Rusak -->
                    <label
                        class="edit-unit-status-option edit-unit-status-option--damaged"
                        for="editStatusRusak"
                        id="labelRusak"
                    >
                        <input
                            type="radio"
                            id="editStatusRusak"
                            name="statusUnit"
                            value="rusak"
                            class="edit-unit-radio"
                        >
                        <span class="edit-unit-radio-custom"></span>
                        <span class="edit-unit-status-text">
                            <span class="edit-unit-status-name">Rusak</span>
                            <span class="edit-unit-status-desc">Tidak dapat digunakan</span>
                        </span>
                    </label>

                </div>

            </div>


            <!-- ACTION BUTTONS -->
            <div class="edit-unit-actions">

                <button type="button" class="edit-unit-cancel" data-close-edit-unit>Batal</button>

                <button type="submit" class="edit-unit-submit">Simpan Unit</button>

            </div>

        </form>

</dialog>
