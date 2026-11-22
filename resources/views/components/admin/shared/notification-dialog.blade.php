<dialog id="adminNotificationDialog" class="notification-popup" aria-labelledby="adminNotificationTitle">

        <!-- HEADER POPUP -->
        <div class="notification-popup-header">

            <h2 id="adminNotificationTitle" class="notification-popup-title">
                Notifikasi
            </h2>

        </div>


        <!-- =================================================
             NOTIFICATION LIST
        ================================================== -->

        <div class="notification-list">


            <!-- =============================================
                 NOTIFIKASI 1 - PESANAN F&B
            ============================================== -->

            <article class="notification-item">

                <div class="notification-icon-wrapper">

                    <img
                        src="{{ asset('assets/Icon/FNB.svg') }}"
                        alt=""
                        class="notification-icon notification-icon-fnb"
                        aria-hidden="true"
                    >

                </div>


                <div class="notification-content">

                    <p class="notification-title">
                        Pesanan F&amp;B Baru
                    </p>

                    <p class="notification-description">
                        Ada Pesanan Baru dari Meja 3
                    </p>

                </div>


                <span class="notification-time">
                    5 Menit lalu
                </span>

            </article>


            <!-- =============================================
                 NOTIFIKASI 2 - BOOKING
            ============================================== -->

            <article class="notification-item">

                <div class="notification-icon-wrapper">

                    <img
                        src="{{ asset('assets/Icon/Keranjang.svg') }}"
                        alt=""
                        class="notification-icon"
                        aria-hidden="true"
                    >

                </div>


                <div class="notification-content">

                    <p class="notification-title">
                        Booking Baru
                    </p>

                    <p class="notification-description">
                        Ada Booking yang perlu diverifikasi
                    </p>

                </div>


                <span class="notification-time">
                    10 Menit lalu
                </span>

            </article>


            <!-- =============================================
                 NOTIFIKASI 3 - SEWA PS
            ============================================== -->

            <article class="notification-item">

                <div class="notification-icon-wrapper">

                    <img
                        src="{{ asset('assets/Icon/Game.svg') }}"
                        alt=""
                        class="notification-icon"
                        aria-hidden="true"
                    >

                </div>


                <div class="notification-content">

                    <p class="notification-title">
                        Durasi Sewa PS sudah berakhir
                    </p>

                    <p class="notification-description">
                        Sewa untuk 2 sudah selesai
                    </p>

                </div>


                <span class="notification-time">
                    15 Menit lalu
                </span>

            </article>


            <!-- =============================================
                 NOTIFIKASI 4 - AKUN PELANGGAN
            ============================================== -->

            <article class="notification-item">

                <div class="notification-icon-wrapper">

                    <img
                        src="{{ asset('assets/Icon/User.svg') }}"
                        alt=""
                        class="notification-icon"
                        aria-hidden="true"
                    >

                </div>


                <div class="notification-content">

                    <p class="notification-title">
                        Akun Pelanggan Baru
                    </p>

                    <p class="notification-description">
                        Ada pelanggan baru yang perlu diverifikasi
                    </p>

                </div>


                <span class="notification-time">
                    1 Jam lalu
                </span>

            </article>


        </div>


        <!-- =================================================
             BUTTON KEMBALI
        ================================================== -->

        <form class="notification-popup-footer" method="dialog">

            <button type="submit" class="notification-back-button" autofocus>Tutup</button>
        </form>
</dialog>
