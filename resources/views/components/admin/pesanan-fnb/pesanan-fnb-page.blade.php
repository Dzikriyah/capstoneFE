<section class="pesanan-fnb-page">

    <!-- =====================================================
         PAGE HEADER
    ====================================================== -->

    <div class="pesanan-fnb-header">

        <div class="pesanan-fnb-heading">

            <img
                src="{{ asset('assets/Icon/FNB.svg') }}"
                alt=""
                class="pesanan-fnb-heading-icon"
                aria-hidden="true"
            >

            <div class="pesanan-fnb-heading-text">

                <h1 class="pesanan-fnb-title">
                    Pesanan FNB
                </h1>

                <p class="pesanan-fnb-subtitle">
                    Kelola pesanan makanan dan minuman dari pelanggan
                </p>

            </div>

        </div>

    </div>


    <!-- =====================================================
         MAIN ORDER CARD
    ====================================================== -->

    <section class="pesanan-fnb-card">


        <!-- =================================================
             FILTER TAB
        ================================================== -->

        <div class="pesanan-fnb-tabs" role="group" aria-label="Filter status pesanan">
            <button type="button" class="pesanan-fnb-tab active" data-order-filter="semua" aria-pressed="true">Semua Pesanan</button>
            <button type="button" class="pesanan-fnb-tab" data-order-filter="baru" aria-pressed="false">Baru</button>
            <button type="button" class="pesanan-fnb-tab" data-order-filter="diproses" aria-pressed="false">Diproses</button>
            <button type="button" class="pesanan-fnb-tab" data-order-filter="selesai" aria-pressed="false">Selesai</button>
        </div>


        <!-- =================================================
             SEARCH
        ================================================== -->

        <div class="pesanan-fnb-search-wrapper">

            <img
                src="{{ asset('assets/Icon/Search.svg') }}"
                alt=""
                class="pesanan-fnb-search-icon"
                aria-hidden="true"
            >

            <input
                type="text"
                class="pesanan-fnb-search"
                placeholder="Cari Pesanan"
            >

        </div>


        <!-- =================================================
             TABLE
        ================================================== -->

        <div class="pesanan-fnb-table-wrapper">

            <table class="pesanan-fnb-table">

                <thead>

                    <tr>

                        <th>ID Pesanan</th>

                        <th>Tanggal</th>

                        <th>Waktu</th>

                        <th>Pelanggan</th>

                        <th>Meja / Unit</th>

                        <th>Total</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>

                </thead>


                <tbody>

                    <!-- FNB 17 -->

                    <tr data-order-status="baru">

                        <td>FNB-17</td>

                        <td>10 Okt 2026</td>

                        <td>14:32</td>

                        <td>Kimi Antonelli</td>

                        <td>TV 1</td>

                        <td>Rp 62.000</td>

                        <td>
                            <span class="pesanan-status status-baru">
                                Baru
                            </span>
                        </td>

                        <td>
                            <a
                                href="{{ route('admin.pesanan-baru') }}"
                                class="pesanan-detail-button"
                            >
                                Lihat
                            </a>
                        </td>

                    </tr>


                    <!-- FNB 16 -->

                    <tr data-order-status="baru">

                        <td>FNB-16</td>

                        <td>10 Okt 2026</td>

                        <td>14:22</td>

                        <td>Lyry Antonelli</td>

                        <td>TV 2</td>

                        <td>Rp 35.000</td>

                        <td>
                            <span class="pesanan-status status-baru">
                                Baru
                            </span>
                        </td>

                        <td>
                            <a
                                href="{{ route('admin.pesanan-baru') }}"
                                class="pesanan-detail-button"
                            >
                                Lihat
                            </a>
                        </td>

                    </tr>


                    <!-- FNB 15 -->

                    <tr data-order-status="diproses">

                        <td>FNB-15</td>

                        <td>10 Okt 2026</td>

                        <td>14:12</td>

                        <td>Maxi Antonelli</td>

                        <td>TV 4</td>

                        <td>Rp 28.000</td>

                        <td>
                            <span class="pesanan-status status-diproses">
                                Diproses
                            </span>
                        </td>

                        <td>
                            <a
                                href="{{ route('admin.pesanan-diproses') }}"
                                class="pesanan-detail-button"
                            >
                                Lihat
                            </a>
                        </td>

                    </tr>


                    <!-- FNB 14 -->

                    <tr data-order-status="diproses">

                        <td>FNB-14</td>

                        <td>10 Okt 2026</td>

                        <td>13:58</td>

                        <td>Marcel Nestle</td>

                        <td>TV 5</td>

                        <td>Rp 58.000</td>

                        <td>
                            <span class="pesanan-status status-diproses">
                                Diproses
                            </span>
                        </td>

                        <td>
                            <a
                                href="{{ route('admin.pesanan-diproses') }}"
                                class="pesanan-detail-button"
                            >
                                Lihat
                            </a>
                        </td>

                    </tr>


                    <!-- FNB 13 -->

                    <tr data-order-status="selesai">

                        <td>FNB-13</td>

                        <td>10 Okt 2026</td>

                        <td>13:55</td>

                        <td>Lucien Moreau</td>

                        <td>TV 6</td>

                        <td>Rp 41.000</td>

                        <td>
                            <span class="pesanan-status status-selesai">
                                Selesai
                            </span>
                        </td>

                        <td>
                            <a
                                href="{{ route('admin.pesanan-selesai') }}"
                                class="pesanan-detail-button"
                            >
                                Lihat
                            </a>
                        </td>

                    </tr>


                    <!-- FNB 12 -->

                    <tr data-order-status="selesai">

                        <td>FNB-12</td>

                        <td>10 Okt 2026</td>

                        <td>13:52</td>

                        <td>Lucien Moreau</td>

                        <td>TV 6</td>

                        <td>Rp 24.000</td>

                        <td>
                            <span class="pesanan-status status-selesai">
                                Selesai
                            </span>
                        </td>

                        <td>
                            <a
                                href="{{ route('admin.pesanan-selesai') }}"
                                class="pesanan-detail-button"
                            >
                                Lihat
                            </a>
                        </td>

                    </tr>


                    <!-- FNB 11 -->

                    <tr data-order-status="selesai">

                        <td>FNB-11</td>

                        <td>10 Okt 2026</td>

                        <td>13:52</td>

                        <td>Marco Bellini</td>

                        <td>TV 8</td>

                        <td>Rp 38.000</td>

                        <td>
                            <span class="pesanan-status status-selesai">
                                Selesai
                            </span>
                        </td>

                        <td>
                            <a
                                href="{{ route('admin.pesanan-selesai') }}"
                                class="pesanan-detail-button"
                            >
                                Lihat
                            </a>
                        </td>

                    </tr>

                    <tr data-order-empty hidden>
                        <td colspan="8">Tidak ada pesanan dengan status ini.</td>
                    </tr>
                </tbody>

            </table>

        </div>


        <!-- =================================================
             PAGINATION
        ================================================== -->

        <div class="pesanan-fnb-pagination">

            <button
                type="button"
                class="pesanan-pagination-button"
                aria-label="Halaman sebelumnya"
            >
                <img
                    src="{{ asset('assets/Icon/Arrow.svg') }}"
                    alt=""
                    class="pesanan-pagination-arrow pagination-arrow-left"
                    aria-hidden="true"
                >
            </button>


            <button
                type="button"
                class="pesanan-pagination-button active"
                aria-current="page"
            >
                1
            </button>


            <button
                type="button"
                class="pesanan-pagination-button"
                aria-label="Halaman berikutnya"
            >
                <img
                    src="{{ asset('assets/Icon/Arrow.svg') }}"
                    alt=""
                    class="pesanan-pagination-arrow pagination-arrow-right"
                    aria-hidden="true"
                >
            </button>

        </div>

    </section>

</section>
