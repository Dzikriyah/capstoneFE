<section
                class="order-detail-section"
                aria-label="Detail pemesanan"
            >


                <!-- =================================================
                     DAFTAR PESANAN
                ================================================== -->

                <div class="order-detail-list">

                    <div class="order-detail-header">

                        <div>
                            <h2>
                                Pesanan Kamu
                            </h2>

                            <p>
                                Daftar makanan dan minuman yang kamu pilih
                            </p>
                        </div>

                        <span
                            class="order-detail-count"
                            id="orderItemCount"
                        >
                            0 item
                        </span>

                    </div>


                    <!--
                        Data pesanan akan dimasukkan
                        oleh lanjut-pemesanan.js
                    -->
                    <div
                        class="checkout-order-items"
                        id="checkoutOrderItems"
                    ></div>


                    <!-- Empty State -->
                    <div
                        class="checkout-empty"
                        id="checkoutEmpty"
                    >

                        <img
                            src="{{ asset('assets/Icon/FNB.svg') }}"
                            alt=""
                            aria-hidden="true"
                        >

                        <h3>
                            Belum Ada Pesanan
                        </h3>

                        <p>
                            Silakan pilih menu terlebih dahulu.
                        </p>

                        <a
                            href="{{ route('user.fnb.pesan-fnb') }}"
                            class="empty-add-menu-button"
                        >
                            Tambah Menu
                        </a>

                    </div>


                    <!-- =================================================
                         TAMBAH MENU LAIN
                    ================================================== -->

                    <a
                        href="{{ route('user.fnb.pesan-fnb') }}"
                        class="add-more-menu-button"
                        id="addMoreMenuButton"
                    >

                        <span class="add-more-menu-icon">
                            +
                        </span>

                        <span>
                            Tambah Menu Lain
                        </span>

                    </a>

                </div>



                <!-- =================================================
                     RINGKASAN PESANAN
                ================================================== -->

                <aside
                    class="order-detail-summary"
                    aria-label="Ringkasan pesanan"
                >

                    <div class="summary-card">


                        <!-- Summary Header -->
                        <div class="summary-card-header">

                            <div>

                                <span class="summary-label">
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



                        <!-- =================================================
                             NOMOR MEJA
                        ================================================== -->

                        <div class="table-number-field">

                            <label for="tableNumber">
                                Nomor Meja
                            </label>

                            <input
                                type="text"
                                id="tableNumber"
                                name="tableNumber"
                                inputmode="numeric"
                                maxlength="2"
                                placeholder="Contoh : 03"
                                autocomplete="off"
                            >

                            <p>
                                Masukkan nomor meja tempat kamu bermain.
                            </p>

                        </div>



                        <!-- =================================================
                             RINGKASAN ITEM
                        ================================================== -->

                        <div class="summary-items">

                            <div class="summary-row">

                                <span>
                                    Jumlah Item
                                </span>

                                <strong id="summaryItemCount">
                                    0 item
                                </strong>

                            </div>


                            <div class="summary-row">

                                <span>
                                    Sub Total
                                </span>

                                <strong id="summarySubtotal">
                                    Rp 0
                                </strong>

                            </div>

                        </div>



                        <!-- =================================================
                             TOTAL
                        ================================================== -->

                        <div class="summary-total">

                            <span>
                                Total Pembayaran
                            </span>

                            <strong id="summaryTotal">
                                Rp 0
                            </strong>

                        </div>



                        <!-- =================================================
                             LANJUT PEMBAYARAN
                        ================================================== -->

                        <button
                            type="button"
                            class="continue-payment-button"
                            id="continuePaymentButton"
                        >

                            <span>
                                Lanjut ke Pembayaran
                            </span>

                        </button>

                    </div>

                </aside>

            </section>
