<section
            class="payment-section"
            aria-label="Metode pembayaran"
        >


            <!-- =================================================
                 PAYMENT METHOD CARD
            ================================================== -->

            <div class="payment-method-card">


                <!-- Header -->

                <div class="payment-card-header">

                    <div class="payment-card-title-icon">

                        <span class="payment-document-icon">
                            <img
                                src="{{ asset('assets/Icon/Note.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >
                        </span>

                    </div>


                    <div class="payment-card-heading">

                        <h2>
                            Pilih Metode Pembayaran
                        </h2>

                        <p>
                            Silahkan Pilih Metode Pembayaran yang kamu inginkan
                        </p>

                    </div>

                </div>



                <!-- =================================================
                     QRIS
                ================================================== -->

                <label
                    class="payment-option qris-option"
                    for="paymentQris"
                >

                    <div class="payment-option-header">

                        <input
                            type="radio"
                            id="paymentQris"
                            name="paymentMethod"
                            value="qris"
                            checked
                        >


                        <div class="payment-option-icon">

                            <img
                                src="{{ asset('assets/Icon/Qris.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                        </div>


                        <div class="payment-option-text">

                            <strong>
                                QRIS
                            </strong>

                            <span>
                                Lakukan Pembayaran melalui e-wallet atau mobile banking
                            </span>

                        </div>

                    </div>


                    <!-- QRIS Detail -->

                    <div
                        class="qris-payment-detail"
                        id="qrisPaymentDetail"
                    >

                        <div class="qris-code-wrapper">

                            <img
                                src="{{ asset('assets/Icon/QR.svg') }}"
                                alt="QRIS"
                                class="qris-code-image"
                            >

                        </div>


                        <div class="qris-instruction">

                            <h3>
                                Scan Qris
                            </h3>

                            <p>
                                Gunakan aplikasi e-wallet atau mobile banking
                                yang mendukung QRIS.
                            </p>

                        </div>

                    </div>

                </label>



                <!-- =================================================
                     CASH
                ================================================== -->

                <label
                    class="payment-option cash-option"
                    for="paymentCash"
                >

                    <div class="payment-option-header">

                        <input
                            type="radio"
                            id="paymentCash"
                            name="paymentMethod"
                            value="cash"
                        >


                        <div class="payment-option-icon">

                            <img
                                src="{{ asset('assets/Icon/Note.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                        </div>


                        <div class="payment-option-text">

                            <strong>
                                Tunai (Cash)
                            </strong>

                            <span>
                                Pembayaran dilakukan saat pengambilan unit di IB Gaming
                            </span>

                        </div>

                    </div>


                    <!-- Cash Information -->

                    <div class="cash-payment-detail">

                        <div class="cash-note">

                            <img
                                src="{{ asset('assets/Icon/Note.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                            <span>
                                Pastikan membawa uang tunai dengan nominal yang sesuai
                            </span>

                        </div>

                    </div>

                </label>


            </div>



            <!-- =================================================
                 ORDER SUMMARY
            ================================================== -->

            <aside
                class="payment-order-summary"
                aria-label="Ringkasan pesanan"
            >


                <div class="payment-summary-card">


                    <!-- Summary Header -->

                    <div class="payment-summary-header">

                        <div>

                            <span class="payment-summary-label">
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



                    <!-- Dynamic Orders -->

                    <div
                        class="payment-summary-items"
                        id="paymentSummaryItems"
                    >

                        <!--
                            Data pesanan akan dimasukkan
                            melalui metode-pembayaran.js
                        -->

                    </div>



                    <!-- Empty State -->

                    <div
                        class="payment-summary-empty"
                        id="paymentSummaryEmpty"
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

                    <div class="payment-summary-subtotal">

                        <span>
                            Sub Total
                        </span>

                        <strong id="paymentSummarySubtotal">
                            Rp 0
                        </strong>

                    </div>



                    <!-- Confirmation Button -->

                    <button
                        type="button"
                        class="confirm-payment-button"
                        id="confirmPaymentButton"
                    >

                        <span>
                            Konfirmasi Pembayaran
                        </span>

                    </button>


                </div>


            </aside>


        </section>
