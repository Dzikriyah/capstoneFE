<dialog id="hapusMenuDialog"
        class="hapus-menu-popup"
        role="alertdialog"
        aria-modal="true"
        aria-labelledby="hapusMenuTitle"
        aria-describedby="hapusMenuDesc"
    >

        <button type="button" class="hapus-menu-close" id="hapusMenuClose" aria-label="Tutup popup">
            <img src="{{ asset('assets/Icon/Close.svg') }}" alt="Tutup" class="hapus-menu-close-icon">
        </button>

        <div class="hapus-menu-delete-icon" aria-hidden="true">
            <img src="{{ asset('assets/Icon/Trash.svg') }}" alt="" class="hapus-menu-delete-icon-img">
        </div>

        <h2 class="hapus-menu-title" id="hapusMenuTitle">Hapus Menu?</h2>

        <div class="hapus-menu-description" id="hapusMenuDesc">
            <p><strong id="hapusMenuNama"></strong> akan dihapus dari daftar pada sesi ini.</p>
        </div>

        <div class="hapus-menu-actions">
            <button type="button" class="hapus-menu-cancel" id="hapusMenuBatal" autofocus>Batal</button>
            <button type="button" class="hapus-menu-confirm" id="hapusMenuHapus">Hapus</button>
        </div>
</dialog>
