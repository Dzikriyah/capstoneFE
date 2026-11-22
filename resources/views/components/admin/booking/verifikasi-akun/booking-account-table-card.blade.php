<section class="booking-account-table-card">

    <!-- FILTER + SEARCH -->
    <div class="booking-account-toolbar">

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
                <span class="booking-account-filter-count">5</span>
            </button>

            <button
                type="button"
                class="booking-account-filter verified"
            >
                Terverifikasi
                <span class="booking-account-filter-count">12</span>
            </button>

            <button
                type="button"
                class="booking-account-filter rejected"
            >
                Ditolak
                <span class="booking-account-filter-count">2</span>
            </button>

        </div>


        <!-- SEARCH BAR -->
        <div class="booking-search-wrapper">
            <input
                type="search"
                class="booking-account-search"
                placeholder="Cari nama atau email..."
                aria-label="Cari pengajuan akun"
            >
        </div>

    </div>


    <!-- TABLE -->
    <div class="booking-account-table-wrapper">

        <table class="booking-account-table">

            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Nama Pelanggan</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>#USR-01</td>
                    <td>Kimi Antonelli</td>
                    <td>kimi@gmail.com</td>
                    <td>081234567890</td>
                    <td>10 Okt 2026</td>

                    <td>
                        <span class="booking-account-status pending">
                            Menunggu
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.booking.menunggu-verifikasi') }}" class="booking-account-action">
                            Detail
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>#USR-02</td>
                    <td>Lyry Antonelli</td>
                    <td>Lyry12@gmail.com</td>
                    <td>083324567890</td>
                    <td>10 Okt 2026</td>

                    <td>
                        <span class="booking-account-status verified">
                            Terverifikasi
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.booking.akun-disetujui') }}" class="booking-account-action">
                            Detail
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>#USR-03</td>
                    <td>Maxi Antonelli</td>
                    <td>Maxi34@gmail.com</td>
                    <td>083527867890</td>
                    <td>11 Okt 2026</td>

                    <td>
                        <span class="booking-account-status pending">
                            Menunggu
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.booking.menunggu-verifikasi') }}" class="booking-account-action">
                            Detail
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>#USR-04</td>
                    <td>Marcel Nestle</td>
                    <td>Mrcl11@gmail.com</td>
                    <td>083527867800</td>
                    <td>11 Okt 2026</td>

                    <td>
                        <span class="booking-account-status rejected">
                            Ditolak
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.booking.akun-ditolak') }}" class="booking-account-action">
                            Detail
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>#USR-05</td>
                    <td>Lucien Moreau</td>
                    <td>Luluuu@gmail.com</td>
                    <td>083527866589</td>
                    <td>9 Okt 2026</td>

                    <td>
                        <span class="booking-account-status pending">
                            Menunggu
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.booking.menunggu-verifikasi') }}" class="booking-account-action">
                            Detail
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>#USR-06</td>
                    <td>Marco Bellini</td>
                    <td>Marck@gmail.com</td>
                    <td>083527890033</td>
                    <td>9 Okt 2026</td>

                    <td>
                        <span class="booking-account-status verified">
                            Terverifikasi
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.booking.akun-disetujui') }}" class="booking-account-action">
                            Detail
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>#USR-07</td>
                    <td>Leon Hartmann</td>
                    <td>Leona24@gmail.com</td>
                    <td>082327890033</td>
                    <td>8 Okt 2026</td>

                    <td>
                        <span class="booking-account-status verified">
                            Terverifikasi
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.booking.akun-disetujui') }}" class="booking-account-action">
                            Detail
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>#USR-09</td>
                    <td>Nikolai Frost</td>
                    <td>Nikoii@gmail.com</td>
                    <td>082337890033</td>
                    <td>8 Okt 2026</td>

                    <td>
                        <span class="booking-account-status verified">
                            Terverifikasi
                        </span>
                    </td>

                    <td>
                        <a href="{{ route('admin.booking.akun-disetujui') }}" class="booking-account-action">
                            Detail
                        </a>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</section>
