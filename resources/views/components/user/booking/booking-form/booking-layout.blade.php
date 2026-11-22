<section class="booking-layout">


            <!-- =================================================
                 KOLOM UTAMA
            ================================================== -->

            <div class="booking-main">


                <!-- =================================================
                     PILIH PERANGKAT
                ================================================== -->

                <section class="booking-card device-card">


                    <!-- Card Header -->

                    <div class="booking-card-header">

                        <div class="booking-card-icon">

                            <img
                                src="{{ asset('assets/Icon/User.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                        </div>


                        <div class="booking-card-heading">

                            <h2>
                                Pilih Perangkat
                            </h2>

                            <p>
                                Pilih PlayStation dan TV yang
                                ingin kamu gunakan.
                            </p>

                        </div>

                    </div>



                    <!-- =================================================
                         PLAYSTATION
                    ================================================== -->

                    <div class="booking-form-group">

                        <div class="form-label-row">

                            <label>
                                PlayStation
                            </label>

                            <span class="required-label">
                                Wajib dipilih
                            </span>

                        </div>


                        <div class="device-grid">


                            <!-- PS4 -->

                            <label class="device-option">

                                <input
                                    type="radio"
                                    name="playstation"
                                    value="PS4"
                                    data-price="30000"
                                >

                                <div class="device-option-content">

                                    <div class="device-image">

                                        <img
                                            src="{{ asset('assets/Images/PS4.png') }}"
                                            alt="PlayStation 4"
                                        >

                                    </div>


                                    <div class="device-information">

                                        <h3>
                                            PS4
                                        </h3>

                                        <p>
                                            Rp30.000
                                            <span>/hari</span>
                                        </p>

                                    </div>

                                </div>

                            </label>



                            <!-- PS3 -->

                            <label class="device-option">

                                <input
                                    type="radio"
                                    name="playstation"
                                    value="PS3"
                                    data-price="20000"
                                >

                                <div class="device-option-content">

                                    <div class="device-image">

                                        <img
                                            src="{{ asset('assets/Images/PS3.png') }}"
                                            alt="PlayStation 3"
                                        >

                                    </div>


                                    <div class="device-information">

                                        <h3>
                                            PS3
                                        </h3>

                                        <p>
                                            Rp20.000
                                            <span>/hari</span>
                                        </p>

                                    </div>

                                </div>

                            </label>

                        </div>

                    </div>



                    <!-- =================================================
                         TV
                    ================================================== -->

                    <div class="booking-form-group">

                        <div class="form-label-row">

                            <label>
                                TV
                            </label>

                            <span class="optional-label">
                                Opsional
                            </span>

                        </div>


                        <div class="device-grid tv-grid">


                            <!-- Tidak Menggunakan TV -->

                            <label class="device-option no-tv-option">

                                <input
                                    type="radio"
                                    name="tv"
                                    value="none"
                                    data-price="0"
                                    checked
                                >

                                <div class="device-option-content">

                                    <div class="device-information">

                                        <h3>
                                            Tidak menggunakan TV
                                        </h3>

                                        <p>
                                            Rp0
                                        </p>

                                    </div>

                                </div>

                            </label>



                            <!-- TV55 -->

                            <label class="device-option">

                                <input
                                    type="radio"
                                    name="tv"
                                    value="TV55"
                                    data-price="40000"
                                >

                                <div class="device-option-content">

                                    <div class="device-image">

                                        <img
                                            src="{{ asset('assets/Images/Tv55.png') }}"
                                            alt="TV 55 Inch"
                                        >

                                    </div>


                                    <div class="device-information">

                                        <h3>
                                            TV55
                                        </h3>

                                        <p>
                                            Rp40.000
                                            <span>/hari</span>
                                        </p>

                                    </div>

                                </div>

                            </label>



                            <!-- TV43 -->

                            <label class="device-option">

                                <input
                                    type="radio"
                                    name="tv"
                                    value="TV43"
                                    data-price="30000"
                                >

                                <div class="device-option-content">

                                    <div class="device-image">

                                        <img
                                            src="{{ asset('assets/Images/Tv43.png') }}"
                                            alt="TV 43 Inch"
                                        >

                                    </div>


                                    <div class="device-information">

                                        <h3>
                                            TV43
                                        </h3>

                                        <p>
                                            Rp30.000
                                            <span>/hari</span>
                                        </p>

                                    </div>

                                </div>

                            </label>

                        </div>

                    </div>

                </section>



                <!-- =================================================
                     JADWAL PENYEWAAN
                ================================================== -->

                <section class="booking-card schedule-card">


                    <!-- Card Header -->

                    <div class="booking-card-header">

                        <div class="booking-card-icon">

                            <img
                                src="{{ asset('assets/Icon/Note.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                        </div>


                        <div class="booking-card-heading">

                            <h2>
                                Jadwal Penyewaan
                            </h2>

                            <p>
                                Tentukan tanggal dan waktu
                                pengambilan serta pengembalian.
                            </p>

                        </div>

                    </div>



                    <!-- =================================================
                         TANGGAL PENGAMBILAN
                    ================================================== -->

                    <div class="booking-form-group">

                        <label
                            for="pickupDate"
                            class="form-input-label"
                        >
                            Tanggal Pengambilan
                        </label>


                        <div class="form-input-wrapper">

                            <input
                                type="date"
                                id="pickupDate"
                                name="pickupDate"
                                required
                            >

                        </div>

                    </div>



                    <!-- =================================================
                         JAM PENGAMBILAN
                    ================================================== -->

                   <!-- =================================================
     JAM PENGAMBILAN
