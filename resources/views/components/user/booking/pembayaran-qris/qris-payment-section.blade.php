<section
            class="qris-payment-section"
            aria-label="Pembayaran QRIS"
        >


            <!-- =============================================
                 QRIS PAYMENT CARD
            ============================================== -->

            <div class="qris-payment-card">


                <!-- Header -->
                <div class="qris-payment-header">

                    <div class="qris-payment-title-icon">

                        <img
                            src="{{ asset('assets/Icon/QR.svg') }}"
                            alt=""
                            aria-hidden="true"
                        >

                    </div>


                    <div class="qris-payment-heading">

                        <h2>
                            Scan QRIS untuk melakukan Pembayaran
                        </h2>

                        <p>
                            Gunakan Aplikasi E-Wallet atau Mobile Banking
                            yang mendukung QRIS
                        </p>

                    </div>

                </div>


                <!-- =========================================
                     PAYMENT CONTENT
                ========================================== -->

                <div class="qris-payment-content">


                    <!-- =====================================
                         QR CODE
                    ====================================== -->

                    <div class="qris-code-card">

                        <div class="qris-brand">
                            QRIS
                        </div>


                        <div class="qris-code-wrapper">

                            <!--
                                Untuk tahap frontend:
                                gunakan QR.svg sebagai placeholder.

                                Nanti ketika backend + Midtrans:
                                src ini akan diganti menggunakan
                                QR/payment data dari transaksi Midtrans.
                            -->

                            <img
                                id="qrisCodeImage"
                                class="qris-code-image"
                                src="{{ asset('assets/Icon/QR.svg') }}"
                                alt="QRIS Pembayaran"
                            >

                        </div>


                        <div class="qris-merchant-name">
                            IB GAMING
                        </div>

                        <div class="qris-merchant-id">
                            NMID: ID1023847329201
                        </div>

                    </div>


                    <!-- =====================================
                         PAYMENT INFORMATION
                    ====================================== -->

                    <div class="payment-information-card">


                        <!-- Timer -->
                        <div class="payment-timer-box">

                            <div class="payment-timer-icon">
                                <img
                                    src="{{ asset('assets/Icon/Timer.svg') }}"
                                    alt=""
                                    aria-hidden="true">
                            </div>

                            <div class="payment-timer-content">

                                <span class="payment-timer-label">
                                    Batas Waktu Pembayaran
                                </span>

                                <strong
                                    id="paymentTimer"
                                    class="payment-timer"
                                >
                                    05 : 00
                                </strong>

                                <span class="payment-timer-description">
                                    Mohon selesaikan pembayaran sebelum waktu berakhir
                                </span>

                            </div>

                        </div>


                        <!-- Detail pembayaran -->

                        <div class="payment-detail-list">


                            <div class="payment-detail-row">

                                <span>
                                    Nominal Pembayaran
                                </span>

                                <strong id="paymentAmount">
                                    Rp 0
                                </strong>

                            </div>


                            <div class="payment-detail-row">

                                <span>
                                    Metode Pembayaran
                                </span>

                                <span>
                                    QRIS
                                </span>

                            </div>


                            <div class="payment-detail-row">

                                <span>
                                    Nomor Order
                                </span>

                                <span id="paymentOrderNumber">
                                    IBG-20261020-00123
                                </span>

                            </div>


                            <div class="payment-detail-row">

                                <span>
                                    Tanggal Pengambilan
                                </span>

                                <span id="paymentPickupDate">
                                    20 Oktober 2026
                                </span>

                            </div>


                            <div class="payment-detail-row">

                                <span>
                                    Jam Pengambilan
                                </span>

                                <span id="paymentPickupTime">
                                    14:00 - 15:00
                                </span>

                            </div>


                            <div class="payment-detail-row payment-status-row">

                                <span>
                                    Status
                                </span>

                                <span
                                    id="paymentStatus"
                                    class="payment-status pending"
                                >
                                    <span class="payment-status-dot"></span>
                                    Menunggu Pembayaran
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =============================================
                 ORDER SUMMARY
            ============================================== -->

            <aside
                class="qris-order-summary"
                aria-label="Ringkasan pesanan"
            >

                <div class="qris-summary-card">


                    <!-- Summary Header -->

                    <div class="qris-summary-header">

                        <div>

                            <span class="qris-summary-label">
                                RINGKASAN
                            </span>

                            <h2>
                                Booking Saya
                            </h2>

                        </div>


                        <img
                            src="{{ asset('assets/Icon/PlayStation Logo.svg') }}"
                            alt=""
                            aria-hidden="true"
                        >

                    </div>


                    <!-- Dynamic Orders -->

                    <div
                        class="qris-summary-items"
                        id="qrisSummaryItems"
                    >
                    </div>


                    <!-- Empty -->

                    <div
                        class="qris-summary-empty"
                        id="qrisSummaryEmpty"
                    >

                        <img
                            src="{{ asset('assets/Icon/FNB.svg') }}"
                            alt=""
                            aria-hidden="true"
                        >

                        <p>
                            Belum ada pesanan.
                        </p>

                    </div>


                    <!-- Subtotal -->

                    <div class="qris-summary-subtotal">

                        <span>
                            Sub Total
                        </span>

                        <strong id="qrisSummarySubtotal">
                            Rp 0
                        </strong>

                    </div>


                    <!-- Total -->

                    <div class="qris-summary-total">

                        <span>
                            Total
                        </span>

                        <strong id="qrisSummaryTotal">
                            Rp 0
                        </strong>

                    </div>

                </div>

            </aside>

        </section>
