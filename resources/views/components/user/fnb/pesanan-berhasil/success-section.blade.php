<section
            class="success-section"
            aria-label="Pesanan berhasil"
        >


            <!-- =============================================
                 LEFT : SUCCESS CARD
            ============================================== -->

            <div class="success-main-card">

                <div class="success-icon">

                    <span>
                        ✓
                    </span>

                </div>


                <div class="success-heading">

                    <span class="success-label">
                        PESANAN BERHASIL DIBUAT
                    </span>

                    <h2>
                        Terima Kasih!
                    </h2>

                    <p>
                        Pesanan F&amp;B kamu telah berhasil
                        dibuat dan sedang menunggu pembayaran.
                    </p>

                </div>


                <!-- =========================================
                     ORDER INFORMATION
                ========================================== -->

                <div class="success-order-information">

                    <div class="success-information-row">

                        <span>
                            Nomor Pesanan
                        </span>

                        <strong id="successOrderNumber">
                            -
                        </strong>

                    </div>


                    <div class="success-information-row">

                        <span>
                            Nomor Meja
                        </span>

                        <strong id="successTableNumber">
                            -
                        </strong>

                    </div>


                    <div class="success-information-row">

                        <span>
                            Metode Pembayaran
                        </span>

                        <strong>
                            Tunai (Cash)
                        </strong>

                    </div>


                    <div class="success-information-row success-status-row">

                        <span>
                            Status
                        </span>

                        <span class="success-status">

                            <span class="success-status-dot"></span>

                            Menunggu Pembayaran

                        </span>

                    </div>

                </div>


                <!-- =========================================
                     PAYMENT NOTE
                ========================================== -->

                <div class="cash-payment-information">

                    <div class="cash-information-icon">
                        !
                    </div>

                    <div class="cash-information-content">

                        <h3>
                            Pembayaran Tunai
                        </h3>

                        <p>
                            Silakan lakukan pembayaran
                            secara tunai di kasir IB Gaming
                            sebelum pesanan diproses.
                        </p>

                    </div>

                </div>

            </div>


            <!-- =============================================
                 RIGHT : ORDER SUMMARY
            ============================================== -->

            <aside
                class="success-order-summary"
                aria-label="Ringkasan pesanan"
            >

                <div class="success-summary-card">

                    <div class="success-summary-header">

                        <div>

                            <span class="success-summary-label">
                                RINGKASAN
                            </span>

                            <h2>
                                Pesanan Saya
                            </h2>

                        </div>


                        <img
                            src="{{ asset('assets/Icon/FNB.svg') }}"
                            alt=""
                            aria-hidden="true"
                        >

                    </div>


                    <!-- ORDER ITEMS -->

                    <div
                        class="success-summary-items"
                        id="successSummaryItems"
                    >
                    </div>


                    <!-- EMPTY -->

                    <div
                        class="success-summary-empty"
                        id="successSummaryEmpty"
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


                    <!-- SUBTOTAL -->

                    <div class="success-summary-subtotal">

                        <span>
                            Sub Total
                        </span>

                        <strong id="successSummarySubtotal">
                            Rp 0
                        </strong>

                    </div>


                    <!-- TOTAL -->

                    <div class="success-summary-total">

                        <span>
                            Total
                        </span>

                        <strong id="successSummaryTotal">
                            Rp 0
                        </strong>

                    </div>

                </div>

            </aside>

        </section>
