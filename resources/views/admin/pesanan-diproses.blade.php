@extends('layouts.admin')

@section('admin-head')
<title>Detail Pesanan Diproses F&B - Admin IB Gaming</title>

<!-- Global CSS -->
<!-- Admin Layout CSS -->
<!-- Pesanan Diproses CSS -->
<link rel="stylesheet" href="{{ asset('css/admin/pesanan-diproses.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content pesanan-diproses-main">

    <!-- ============================================
         TOP BAR: Breadcrumb + Tombol Kembali
    ============================================= -->
    <div class="pesanan-diproses-topbar">

        <!-- Breadcrumb -->
        <nav class="pesanan-diproses-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-diproses-breadcrumb-back" aria-label="Kembali">
                <img
                    src="{{ asset('assets/Icon/Panah.svg') }}"
                    alt=""
                    class="pesanan-diproses-breadcrumb-back-icon"
                    aria-hidden="true"
                >
            </a>

            <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-diproses-breadcrumb-parent">
                Pesanan F &amp; B
            </a>

            <img
                src="{{ asset('assets/Icon/Arrow.svg') }}"
                alt=""
                class="pesanan-diproses-breadcrumb-sep"
                aria-hidden="true"
            >

            <span class="pesanan-diproses-breadcrumb-current">
                Detail Pesanan F &amp; B
            </span>
        </nav>

        <!-- Tombol Kembali -->
        <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-diproses-back-btn" id="btnKembali">
            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
                class="pesanan-diproses-back-icon"
                aria-hidden="true"
            >
            Kembali
        </a>

    </div>


    <!-- ============================================
         PAGE HEADING
    ============================================= -->
    <div class="pesanan-diproses-heading">
        <img
            src="{{ asset('assets/Icon/FNB.svg') }}"
            alt=""
            class="pesanan-diproses-heading-icon"
            aria-hidden="true"
        >
        <div class="pesanan-diproses-heading-text">
            <h1 class="pesanan-diproses-heading-title">Pesanan F &amp; B</h1>
            <p class="pesanan-diproses-heading-subtitle">Kelola pesanan makanan dan minuman dari pelanggan</p>
        </div>
    </div>


    <!-- ============================================
         STATUS BANNER: Pesanan Sedang Diproses
    ============================================= -->
    <div class="pesanan-diproses-status-banner">

        <div class="pesanan-diproses-banner-left">

            <div class="pesanan-diproses-banner-icon-wrapper">
                <img
                    src="{{ asset('assets/Icon/FNB.svg') }}"
                    alt=""
                    class="pesanan-diproses-banner-icon"
                    aria-hidden="true"
                >
            </div>

            <div class="pesanan-diproses-banner-text">
                <p class="pesanan-diproses-banner-title">Pesanan Sedang Diproses</p>
                <p class="pesanan-diproses-banner-subtitle">Pesanan sudah dikonfirmasi dan sedang disiapkan</p>
            </div>

        </div>

        <span class="pesanan-diproses-banner-badge">Diproses</span>

    </div>


    <!-- ============================================
         CONTENT GRID: 2 kolom
    ============================================= -->
    <div class="pesanan-diproses-content-grid">


        <!-- ========================================
             KOLOM KIRI
        ========================================= -->
        <div class="pesanan-diproses-col-left">


            <!-- CARD: Informasi Pesanan -->
            <div class="pesanan-diproses-info-card">

                <div class="pesanan-diproses-card-header">
                    <img
                        src="{{ asset('assets/Icon/Note.svg') }}"
                        alt=""
                        class="pesanan-diproses-card-icon"
                        aria-hidden="true"
                    >
                    <h2 class="pesanan-diproses-card-title">Informasi Pesanan</h2>
                </div>

                <div class="pesanan-diproses-info-body">

                    <!-- Field kiri -->
                    <div class="pesanan-diproses-info-fields">

                        <div class="pesanan-diproses-field">
                            <span class="pesanan-diproses-field-label">ID Pesanan</span>
                            <span class="pesanan-diproses-field-value">FNB-15</span>
                        </div>

                        <div class="pesanan-diproses-field">
                            <span class="pesanan-diproses-field-label">Tanggal &amp; Waktu</span>
                            <span class="pesanan-diproses-field-value">10 Okt 2026, 14:06</span>
                        </div>

                        <div class="pesanan-diproses-field">
                            <span class="pesanan-diproses-field-label">Pelanggan</span>
                            <span class="pesanan-diproses-field-value">Maxi Antonelli</span>
                        </div>

                        <div class="pesanan-diproses-field">
                            <span class="pesanan-diproses-field-label">Meja / Unit</span>
                            <span class="pesanan-diproses-field-value">TV 3</span>
                        </div>

                    </div>

                    <!-- Vertical divider -->
                    <div class="pesanan-diproses-info-divider" aria-hidden="true"></div>

                    <!-- Catatan -->
                    <div class="pesanan-diproses-info-notes">
                        <span class="pesanan-diproses-field-label">Catatan</span>
                        <span class="pesanan-diproses-notes-value">-</span>
                    </div>

                </div>

            </div>


            <!-- CARD: Rincian Menu -->
            <div class="pesanan-diproses-menu-card">

                <div class="pesanan-diproses-card-header">
                    <img
                        src="{{ asset('assets/Icon/FNB.svg') }}"
                        alt=""
                        class="pesanan-diproses-card-icon"
                        aria-hidden="true"
                    >
                    <h2 class="pesanan-diproses-card-title">Rincian Menu</h2>
                </div>

                <div class="pesanan-diproses-table-wrapper">
                    <table class="pesanan-diproses-table">
                        <thead>
                            <tr>
                                <th class="pesanan-diproses-th pesanan-diproses-th--no">No</th>
                                <th class="pesanan-diproses-th pesanan-diproses-th--menu">Menu</th>
                                <th class="pesanan-diproses-th pesanan-diproses-th--jumlah">Jumlah</th>
                                <th class="pesanan-diproses-th pesanan-diproses-th--harga">Harga</th>
                                <th class="pesanan-diproses-th pesanan-diproses-th--subtotal">SubTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="pesanan-diproses-tr">
                                <td class="pesanan-diproses-td pesanan-diproses-td--center">1</td>
                                <td class="pesanan-diproses-td">Indomie Goreng</td>
                                <td class="pesanan-diproses-td pesanan-diproses-td--center">4</td>
                                <td class="pesanan-diproses-td">Rp 5000</td>
                                <td class="pesanan-diproses-td pesanan-diproses-td--right">Rp 20.000</td>
                            </tr>
                            <tr class="pesanan-diproses-tr">
                                <td class="pesanan-diproses-td pesanan-diproses-td--center">2</td>
                                <td class="pesanan-diproses-td">Indomie Rendang</td>
                                <td class="pesanan-diproses-td pesanan-diproses-td--center">5</td>
                                <td class="pesanan-diproses-td">Rp 5000</td>
                                <td class="pesanan-diproses-td pesanan-diproses-td--right">Rp 25.000</td>
                            </tr>
                            <tr class="pesanan-diproses-tr">
                                <td class="pesanan-diproses-td pesanan-diproses-td--center">3</td>
                                <td class="pesanan-diproses-td">Le Mineral</td>
                                <td class="pesanan-diproses-td pesanan-diproses-td--center">6</td>
                                <td class="pesanan-diproses-td">Rp 3000</td>
                                <td class="pesanan-diproses-td pesanan-diproses-td--right">Rp 18.000</td>
                            </tr>
                            <tr class="pesanan-diproses-tr">
                                <td class="pesanan-diproses-td pesanan-diproses-td--center">4</td>
                                <td class="pesanan-diproses-td">Teh Pucuk</td>
                                <td class="pesanan-diproses-td pesanan-diproses-td--center">2</td>
                                <td class="pesanan-diproses-td">Rp 5000</td>
                                <td class="pesanan-diproses-td pesanan-diproses-td--right">Rp 10.000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="pesanan-diproses-tfoot-row">
                                <td colspan="4" class="pesanan-diproses-tfoot-label">Total Pesanan</td>
                                <td class="pesanan-diproses-tfoot-total">Rp 73.000</td>
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
        <div class="pesanan-diproses-col-right">


            <!-- CARD: Status Pembayaran -->
            <div class="pesanan-diproses-payment-card">

                <div class="pesanan-diproses-card-header">
                    <img
                        src="{{ asset('assets/Icon/Wallet.svg') }}"
                        alt=""
                        class="pesanan-diproses-card-icon"
                        aria-hidden="true"
                    >
                    <h2 class="pesanan-diproses-card-title">Status Pembayaran</h2>
                </div>

                <div class="pesanan-diproses-payment-fields">

                    <div class="pesanan-diproses-payment-row">
                        <span class="pesanan-diproses-payment-label">Metode Pembayaran</span>
                        <span class="pesanan-diproses-payment-sep">:</span>
                        <span class="pesanan-diproses-payment-value">QRIS</span>
                    </div>

                    <div class="pesanan-diproses-payment-row">
                        <span class="pesanan-diproses-payment-label">Status Pembayaran</span>
                        <span class="pesanan-diproses-payment-sep">:</span>
                        <span class="pesanan-diproses-payment-value">Berhasil</span>
                    </div>

                    <div class="pesanan-diproses-payment-row">
                        <span class="pesanan-diproses-payment-label">Total Pembayaran</span>
                        <span class="pesanan-diproses-payment-sep">:</span>
                        <span class="pesanan-diproses-payment-value pesanan-diproses-payment-value--total">Rp 73.000</span>
                    </div>

                </div>

            </div>


            <!-- CARD: Aksi -->
            <div class="pesanan-diproses-action-card">

                <div class="pesanan-diproses-action-header">
                    <h2 class="pesanan-diproses-action-title">Aksi</h2>
                    <p class="pesanan-diproses-action-subtitle">Pilih tindakan untuk pesanan ini</p>
                </div>

                <div class="pesanan-diproses-action-buttons">

                    <a
                        href="{{ route('admin.pesanan-fnb') }}"
                        class="pesanan-diproses-complete-button"
                        id="btnSelesaikan"
                    >
                        Selesaikan Pesanan
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
<script src="{{ asset('js/admin/pesanan-diproses.js') }}"></script>
@endsection
