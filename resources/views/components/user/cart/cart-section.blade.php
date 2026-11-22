<section class="cart-section">


                <!-- =============================================
                     CART MAIN
                ============================================== -->

                <div class="cart-main">


                    <!-- CART HEADER -->

                    <div class="cart-box-header">

                        <div class="cart-box-title">

                            <div class="cart-icon-wrapper">

                                <img
                                    src="{{ asset('assets/Icon/Keranjang.svg') }}"
                                    alt=""
                                    aria-hidden="true"
                                >

                            </div>

                            <div>

                                <span class="cart-box-label">
                                    KERANJANG
                                </span>

                                <h2>
                                    Keranjang Pesanan
                                </h2>

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         ORDER TABS
                    ================================================== -->

                    <div class="cart-tabs">

                        <button
                            type="button"
                            class="cart-tab active"
                            data-tab="fnb"
                        >
                            Pesanan F&B
                            <span class="cart-tab-count">
                                (3)
                            </span>
                        </button>


                        <button
                            type="button"
                            class="cart-tab"
                            data-tab="booking"
                        >
                            Booking PS
                            <span class="cart-tab-count">
                                (0)
                            </span>
                        </button>

                    </div>


                    <!-- =================================================
                         F&B CART
                    ================================================== -->

                    <div
                        class="cart-tab-content active"
                        id="fnbCartContent"
                    >


                        <!-- INDOMIE GORENG -->

                        <article class="cart-item">

                            <div class="cart-item-image">

                                <img
                                    src="{{ asset('assets/Images/Indomie-Goreng.png') }}"
                                    alt="Indomie Goreng"
                                >

                            </div>


                            <div class="cart-item-info">

                                <h3 class="cart-item-name">
                                    Indomie Goreng
                                </h3>

                                <p class="cart-item-note">
                                    Catatan:
                                </p>

                                <span class="cart-item-detail">
                                    2 Pedas, 2 Piring Pedas
                                </span>

                            </div>


                            <div class="cart-item-right">

                                <div class="cart-quantity">

                                    <button
                                        type="button"
                                        class="quantity-button"
                                        aria-label="Kurangi jumlah"
                                    >
                                        −
                                    </button>

                                    <span class="quantity-value">
                                        4
                                    </span>

                                    <button
                                        type="button"
                                        class="quantity-button"
                                        aria-label="Tambah jumlah"
                                    >
                                        +
                                    </button>

                                </div>


                                <div class="cart-item-price">
                                    Rp 20.000
                                </div>


                                <button
                                    type="button"
                                    class="cart-delete-button"
                                    aria-label="Hapus Indomie Goreng"
                                >

                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                        aria-hidden="true"
                                    >

                                </button>

                            </div>

                        </article>


                        <!-- INDOMIE RENDANG -->

                        <article class="cart-item">

                            <div class="cart-item-image">

                                <img
                                    src="{{ asset('assets/Images/Indomie-Rendang.png') }}"
                                    alt="Indomie Rendang"
                                >

                            </div>


                            <div class="cart-item-info">

                                <h3 class="cart-item-name">
                                    Indomie Rendang
                                </h3>

                                <p class="cart-item-note">
                                    Catatan:
                                </p>

                                <span class="cart-item-detail">
                                    -
                                </span>

                            </div>


                            <div class="cart-item-right">

                                <div class="cart-quantity">

                                    <button
                                        type="button"
                                        class="quantity-button"
                                        aria-label="Kurangi jumlah"
                                    >
                                        −
                                    </button>

                                    <span class="quantity-value">
                                        4
                                    </span>

                                    <button
                                        type="button"
                                        class="quantity-button"
                                        aria-label="Tambah jumlah"
                                    >
                                        +
                                    </button>

                                </div>


                                <div class="cart-item-price">
                                    Rp 20.000
                                </div>


                                <button
                                    type="button"
                                    class="cart-delete-button"
                                    aria-label="Hapus Indomie Rendang"
                                >

                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                        aria-hidden="true"
                                    >

                                </button>

                            </div>

                        </article>


                        <!-- TEH PUCUK -->

                        <article class="cart-item">

                            <div class="cart-item-image">

                                <img
                                    src="{{ asset('assets/Images/Teh-Pucuk.png') }}"
                                    alt="Teh Pucuk"
                                >

                            </div>


                            <div class="cart-item-info">

                                <h3 class="cart-item-name">
                                    Teh Pucuk
                                </h3>

                                <p class="cart-item-note">
                                    Catatan:
                                </p>

                                <span class="cart-item-detail">
                                    -
                                </span>

                            </div>


                            <div class="cart-item-right">

                                <div class="cart-quantity">

                                    <button
                                        type="button"
                                        class="quantity-button"
                                        aria-label="Kurangi jumlah"
                                    >
                                        −
                                    </button>

                                    <span class="quantity-value">
                                        2
                                    </span>

                                    <button
                                        type="button"
                                        class="quantity-button"
                                        aria-label="Tambah jumlah"
                                    >
                                        +
                                    </button>

                                </div>


                                <div class="cart-item-price">
                                    Rp 10.000
                                </div>


                                <button
                                    type="button"
                                    class="cart-delete-button"
                                    aria-label="Hapus Teh Pucuk"
                                >

                                    <img
                                        src="{{ asset('assets/Icon/Trash.svg') }}"
                                        alt=""
                                        aria-hidden="true"
                                    >

                                </button>

                            </div>

                        </article>


                        <!-- TAMBAH MENU -->

                        <button
                            type="button"
                            class="add-menu-button"
                        >

                            <span class="add-menu-icon">
                                +
                            </span>

                            <span>

                                <strong>
                                    Tambah Menu Lain
                                </strong>

                                <small>
                                    Masih mau pesan lainnya?
                                </small>

                            </span>

                        </button>

                    </div>


                    <!-- =================================================
                         BOOKING PS CART
                    ================================================== -->

                    <div
                        class="cart-tab-content"
                        id="bookingCartContent"
                    >

                        <div class="cart-empty-state">

                            <img
                                src="{{ asset('assets/Icon/Keranjang.svg') }}"
                                alt=""
                                aria-hidden="true"
                            >

                            <h3>
                                Belum Ada Booking PS
                            </h3>

                            <p>
                                Booking PlayStation kamu akan muncul
                                di sini.
                            </p>

                            <a
                                href="{{ route('user.booking.booking-member') }}"
                                class="empty-state-button"
                            >
                                Booking PS
                            </a>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     ORDER SUMMARY
                ================================================== -->

                <aside class="cart-summary">

                    <div class="cart-summary-card">


                        <div class="cart-summary-header">

                            <div>

                                <span class="cart-summary-label">
                                    RINGKASAN PESANAN
                                </span>

                                <h2>
                                    Pesanan Saya
                                </h2>

                            </div>

                        </div>


                        <!-- SUMMARY ITEMS -->

                        <div class="cart-summary-items">


                            <!-- SUMMARY ITEM 1 -->

                            <div class="cart-summary-item">

                                <div class="cart-summary-item-info">

                                    <span>
                                        Indomie Goreng
                                    </span>

                                    <small>
                                        Rp 5.000 × 4
                                    </small>

                                </div>

                                <strong>
                                    Rp 20.000
                                </strong>

                            </div>


                            <!-- SUMMARY ITEM 2 -->

                            <div class="cart-summary-item">

                                <div class="cart-summary-item-info">

                                    <span>
                                        Indomie Rendang
                                    </span>

                                    <small>
                                        Rp 5.000 × 4
                                    </small>

                                </div>

                                <strong>
                                    Rp 20.000
                                </strong>

                            </div>


                            <!-- SUMMARY ITEM 3 -->

                            <div class="cart-summary-item">

                                <div class="cart-summary-item-info">

                                    <span>
                                        Teh Pucuk
                                    </span>

                                    <small>
                                        Rp 5.000 × 2
                                    </small>

                                </div>

                                <strong>
                                    Rp 10.000
                                </strong>

                            </div>

                        </div>


                        <!-- SUBTOTAL -->

                        <div class="cart-summary-subtotal">

                            <span>
                                Sub Total
                            </span>

                            <strong>
                                Rp 50.000
                            </strong>

                        </div>


                        <!-- TOTAL -->

                        <div class="cart-summary-total">

                            <span>
                                Total Pembayaran
                            </span>

                            <strong>
                                Rp 50.000
                            </strong>

                        </div>


                        <!-- PAYMENT BUTTON -->

                        <button
                            type="button"
                            class="cart-checkout-button"
                        >
                            Lanjut ke Pembayaran
                        </button>

                    </div>

                </aside>

            </section>
