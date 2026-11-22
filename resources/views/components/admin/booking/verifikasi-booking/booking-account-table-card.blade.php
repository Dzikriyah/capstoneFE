<section class="booking-account-table-card">


        <!-- FILTER + SEARCH -->
        <div class="booking-account-toolbar">


            <!-- FILTER -->
            <div class="booking-account-filters">

                <button
                    type="button"
                    class="booking-account-filter active"
                >
                    Semua
                </button>


                <button
                    type="button"
                    class="booking-account-filter pending"
                >
                    Menunggu Verifikasi

                    <span class="booking-account-filter-count">
                        5
                    </span>

                </button>


                <button
                    type="button"
                    class="booking-account-filter approved"
                >
                    Disetujui

                    <span class="booking-account-filter-count">
                        12
                    </span>

                </button>


                <button
                    type="button"
                    class="booking-account-filter active-booking"
                >
                    Sedang di Booking

                    <span class="booking-account-filter-count">
                        3
                    </span>

                </button>


                <button
                    type="button"
                    class="booking-account-filter late"
                >
                    Terlambat

                    <span class="booking-account-filter-count">
                        3
                    </span>

                </button>


                <button
                    type="button"
                    class="booking-account-filter rejected"
                >
                    Ditolak

                    <span class="booking-account-filter-count">
                        0
                    </span>

                </button>


                <button
                    type="button"
                    class="booking-account-filter finished"
                >
                    Selesai

                    <span class="booking-account-filter-count">
                        16
                    </span>

                </button>

            </div>


            <!-- =================================================
                 SEARCH BAR
                 ================================================= -->

            <!--
                PERTAHANKAN SEARCH BAR KAMU YANG SEKARANG
                JANGAN UBAH HTML DAN CSS-NYA
            -->

            <div class="booking-search-wrapper">

                <div class="booking-search">
                    <input
                type="search"
                class="booking-account-search"
                placeholder="Cari nama, ID booking, atau unit..."
                aria-label="Cari pengajuan akun">
                </div>

            </div>

        </div>


        <!-- =====================================================
             TABLE
             ===================================================== -->

        <div class="booking-account-table-wrapper">

            <table class="booking-account-table">

                <thead>

                    <tr>

                        <th>ID Booking</th>

                        <th>Nama Pelanggan</th>

                        <th>Tanggal Ambil</th>

                        <th>Tanggal Kembali</th>

                        <th>Durasi</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>

                </thead>


                <tbody>


                    <!-- ROW 1 -->
                    <tr>

                        <td>#BKG-18</td>

                        <td>Kimi Antonelli</td>

                        <td>10 Okt 2026</td>

                        <td>11 Okt 2026</td>

                        <td>1 Hari</td>

                        <td>

                            <span class="booking-account-status pending">
                                Menunggu
                            </span>

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.booking.detail-verifikasi-booking') }}"
                                class="booking-account-action"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>


                    <!-- ROW 2 -->
                    <tr>

                        <td>#BKG-19</td>

                        <td>Lyry Antonelli</td>

                        <td>10 Okt 2026</td>

                        <td>11 Okt 2026</td>

                        <td>1 Hari</td>

                        <td>

                            <span class="booking-account-status approved">
                                Disetujui
                            </span>

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.booking.detail-booking-disetujui') }}"
                                class="booking-account-action"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>


                    <!-- ROW 3 -->
                    <tr>

                        <td>#BKG-16</td>

                        <td>Maxi Antonelli</td>

                        <td>11 Okt 2026</td>

                        <td>12 Okt 2026</td>

                        <td>1 Hari</td>

                        <td>

                            <span class="booking-account-status pending">
                                Menunggu
                            </span>

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.booking.detail-verifikasi-booking') }}"
                                class="booking-account-action"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>


                    <!-- ROW 4 -->
                    <tr>

                        <td>#BKG-17</td>

                        <td>Marcel Nestle</td>

                        <td>11 Okt 2026</td>

                        <td>12 Okt 2026</td>

                        <td>1 Hari</td>

                        <td>

                            <span class="booking-account-status rejected">
                                Ditolak
                            </span>

                        </td>

                        <td>

                            <a
                                href="#"
                                class="booking-account-action"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>


                    <!-- ROW 5 -->
                    <tr>

                        <td>#BKG-14</td>

                        <td>Lucien Moreau</td>

                        <td>9 Okt 2026</td>

                        <td>11 Okt 2026</td>

                        <td>2 Hari</td>

                        <td>

                            <span class="booking-account-status late">
                                Terlambat
                            </span>

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.booking.detail-booking-terlambat') }}"
                                class="booking-account-action"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>


                    <!-- ROW 6 -->
                    <tr>

                        <td>#BKG-13</td>

                        <td>Marco Bellini</td>

                        <td>9 Okt 2026</td>

                        <td>10 Okt 2026</td>

                        <td>1 Hari</td>

                        <td>

                            <span class="booking-account-status finished">
                                Selesai
                            </span>

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.booking.detail-booking-selesai') }}"
                                class="booking-account-action"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>


                    <!-- ROW 7 -->
                    <tr>

                        <td>#BKG-12</td>

                        <td>Leon Hartmann</td>

                        <td>8 Okt 2026</td>

                        <td>10 Okt 2026</td>

                        <td>2 Hari</td>

                        <td>

                            <span class="booking-account-status finished">
                                Selesai
                            </span>

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.booking.detail-booking-selesai') }}"
                                class="booking-account-action"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>


                    <!-- ROW 8 -->
                    <tr>

                        <td>#BKG-11</td>

                        <td>Nikolai Frost</td>

                        <td>8 Okt 2026</td>

                        <td>10 Okt 2026</td>

                        <td>2 Hari</td>

                        <td>

                            <span class="booking-account-status finished">
                                Selesai
                            </span>

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.booking.detail-booking-selesai') }}"
                                class="booking-account-action"
                            >
                                Detail
                            </a>

                        </td>

                    </tr>


                </tbody>

            </table>

        </div>

    </section>
