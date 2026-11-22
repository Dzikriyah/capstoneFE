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

          <aside class="payment-order-summary">

    <div class="payment-summary-card">

        <div class="payment-summary-header">

            <div>
                <span class="payment-summary-label">
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


        <!-- BOOKING SUMMARY -->
        <div
            class="booking-summary-list"
            id="paymentSummaryItems"
        ></div>


        <!-- TOTAL -->
        <div class="booking-summary-total">

            <span class="booking-summary-total-label">
                Total
            </span>

            <strong
                class="booking-summary-total-value"
                id="paymentSummarySubtotal"
            >
                Rp 0
            </strong>

        </div>


        <!-- BUTTON -->
        <button
            type="button"
            class="confirm-payment-button"
            id="confirmPaymentButton"
        >
            Konfirmasi Pembayaran
        </button>

    </div>

</aside>


        </section>
