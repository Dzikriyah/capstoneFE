@extends('layouts.admin')

@section('admin-head')
<title>Detail Pesanan Selesai F&B - Admin IB Gaming</title>

<!-- Global CSS -->
<!-- Admin Layout CSS -->
<!-- Pesanan Selesai CSS -->
<link rel="stylesheet" href="{{ asset('css/admin/pesanan-selesai.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content pesanan-selesai-main">

    <!-- TOP BAR -->
    <div class="pesanan-selesai-topbar">

        <nav class="pesanan-selesai-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-selesai-breadcrumb-back" aria-label="Kembali">
                <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="pesanan-selesai-breadcrumb-back-icon" aria-hidden="true">
            </a>

            <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-selesai-breadcrumb-parent">Pesanan F &amp; B</a>

            <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="pesanan-selesai-breadcrumb-sep" aria-hidden="true">

            <span class="pesanan-selesai-breadcrumb-current">Detail Pesanan F &amp; B</span>
        </nav>

        <a href="{{ route('admin.pesanan-fnb') }}" class="pesanan-selesai-back-btn" id="btnKembali">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="pesanan-selesai-back-icon" aria-hidden="true">
            Kembali
        </a>

    </div>


    <!-- PAGE HEADING -->
    <div class="pesanan-selesai-heading">
        <img src="{{ asset('assets/Icon/FNB.svg') }}" alt="" class="pesanan-selesai-heading-icon" aria-hidden="true">
        <div class="pesanan-selesai-heading-text">
            <h1 class="pesanan-selesai-heading-title">Pesanan F &amp; B</h1>
            <p class="pesanan-selesai-heading-subtitle">Kelola pesanan makanan dan minuman dari pelanggan</p>
        </div>
    </div>


    <!-- STATUS BANNER: Selesai -->
    <div class="pesanan-selesai-status-banner">

        <div class="pesanan-selesai-banner-left">

            <div class="pesanan-selesai-banner-icon-wrapper pesanan-selesai-status-icon">
                <img src="{{ asset('assets/Icon/FNB.svg') }}" alt="" class="pesanan-selesai-banner-icon" aria-hidden="true">
            </div>

            <div class="pesanan-selesai-banner-text">
                <p class="pesanan-selesai-banner-title">Pesanan Selesai</p>
                <p class="pesanan-selesai-banner-subtitle">Pesanan sudah di konfirmasi dan sedang disiapkan</p>
            </div>

        </div>

        <span class="pesanan-selesai-banner-badge">Selesai</span>

    </div>


    <!-- CONTENT GRID -->
    <div class="pesanan-selesai-info-grid">

        <!-- KOLOM KIRI -->
        <div class="pesanan-selesai-col-left">

            <!-- Informasi Pesanan -->
            <div class="pesanan-selesai-info-card">

                <div class="pesanan-selesai-card-header">
                    <img src="{{ asset('assets/Icon/Note.svg') }}" alt="" class="pesanan-selesai-card-icon" aria-hidden="true">
                    <h2 class="pesanan-selesai-card-title">Informasi Pesanan</h2>
                </div>

                <div class="pesanan-selesai-info-body">

                    <div class="pesanan-selesai-info-fields">

                        <div class="pesanan-selesai-field">
                            <span class="pesanan-selesai-field-label">ID Pesanan</span>
                            <span class="pesanan-selesai-field-value">FNB-17</span>
                        </div>

                        <div class="pesanan-selesai-field">
                            <span class="pesanan-selesai-field-label">Tanggal &amp; Waktu</span>
                            <span class="pesanan-selesai-field-value">10 Okt 2026, 14:10</span>
                        </div>

                        <div class="pesanan-selesai-field">
                            <span class="pesanan-selesai-field-label">Pelanggan</span>
                            <span class="pesanan-selesai-field-value">Kimi Antonelli</span>
                        </div>

                        <div class="pesanan-selesai-field">
                            <span class="pesanan-selesai-field-label">Meja / Unit</span>
                            <span class="pesanan-selesai-field-value">TV 1</span>
                        </div>

                    </div>

                    <div class="pesanan-selesai-info-divider" aria-hidden="true"></div>

                    <div class="pesanan-selesai-info-notes">
                        <span class="pesanan-selesai-field-label">Catatan</span>
                        <span class="pesanan-selesai-notes-value">-</span>
                    </div>

                </div>

            </div>


            <!-- Rincian Menu -->
            <div class="pesanan-selesai-menu-card">

                <div class="pesanan-selesai-card-header">
                    <img src="{{ asset('assets/Icon/FNB.svg') }}" alt="" class="pesanan-selesai-card-icon" aria-hidden="true">
                    <h2 class="pesanan-selesai-card-title">Rincian Menu</h2>
                </div>

                <div class="pesanan-selesai-table-wrapper">
                    <table class="pesanan-selesai-table">
                        <thead>
                            <tr>
                                <th class="pesanan-selesai-th pesanan-selesai-th--no">No</th>
                                <th class="pesanan-selesai-th pesanan-selesai-th--menu">Menu</th>
                                <th class="pesanan-selesai-th pesanan-selesai-th--jumlah">Jumlah</th>
                                <th class="pesanan-selesai-th pesanan-selesai-th--harga">Harga</th>
                                <th class="pesanan-selesai-th pesanan-selesai-th--subtotal">SubTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="pesanan-selesai-tr">
                                <td class="pesanan-selesai-td pesanan-selesai-td--center">1</td>
                                <td class="pesanan-selesai-td">Indomie Goreng</td>
                                <td class="pesanan-selesai-td pesanan-selesai-td--center">4</td>
                                <td class="pesanan-selesai-td">Rp 5000</td>
                                <td class="pesanan-selesai-td pesanan-selesai-td--right">Rp 20.000</td>
                            </tr>
                            <tr class="pesanan-selesai-tr">
                                <td class="pesanan-selesai-td pesanan-selesai-td--center">2</td>
                                <td class="pesanan-selesai-td">Indomie Rendang</td>
                                <td class="pesanan-selesai-td pesanan-selesai-td--center">5</td>
                                <td class="pesanan-selesai-td">Rp 5000</td>
                                <td class="pesanan-selesai-td pesanan-selesai-td--right">Rp 25.000</td>
                            </tr>
                            <tr class="pesanan-selesai-tr">
                                <td class="pesanan-selesai-td pesanan-selesai-td--center">3</td>
                                <td class="pesanan-selesai-td">Le Mineral</td>
                                <td class="pesanan-selesai-td pesanan-selesai-td--center">6</td>
                                <td class="pesanan-selesai-td">Rp 3000</td>
                                <td class="pesanan-selesai-td pesanan-selesai-td--right">Rp 18.000</td>
                            </tr>
                            <tr class="pesanan-selesai-tr">
                                <td class="pesanan-selesai-td pesanan-selesai-td--center">4</td>
                                <td class="pesanan-selesai-td">Teh Pucuk</td>
                                <td class="pesanan-selesai-td pesanan-selesai-td--center">2</td>
                                <td class="pesanan-selesai-td">Rp 5000</td>
                                <td class="pesanan-selesai-td pesanan-selesai-td--right">Rp 10.000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="pesanan-selesai-tfoot-row">
                                <td colspan="4" class="pesanan-selesai-tfoot-label">Total Pesanan</td>
                                <td class="pesanan-selesai-tfoot-total">Rp 73.000</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>


        <!-- KOLOM KANAN -->
        <div class="pesanan-selesai-col-right">

            <!-- Status Pembayaran -->
            <div class="pesanan-selesai-payment-card">

                <div class="pesanan-selesai-card-header">
                    <img src="{{ asset('assets/Icon/Wallet.svg') }}" alt="" class="pesanan-selesai-card-icon" aria-hidden="true">
                    <h2 class="pesanan-selesai-card-title">Status Pembayaran</h2>
                </div>

                <div class="pesanan-selesai-payment-fields">

                    <div class="pesanan-selesai-payment-row">
                        <span class="pesanan-selesai-payment-label">Metode Pembayaran</span>
                        <span class="pesanan-selesai-payment-sep">:</span>
                        <span class="pesanan-selesai-payment-value">QRIS</span>
                    </div>

                    <div class="pesanan-selesai-payment-row">
                        <span class="pesanan-selesai-payment-label">Status Pembayaran</span>
                        <span class="pesanan-selesai-payment-sep">:</span>
                        <span class="pesanan-selesai-payment-value">Berhasil</span>
                    </div>

                    <div class="pesanan-selesai-payment-row">
                        <span class="pesanan-selesai-payment-label">Total Pembayaran</span>
                        <span class="pesanan-selesai-payment-sep">:</span>
                        <span class="pesanan-selesai-payment-value">Rp 73.000</span>
                    </div>

                </div>

            </div>


            <!-- Informasi Penyelesaian -->
            <div class="pesanan-selesai-completion-card">

                <h2 class="pesanan-selesai-completion-title">Informasi Penyelesaian</h2>

                <div class="pesanan-selesai-completion-rows">

                    <div class="pesanan-selesai-completion-row">
                        <span class="pesanan-selesai-completion-label">Waktu Selesai</span>
                        <span class="pesanan-selesai-completion-sep">:</span>
                        <span class="pesanan-selesai-completion-value">10 Okt 2026, 14:06</span>
                    </div>

                    <div class="pesanan-selesai-completion-row">
                        <span class="pesanan-selesai-completion-label">Dicatat Oleh</span>
                        <span class="pesanan-selesai-completion-sep">:</span>
                        <span class="pesanan-selesai-completion-value">Admin</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</main>
@endsection

@section('admin-overlays')
<script src="{{ asset('js/admin/pesanan-selesai.js') }}"></script>
@endsection
