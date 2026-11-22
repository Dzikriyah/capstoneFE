<dialog class="tambah-menu-popup" id="tambahMenuDialog" aria-labelledby="tambahMenuTitle">

        <!-- HEADER -->
        <div class="tambah-menu-header">

            <div class="tambah-menu-header-icon">
                <img src="{{ asset('assets/Icon/Menu.svg') }}" alt="" class="tambah-menu-header-icon-img" aria-hidden="true">
            </div>

            <div class="tambah-menu-header-text">
                <h2 class="tambah-menu-title" id="tambahMenuTitle">Tambah Menu F &amp; B</h2>
                <p class="tambah-menu-subtitle">Tambahkan makanan atau minuman baru ke dalam sistem</p>
            </div>

            <button type="button" class="tambah-menu-close" id="tambahMenuClose" aria-label="Tutup popup">
                <img src="{{ asset('assets/Icon/Close.svg') }}" alt="Tutup" class="tambah-menu-close-icon">
            </button>

        </div>


        <!-- FORM -->
        <form class="tambah-menu-form" id="tambahMenuForm" method="dialog">

            <div class="tambah-menu-form-row">

                <div class="tambah-menu-form-group">
                    <label class="tambah-menu-label" for="tambahMenuNama">Nama Menu</label>
                    <input type="text" id="tambahMenuNama" autofocus name="namaMenu" class="tambah-menu-input" placeholder="Contoh: Indomie Goreng">
                </div>

                <div class="tambah-menu-form-group">
                    <label class="tambah-menu-label" for="tambahMenuKategori">Kategori</label>
                    <div class="tambah-menu-select-wrapper">
                        <select id="tambahMenuKategori" name="kategori" class="tambah-menu-select">
                            <option value="makanan" selected>Makanan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                        <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="tambah-menu-select-arrow" aria-hidden="true">
                    </div>
                </div>

            </div>


            <div class="tambah-menu-form-row">

                <div class="tambah-menu-form-group">
                    <label class="tambah-menu-label" for="tambahMenuHarga">Harga</label>
                    <div class="tambah-menu-price-wrapper">
                        <span class="tambah-menu-price-prefix">RP</span>
                        <input type="number" id="tambahMenuHarga" name="harga" class="tambah-menu-price-input" placeholder="Contoh: 25000" min="0">
                    </div>
                </div>

                <div class="tambah-menu-form-group">
                    <label class="tambah-menu-label" for="tambahMenuStok">Stok</label>
                    <input type="number" id="tambahMenuStok" name="stok" class="tambah-menu-input" placeholder="Contoh: 10" min="0">
                </div>

            </div>


            <div class="tambah-menu-form-group">
                <span class="tambah-menu-label">Gambar Menu</span>

                <label class="tambah-menu-upload" id="tambahMenuUpload" for="tambahMenuGambar">

                    <input type="file" id="tambahMenuGambar" name="gambar" class="tambah-menu-file-input" accept="image/png, image/jpeg">

                    <img src="{{ asset('assets/Icon/Camera.svg') }}" alt="" class="tambah-menu-upload-icon" aria-hidden="true">

                    <span class="tambah-menu-upload-title" id="tambahMenuUploadTitle">Klik / Seret untuk upload Gambar</span>
                    <span class="tambah-menu-upload-hint">Format : JPG, PNG, (Maks 2MB)</span>

                    <img src="" alt="Preview gambar" class="tambah-menu-upload-preview" id="tambahMenuPreview" hidden>

                </label>
            </div>


            <!-- ACTIONS -->
            <div class="tambah-menu-actions">
                <button type="button" class="tambah-menu-cancel" id="tambahMenuBatal">Batal</button>
                <button type="submit" class="tambah-menu-submit">Simpan Menu</button>
            </div>

        </form>

</dialog>