================================================== -->

                    <div class="booking-form-group">

                        <label
                            for="pickupTime"
                            class="form-input-label"
                        >
                            Jam Pengambilan
                        </label>

                        <div class="form-input-wrapper">

                            <input
                                type="time"
                                id="pickupTime"
                                name="pickupTime"
                                required
                            >

                        </div>

                    </div>



                    <!-- =================================================
                         TANGGAL PENGEMBALIAN
                    ================================================== -->

                    <div class="booking-form-group">

                        <label
                            for="returnDate"
                            class="form-input-label"
                        >
                            Tanggal Pengembalian
                        </label>


                        <div class="form-input-wrapper">

                            <input
                                type="date"
                                id="returnDate"
                                name="returnDate"
                                required
                            >

                        </div>

                    </div>



                    <!-- =================================================
                         INFORMATION
                    ================================================== -->

                    <div class="schedule-information">

                        <span class="information-icon">
                            i
                        </span>

                        <p>
                            Durasi penyewaan dihitung berdasarkan
                            tanggal pengambilan dan tanggal
                            pengembalian.
                        </p>

                    </div>

                </section>



                <!-- =================================================
                     BUTTON
                ================================================== -->

                <div class="booking-submit-wrapper">

                    <a
                        href="{{ route('user.booking.booking-member') }}"
                        class="booking-back-button"
                    >
                        Kembali
                    </a>


                    <button
                        type="button"
                        class="booking-submit-button"
                        id="continueBookingButton"
                    >
                        Lanjutkan Ke Metode Pembayaran
                    </button>

                </div>

            </div>



            <!-- =================================================
                 SIDEBAR / RINGKASAN BOOKING
            ================================================== -->

            <aside
                class="booking-information"
                aria-label="Ringkasan booking"
            >

                <div class="information-card">


                    <h2>
                        Ringkasan Booking
                    </h2>



                    <!-- =================================================
                         PERANGKAT
                    ================================================== -->

                  <!-- =================================================
     PERANGKAT
================================================== -->

<div class="summary-section">

    <h3>Perangkat</h3>

    <!-- PLAYSTATION -->
    <div class="summary-device">

        <div class="summary-device-image">
            <img
                id="summaryPlayStationImage"
                src=""
                alt=""
            >
        </div>

        <div class="summary-device-info">

            <span>PlayStation</span>

            <strong id="summaryPlayStation">
                Belum dipilih
            </strong>

            <small id="summaryPlayStationPrice">
                -
            </small>

        </div>

    </div>


    <!-- TV -->
    <div
        class="summary-device"
        id="summaryTVDevice"
    >

        <div class="summary-device-image">
            <img
                id="summaryTVImage"
                src=""
                alt=""
            >
        </div>

        <div class="summary-device-info">

            <span>TV</span>

            <strong id="summaryTV">
                Tidak digunakan
            </strong>

            <small id="summaryTVPrice">
                -
            </small>

        </div>

    </div>

</div>



                    <!-- =================================================
                         JADWAL
                    ================================================== -->

                    <div class="summary-section">

                        <h3>
                            Jadwal
                        </h3>


                        <!-- Tanggal Pengambilan -->

                        <div class="summary-row">

                            <span>
                                Pengambilan
                            </span>

                            <strong id="summaryPickupDate">
                                -
                            </strong>

                        </div>


                        <!-- Jam -->

                        <div class="summary-row">

                            <span>
                                Jam
                            </span>

                            <strong id="summaryPickupTime">
                                -
                            </strong>

                        </div>


                        <!-- Tanggal Pengembalian -->

                        <div class="summary-row">

                            <span>
                                Pengembalian
                            </span>

                            <strong id="summaryReturnDate">
                                -
                            </strong>

                        </div>


                        <!-- Durasi -->

                        <div class="summary-row duration-row">

                            <span>
                                Durasi
                            </span>

                            <strong id="summaryDuration">
                                0 hari
                            </strong>

                        </div>

                    </div>



                    <!-- =================================================
                         TOTAL
                    ================================================== -->

                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <strong id="summaryTotal">
                            Rp0
                        </strong>

                    </div>



                    <!-- =================================================
                         NOTE
                    ================================================== -->

                    <p class="summary-note">
                        Harga penyewaan dihitung berdasarkan
                        jumlah hari dan perangkat yang dipilih.
                    </p>

                </div>

            </aside>

        </section>
