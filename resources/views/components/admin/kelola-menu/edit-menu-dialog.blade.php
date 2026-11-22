<dialog id="editMenuDialog" class="edit-menu-popup" role="dialog" aria-modal="true" aria-labelledby="editMenuTitle">

        <!-- HEADER -->
        <div class="edit-menu-header">

            <div class="edit-menu-header-icon">
                <img src="{{ asset('assets/Icon/Edit.svg') }}" alt="" class="edit-menu-header-icon-img" aria-hidden="true">
            </div>

            <div class="edit-menu-header-text">
                <h2 class="edit-menu-title" id="editMenuTitle">Edit Menu F &amp; B</h2>
                <p class="edit-menu-subtitle">Edit Informasi Makanan atau Minuman</p>
            </div>

            <button type="button" class="edit-menu-close" id="editMenuClose" aria-label="Tutup popup">
                <img src="{{ asset('assets/Icon/Close.svg') }}" alt="Tutup" class="edit-menu-close-icon">
            </button>

        </div>


        <!-- FORM -->
        <form class="edit-menu-form" id="editMenuForm" method="dialog">

            <div class="edit-menu-form-row">

                <div class="edit-menu-form-group">
                    <label class="edit-menu-label" for="editMenuNama">Nama Menu</label>
                    <input type="text" id="editMenuNama" autofocus name="namaMenu" class="edit-menu-input" value="Indomie Goreng">
                </div>

                <div class="edit-menu-form-group">
                    <label class="edit-menu-label" for="editMenuKategori">Kategori</label>
                    <div class="edit-menu-select-wrapper">
                        <select id="editMenuKategori" name="kategori" class="edit-menu-select">
                            <option value="makanan" selected>Makanan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                        <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="edit-menu-select-arrow" aria-hidden="true">
                    </div>
                </div>

            </div>


            <div class="edit-menu-form-row">

                <div class="edit-menu-form-group">
                    <label class="edit-menu-label" for="editMenuHarga">Harga</label>
                    <div class="edit-menu-price-wrapper">
                        <span class="edit-menu-price-prefix">RP</span>
                        <input type="text" id="editMenuHarga" name="harga" class="edit-menu-price-input" value="5.000" inputmode="numeric">
                    </div>
                </div>

                <div class="edit-menu-form-group">
                    <label class="edit-menu-label" for="editMenuStok">Stok</label>
                    <input type="number" id="editMenuStok" name="stok" class="edit-menu-input" value="15" min="0">
                </div>

            </div>


            <!-- GAMBAR MENU: preview (kiri) + upload (kanan) -->
            <div class="edit-menu-form-group">
                <span class="edit-menu-label">Gambar Menu</span>

                <div class="edit-menu-image-section">

                    <div class="edit-menu-image-preview">
                        <img
                            src="{{ asset('assets/Images/Indomie-Goreng.png') }}"
                            alt="Gambar Indomie Goreng"
                            class="edit-menu-image-preview-img"
                            id="editMenuPreview"
                        >
                    </div>

                    <label class="edit-menu-upload" id="editMenuUpload" for="editMenuGambar">

                        <input type="file" id="editMenuGambar" name="gambar" class="edit-menu-file-input" accept="image/png, image/jpeg">

                        <img src="{{ asset('assets/Icon/Camera.svg') }}" alt="" class="edit-menu-upload-icon" aria-hidden="true">

                        <span class="edit-menu-upload-title">Klik / Seret untuk upload Gambar</span>
                        <span class="edit-menu-upload-hint">Format : JPG, PNG, (Maks 2MB)</span>

                    </label>

                </div>
            </div>


            <!-- ACTIONS -->
            <div class="edit-menu-actions">
                <button type="button" class="edit-menu-cancel" id="editMenuBatal">Batal</button>
                <button type="submit" class="edit-menu-submit">Simpan Perubahan</button>
            </div>

        </form>
</dialog>
