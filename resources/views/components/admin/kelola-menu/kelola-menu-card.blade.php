<section class="kelola-menu-card">

        <!-- =====================================
             MENU TABS
        ====================================== -->
        <nav class="kelola-menu-tabs" aria-label="Filter menu">

            <button
                type="button"
                class="kelola-menu-tab active"
                data-filter="semua"
            >
                Semua Menu
            </button>

            <button
                type="button"
                class="kelola-menu-tab"
                data-filter="makanan"
            >
                Makanan
            </button>

            <button
                type="button"
                class="kelola-menu-tab"
                data-filter="minuman"
            >
                Minuman
            </button>

        </nav>


        <!-- =====================================
             FILTER AREA
        ====================================== -->
        <div class="kelola-menu-filter-row">

            <!-- SEARCH -->
            <div class="kelola-menu-search-wrapper">

                <img
                    src="{{ asset('assets/Icon/Search.svg') }}"
                    alt=""
                    class="kelola-menu-search-icon"
                    aria-hidden="true"
                >

                <input
                    type="text"
                    class="kelola-menu-search"
                    placeholder="Cari menu..."
                    aria-label="Cari menu"
                >

            </div>


            <!-- CATEGORY -->
            <button
                type="button"
                class="kelola-menu-category"
            >
                <span>Pilih Kategori</span>

                <img
                    src="{{ asset('assets/Icon/Panah.svg') }}"
                    alt=""
                    class="kelola-menu-category-arrow"
                    aria-hidden="true"
                >
            </button>


            <!-- TOTAL MENU -->
            <div class="kelola-menu-total">

                <div class="kelola-menu-total-icon">
                    <img
                        src="{{ asset('assets/Icon/FNB.svg') }}"
                        alt=""
                        aria-hidden="true"
                    >
                </div>

                <div class="kelola-menu-total-text">
                    <span>Total Menu</span>
                    <strong>12</strong>
                </div>

            </div>

        </div>


        <!-- =====================================
             TABLE
        ====================================== -->
        <div class="kelola-menu-table-wrapper">

            <table class="kelola-menu-table">

                <thead>
                    <tr>
                        <th class="col-no">No</th>
                        <th class="col-image">Gambar</th>
                        <th class="col-name">Nama Menu</th>
                        <th class="col-category">Kategori</th>
                        <th class="col-price">Harga</th>
                        <th class="col-stock">Stok</th>
                        <th class="col-action">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- ROW 1 -->
                    <tr>
                        <td>1</td>

                        <td>
                            <div class="menu-image-wrapper">
                                <img
                                    src="{{ asset('assets/Images/Indomie-Goreng.png') }}"
                                    alt="Indomie Goreng"
                                    class="menu-image"
                                >
                            </div>
                        </td>

                        <td class="menu-name">
                            Indomie Goreng
                        </td>

                        <td>
                            <span class="menu-category category-food">
                                Makanan
                            </span>
                        </td>

                        <td>
                            Rp 5.000
                        </td>

                        <td>
                            <span class="menu-stock stock-available">
                                15
                            </span>
                        </td>

                        <td>
                            <div class="menu-action">

                                <button type="button" data-open-edit-menu aria-haspopup="dialog" aria-controls="editMenuDialog"
                                    class="menu-action-edit"
                                    aria-label="Edit Indomie Goreng"
                                >
                                    <img
                                        src="{{ asset('assets/Icon/Edit.svg') }}"
                                        alt=""
                                    >
                                </button>

                                <button type="button" data-open-hapus-menu aria-haspopup="dialog" aria-controls="hapusMenuDialog"
                                    class="menu-action-delete"
                                    aria-label="Hapus Indomie Goreng"
                                >
                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                    >
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- ROW 2 -->
                    <tr>
                        <td>2</td>

                        <td>
                            <div class="menu-image-wrapper">
                                <img
                                    src="{{ asset('assets/Images/Indomie-Rendang.png') }}"
                                    alt="Indomie Rendang"
                                    class="menu-image"
                                >
                            </div>
                        </td>

                        <td class="menu-name">
                            Indomie Rendang
                        </td>

                        <td>
                            <span class="menu-category category-food">
                                Makanan
                            </span>
                        </td>

                        <td>
                            Rp 6.000
                        </td>

                        <td>
                            <span class="menu-stock stock-available">
                                20
                            </span>
                        </td>

                        <td>
                            <div class="menu-action">

                                <button type="button" data-open-edit-menu aria-haspopup="dialog" aria-controls="editMenuDialog" class="menu-action-edit" aria-label="Edit menu">
                                    <img
                                        src="{{ asset('assets/Icon/Edit.svg') }}"
                                        alt=""
                                    >
                                </button>

                                <button type="button" data-open-hapus-menu aria-haspopup="dialog" aria-controls="hapusMenuDialog" class="menu-action-delete" aria-label="Hapus menu">
                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                    >
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- ROW 3 -->
                    <tr>
                        <td>3</td>

                        <td>
                            <div class="menu-image-wrapper">
                                <img
                                    src="{{ asset('assets/Images/Indomie-Cabeijo.png') }}"
                                    alt="Indomie Cabe Ijo"
                                    class="menu-image"
                                >
                            </div>
                        </td>

                        <td class="menu-name">
                            Indomie Cabe Ijo
                        </td>

                        <td>
                            <span class="menu-category category-food">
                                Makanan
                            </span>
                        </td>

                        <td>
                            Rp 6.000
                        </td>

                        <td>
                            <span class="menu-stock stock-available">
                                10
                            </span>
                        </td>

                        <td>
                            <div class="menu-action">

                                <button type="button" data-open-edit-menu aria-haspopup="dialog" aria-controls="editMenuDialog" class="menu-action-edit" aria-label="Edit menu">
                                    <img
                                        src="{{ asset('assets/Icon/Edit.svg') }}"
                                        alt=""
                                    >
                                </button>

                                <button type="button" data-open-hapus-menu aria-haspopup="dialog" aria-controls="hapusMenuDialog" class="menu-action-delete" aria-label="Hapus menu">
                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                    >
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- ROW 4 -->
                    <tr>
                        <td>4</td>

                        <td>
                            <div class="menu-image-wrapper">
                                <img
                                    src="{{ asset('assets/Images/Le-Mineral.png') }}"
                                    alt="Le Mineral"
                                    class="menu-image"
                                >
                            </div>
                        </td>

                        <td class="menu-name">
                            Le Mineral
                        </td>

                        <td>
                            <span class="menu-category category-drink">
                                Minuman
                            </span>
                        </td>

                        <td>
                            Rp 6.000
                        </td>

                        <td>
                            <span class="menu-stock stock-available">
                                30
                            </span>
                        </td>

                        <td>
                            <div class="menu-action">

                                <button type="button" data-open-edit-menu aria-haspopup="dialog" aria-controls="editMenuDialog" class="menu-action-edit" aria-label="Edit menu">
                                    <img
                                        src="{{ asset('assets/Icon/Edit.svg') }}"
                                        alt=""
                                    >
                                </button>

                                <button type="button" data-open-hapus-menu aria-haspopup="dialog" aria-controls="hapusMenuDialog" class="menu-action-delete" aria-label="Hapus menu">
                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                    >
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- ROW 5 -->
                    <tr>
                        <td>5</td>

                        <td>
                            <div class="menu-image-wrapper">
                                <img
                                    src="{{ asset('assets/Images/Teh-Pucuk.png') }}"
                                    alt="Teh Pucuk"
                                    class="menu-image"
                                >
                            </div>
                        </td>

                        <td class="menu-name">
                            Teh Pucuk
                        </td>

                        <td>
                            <span class="menu-category category-drink">
                                Minuman
                            </span>
                        </td>

                        <td>
                            Rp 5.000
                        </td>

                        <td>
                            <span class="menu-stock stock-available">
                                20
                            </span>
                        </td>

                        <td>
                            <div class="menu-action">

                                <button type="button" data-open-edit-menu aria-haspopup="dialog" aria-controls="editMenuDialog" class="menu-action-edit" aria-label="Edit menu">
                                    <img
                                        src="{{ asset('assets/Icon/Edit.svg') }}"
                                        alt=""
                                    >
                                </button>

                                <button type="button" data-open-hapus-menu aria-haspopup="dialog" aria-controls="hapusMenuDialog" class="menu-action-delete" aria-label="Hapus menu">
                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                    >
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- ROW 6 -->
                    <tr>
                        <td>6</td>

                        <td>
                            <div class="menu-image-wrapper">
                                <img
                                    src="{{ asset('assets/Images/Good-Day.png') }}"
                                    alt="Good Day"
                                    class="menu-image"
                                >
                            </div>
                        </td>

                        <td class="menu-name">
                            Good Day CPC
                        </td>

                        <td>
                            <span class="menu-category category-drink">
                                Minuman
                            </span>
                        </td>

                        <td>
                            Rp 5.000
                        </td>

                        <td>
                            <span class="menu-stock stock-empty">
                                0
                            </span>
                        </td>

                        <td>
                            <div class="menu-action">

                                <button type="button" data-open-edit-menu aria-haspopup="dialog" aria-controls="editMenuDialog" class="menu-action-edit" aria-label="Edit menu">
                                    <img
                                        src="{{ asset('assets/Icon/Edit.svg') }}"
                                        alt=""
                                    >
                                </button>

                                <button type="button" data-open-hapus-menu aria-haspopup="dialog" aria-controls="hapusMenuDialog" class="menu-action-delete" aria-label="Hapus menu">
                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                    >
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- ROW 7 -->
                    <tr>
                        <td>7</td>

                        <td>
                            <div class="menu-image-wrapper">
                                <img
                                    src="{{ asset('assets/Images/Pop-Mie-1.png') }}"
                                    alt="Pop Mie"
                                    class="menu-image"
                                >
                            </div>
                        </td>

                        <td class="menu-name">
                            Pop Mie
                        </td>

                        <td>
                            <span class="menu-category category-food">
                                Makanan
                            </span>
                        </td>

                        <td>
                            Rp 8.000
                        </td>

                        <td>
                            <span class="menu-stock stock-empty">
                                0
                            </span>
                        </td>

                        <td>
                            <div class="menu-action">

                                <button type="button" data-open-edit-menu aria-haspopup="dialog" aria-controls="editMenuDialog" class="menu-action-edit" aria-label="Edit menu">
                                    <img
                                        src="{{ asset('assets/Icon/Edit.svg') }}"
                                        alt=""
                                    >
                                </button>

                                <button type="button" data-open-hapus-menu aria-haspopup="dialog" aria-controls="hapusMenuDialog" class="menu-action-delete" aria-label="Hapus menu">
                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                    >
                                </button>

                            </div>
                        </td>
                    </tr>


                    <!-- ROW 8 -->
                    <tr>
                        <td>8</td>

                        <td>
                            <div class="menu-image-wrapper">
                                <img
                                    src="{{ asset('assets/Images/Pop-Mie-2.png') }}"
                                    alt="Pop Mie 2"
                                    class="menu-image"
                                >
                            </div>
                        </td>

                        <td class="menu-name">
                            Pop Mie
                        </td>

                        <td>
                            <span class="menu-category category-food">
                                Makanan
                            </span>
                        </td>

                        <td>
                            Rp 8.000
                        </td>

                        <td>
                            <span class="menu-stock stock-available">
                                10
                            </span>
                        </td>

                        <td>
                            <div class="menu-action">

                                <button type="button" data-open-edit-menu aria-haspopup="dialog" aria-controls="editMenuDialog" class="menu-action-edit" aria-label="Edit menu">
                                    <img
                                        src="{{ asset('assets/Icon/Edit.svg') }}"
                                        alt=""
                                    >
                                </button>

                                <button type="button" data-open-hapus-menu aria-haspopup="dialog" aria-controls="hapusMenuDialog" class="menu-action-delete" aria-label="Hapus menu">
                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                    >
                                </button>

                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>


            <!-- =================================
                 PAGINATION
            ================================== -->
            <div class="kelola-menu-pagination">

                <button
                    type="button"
                    class="pagination-button pagination-prev"
                    aria-label="Halaman sebelumnya"
                >
                    <img
                        src="{{ asset('assets/Icon/Arrow.svg') }}"
                        alt=""
                    >
                </button>

                <button
                    type="button"
                    class="pagination-button pagination-number active"
                >
                    1
                </button>

                <button
                    type="button"
                    class="pagination-button pagination-next"
                    aria-label="Halaman berikutnya"
                >
                    <img
                        src="{{ asset('assets/Icon/Arrow.svg') }}"
                        alt=""
                    >
                </button>

            </div>

        </div>

    </section>
