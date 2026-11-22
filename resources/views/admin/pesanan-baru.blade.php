@extends('layouts.admin')

@section('admin-head')
<title>Detail Pesanan Baru F&B - Admin IB Gaming</title>

<!-- Global CSS -->
<!-- Admin Layout CSS -->
<!-- Pesanan Baru CSS -->
<link rel="stylesheet" href="{{ asset('css/admin/pesanan-baru.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content pesanan-baru-main">

    <!-- ============================================
         TOP BAR: Breadcrumb + Tombol Kembali
    ============================================= -->
    <div class="pesanan-baru-topbar">

        <!-- Breadcrumb -->
        <nav class="pesanan-baru-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-baru-breadcrumb-back" aria-label="Kembali">
                <img
                    src="{{ asset('assets/Icon/Panah.svg') }}"
                    alt=""
                    class="pesanan-baru-breadcrumb-back-icon"
                    aria-hidden="true"
                >
            </a>

            <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-baru-breadcrumb-parent">
                Pesanan F &amp; B
            </a>

            <img
                src="{{ asset('assets/Icon/Arrow.svg') }}"
                alt=""
                class="pesanan-baru-breadcrumb-sep"
                aria-hidden="true"
            >

            <span class="pesanan-baru-breadcrumb-current">
                Detail Pesanan F &amp; B
            </span>
        </nav>

        <!-- Tombol Kembali -->
        <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-baru-back-btn" id="btnKembali">
            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
                class="pesanan-baru-back-icon"
                aria-hidden="true"
            >
            Kembali
        </a>

    </div>


    <!-- ============================================
         PAGE HEADING
    ============================================= -->
    <div class="pesanan-baru-heading">
        <img
            src="{{ asset('assets/Icon/FNB.svg') }}"
            alt=""
            class="pesanan-baru-heading-icon"
            aria-hidden="true"
        >
        <div class="pesanan-baru-heading-text">
            <h1 class="pesanan-baru-heading-title">Pesanan F &amp; B</h1>
            <p class="pesanan-baru-heading-subtitle">Kelola pesanan makanan dan minuman dari pelanggan</p>
        </div>
    </div>


    <!-- ============================================
         STATUS BANNER: Pesanan Baru
    ============================================= -->
    <div class="pesanan-baru-status-banner">

        <div class="pesanan-baru-banner-left">

            <div class="pesanan-baru-banner-icon-wrapper">
                <img
                    src="{{ asset('assets/Icon/FNB.svg') }}"
                    alt=""
                    class="pesanan-baru-banner-icon"
                    aria-hidden="true"
                >
            </div>

            <div class="pesanan-baru-banner-text">
                <p class="pesanan-baru-banner-title">Pesanan Baru</p>
                <p class="pesanan-baru-banner-subtitle">Pesanan ini baru masuk dan menunggu konfirmasi admin</p>
            </div>

        </div>

        <span class="pesanan-baru-banner-badge">Baru</span>

    </div>


    <!-- ============================================
         CONTENT GRID: 2 kolom (kiri besar, kanan kecil)
    ============================================= -->
    <div class="pesanan-baru-content-grid">


        <!-- ========================================
             KOLOM KIRI
        ========================================= -->
        <div class="pesanan-baru-col-left">


            <!-- CARD: Informasi Pesanan -->
            <div class="pesanan-baru-info-card">

                <div class="pesanan-baru-card-header">
                    <img
                        src="{{ asset('assets/Icon/Note.svg') }}"
                        alt=""
                        class="pesanan-baru-card-icon"
                        aria-hidden="true"
                    >
                    <h2 class="pesanan-baru-card-title">Informasi Pesanan</h2>
                </div>

                <div class="pesanan-baru-info-body">

                    <!-- Kolom info kiri -->
                    <div class="pesanan-baru-info-fields">

                        <div class="pesanan-baru-field">
                            <span class="pesanan-baru-field-label">ID Pesanan</span>
                            <span class="pesanan-baru-field-value">FNB-17</span>
                        </div>

                        <div class="pesanan-baru-field">
                            <span class="pesanan-baru-field-label">Tanggal &amp; Waktu</span>
                            <span class="pesanan-baru-field-value">10 Okt 2026, 14:10</span>
                        </div>

                        <div class="pesanan-baru-field">
                            <span class="pesanan-baru-field-label">Pelanggan</span>
                            <span class="pesanan-baru-field-value">Kimi Antonelli</span>
                        </div>

                        <div class="pesanan-baru-field">
                            <span class="pesanan-baru-field-label">Meja / Unit</span>
                            <span class="pesanan-baru-field-value">TV 1</span>
                        </div>

                    </div>

                    <!-- Vertical divider -->
                    <div class="pesanan-baru-info-divider" aria-hidden="true"></div>

                    <!-- Catatan -->
                    <div class="pesanan-baru-info-notes">
                        <span class="pesanan-baru-field-label">Catatan</span>
                        <span class="pesanan-baru-notes-value">-</span>
                    </div>

                </div>

            </div>


            <!-- CARD: Rincian Menu -->
            <div class="pesanan-baru-menu-card">

                <div class="pesanan-baru-card-header">
                    <img
                        src="{{ asset('assets/Icon/FNB.svg') }}"
                        alt=""
                        class="pesanan-baru-card-icon"
                        aria-hidden="true"
                    >
                    <h2 class="pesanan-baru-card-title">Rincian Menu</h2>
                </div>

                <div class="pesanan-baru-table-wrapper">
                    <table class="pesanan-baru-table">
                        <thead>
                            <tr>
                                <th class="pesanan-baru-th pesanan-baru-th--no">No</th>
                                <th class="pesanan-baru-th pesanan-baru-th--menu">Menu</th>
                                <th class="pesanan-baru-th pesanan-baru-th--jumlah">Jumlah</th>
                                <th class="pesanan-baru-th pesanan-baru-th--harga">Harga</th>
                                <th class="pesanan-baru-th pesanan-baru-th--subtotal">SubTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="pesanan-baru-tr">
                                <td class="pesanan-baru-td pesanan-baru-td--center">1</td>
                                <td class="pesanan-baru-td">Indomie Goreng</td>
                                <td class="pesanan-baru-td pesanan-baru-td--center">4</td>
                                <td class="pesanan-baru-td">Rp 5000</td>
                                <td class="pesanan-baru-td pesanan-baru-td--right">Rp 20.000</td>
                            </tr>
                            <tr class="pesanan-baru-tr">
                                <td class="pesanan-baru-td pesanan-baru-td--center">2</td>
                                <td class="pesanan-baru-td">Indomie Rendang</td>
                                <td class="pesanan-baru-td pesanan-baru-td--center">5</td>
                                <td class="pesanan-baru-td">Rp 5000</td>
                                <td class="pesanan-baru-td pesanan-baru-td--right">Rp 25.000</td>
                            </tr>
                            <tr class="pesanan-baru-tr">
                                <td class="pesanan-baru-td pesanan-baru-td--center">3</td>
                                <td class="pesanan-baru-td">Le Mineral</td>
                                <td class="pesanan-baru-td pesanan-baru-td--center">6</td>
                                <td class="pesanan-baru-td">Rp 3000</td>
                                <td class="pesanan-baru-td pesanan-baru-td--right">Rp 18.000</td>
                            </tr>
                            <tr class="pesanan-baru-tr">
                                <td class="pesanan-baru-td pesanan-baru-td--center">4</td>
                                <td class="pesanan-baru-td">Teh Pucuk</td>
                                <td class="pesanan-baru-td pesanan-baru-td--center">2</td>
                                <td class="pesanan-baru-td">Rp 5000</td>
                                <td class="pesanan-baru-td pesanan-baru-td--right">Rp 10.000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="pesanan-baru-tfoot-row">
                                <td colspan="4" class="pesanan-baru-tfoot-label">Total Pesanan</td>
                                <td class="pesanan-baru-tfoot-total">Rp 73.000</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>
        <!-- END KOLOM KIRI -->


        <!-- ========================================
             KOLOM KANAN
        ========================================= -->
        <div class="pesanan-baru-col-right">


            <!-- CARD: Status Pembayaran -->
            <div class="pesanan-baru-payment-card">

                <div class="pesanan-baru-card-header">
                    <img
                        src="{{ asset('assets/Icon/Wallet.svg') }}"
                        alt=""
                        class="pesanan-baru-card-icon"
                        aria-hidden="true"
                    >
                    <h2 class="pesanan-baru-card-title">Status Pembayaran</h2>
                </div>

                <div class="pesanan-baru-payment-fields">

                    <div class="pesanan-baru-payment-row">
                        <span class="pesanan-baru-payment-label">Metode Pembayaran</span>
                        <span class="pesanan-baru-payment-sep">:</span>
                        <span class="pesanan-baru-payment-value">QRIS</span>
                    </div>

                    <div class="pesanan-baru-payment-row">
                        <span class="pesanan-baru-payment-label">Status Pembayaran</span>
                        <span class="pesanan-baru-payment-sep">:</span>
                        <span class="pesanan-baru-payment-value">Berhasil</span>
                    </div>

                    <div class="pesanan-baru-payment-row">
                        <span class="pesanan-baru-payment-label">Total Pembayaran</span>
                        <span class="pesanan-baru-payment-sep">:</span>
                        <span class="pesanan-baru-payment-value pesanan-baru-payment-value--total">Rp 73.000</span>
                    </div>

                </div>

            </div>


            <!-- CARD: Aksi -->
            <div class="pesanan-baru-action-card">

                <div class="pesanan-baru-action-header">
                    <h2 class="pesanan-baru-action-title">Aksi</h2>
                    <p class="pesanan-baru-action-subtitle">Pilih tindakan untuk pesanan ini</p>
                </div>

                <div class="pesanan-baru-action-buttons">

                    <a
                        href="{{ route('admin.pesanan-fnb') }}"
                        class="pesanan-baru-confirm-button"
                        id="btnKonfirmasi"
                    >
                        Konfirmasi Pesanan
                    </a>

                    <a
                        href="{{ route('admin.pesanan-fnb') }}"
                        class="pesanan-baru-reject-button"
                        id="btnTolak"
                    >
                        Tolak Pesanan
                    </a>

                </div>

            </div>

        </div>
        <!-- END KOLOM KANAN -->

    </div>
    <!-- END CONTENT GRID -->

</main>
@endsection

@section('admin-overlays')
<script src="{{ asset('js/admin/pesanan-baru.js') }}"></script>
@endsection
