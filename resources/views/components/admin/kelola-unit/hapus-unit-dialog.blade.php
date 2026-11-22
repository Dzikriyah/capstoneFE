<dialog
        id="hapusUnitDialog"
        class="hapus-unit-popup"
        role="alertdialog"
        aria-modal="true"
        aria-labelledby="hapusUnitTitle"
        aria-describedby="hapusUnitDesc"
    >

        <!-- CLOSE BUTTON -->
        <button
            type="button"
            class="hapus-unit-close"
            data-close-hapus-unit
            aria-label="Tutup popup"
        >
            <img
                src="{{ asset('assets/Icon/Close.svg') }}"
                alt="Tutup"
                class="hapus-unit-close-icon"
            >
        </button>


        <!-- TRASH ICON -->
        <div class="hapus-unit-delete-icon-wrapper" aria-hidden="true">
            <img
                src="{{ asset('assets/Icon/Trash.svg') }}"
                alt=""
                class="hapus-unit-delete-icon"
            >
        </div>


        <!-- JUDUL -->
        <h2 class="hapus-unit-title" id="hapusUnitTitle">
            Hapus Unit PS?
        </h2>


        <!-- DESKRIPSI -->
        <p class="hapus-unit-description" id="hapusUnitDesc">
            Data unit yang dihapus tidak dapat dikembalikan dan
            akan menghilang dari daftar kelola unit PS
        </p>


        <!-- INFORMASI UNIT -->
        <div class="hapus-unit-info">

            <!-- Icon PlayStation -->
            <div class="hapus-unit-unit-icon">
                <img
                    src="{{ asset('assets/Icon/PlayStation Logo.svg') }}"
                    alt="PlayStation"
                    class="hapus-unit-unit-icon-img"
                >
            </div>

            <!-- Konten unit -->
            <div class="hapus-unit-unit-content">

                <h3 class="hapus-unit-unit-title">TV 1</h3>

                <p class="hapus-unit-unit-description">
                    Unit dalam kondisi normal dan siap digunakan
                </p>

                <div class="hapus-unit-specs">

                    <div class="hapus-unit-spec">
                        <img
                            src="{{ asset('assets/Icon/TV.svg') }}"
                            alt=""
                            class="hapus-unit-spec-icon"
                            aria-hidden="true"
                        >
                        <span>TV 32"</span>
                    </div>

                    <div class="hapus-unit-spec">
                        <img
                            src="{{ asset('assets/Icon/Game.svg') }}"
                            alt=""
                            class="hapus-unit-spec-icon"
                            aria-hidden="true"
                        >
                        <span>Stik 2</span>
                    </div>

                    <div class="hapus-unit-spec">
                        <img
                            src="{{ asset('assets/Icon/PlayStation Logo.svg') }}"
                            alt=""
                            class="hapus-unit-spec-icon"
                            aria-hidden="true"
                        >
                        <span>PS 4</span>
                    </div>

                </div>

            </div>

        </div>


        <!-- ACTION BUTTONS -->
        <div class="hapus-unit-actions">

            <button type="button" class="hapus-unit-cancel" data-close-hapus-unit autofocus>Batal</button>

            <button type="button" class="hapus-unit-confirm" id="hapusUnitConfirm">Hapus</button>

        </div>

</dialog>
