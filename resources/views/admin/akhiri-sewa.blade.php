@extends('layouts.admin')

@section('admin-head')
<script src="{{ asset('js/admin/akhiri-sewa.js') }}" defer></script>
<title>IB Gaming - Admin</title>

<link rel="stylesheet" href="{{ asset('css/admin/sewa-digunakan.css') }}">


<link rel="stylesheet" href="{{ asset('css/admin/akhiri-sewa.css') }}">
@endsection

@section('admin-content')
<!-- =================================================
                 CONTENT

                 KONTEN HALAMAN DITARUH DI SINI
            ================================================== -->
            <main class="sewa-digunakan-main">

    <!-- =========================
         PAGE HEADING
    ========================== -->
    <div class="sewa-digunakan-heading">

        <div class="sewa-digunakan-heading-left">

            <img
                src="{{ asset('assets/Icon/Game.svg') }}"
                alt=""
                class="sewa-digunakan-heading-icon"
            >

            <div class="sewa-digunakan-heading-text">
                <h1>Detail Sewa PlayStation Aktif</h1>
                <p>Informasi Penyewaan Playstation yang sedang berlangsung</p>
            </div>

        </div>


        <!-- BUTTON KEMBALI -->
        <a href="{{ route('admin.sewa-ps') }}" class="sewa-digunakan-back-button">

            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
                class="sewa-digunakan-back-icon"
            >

            <span>Kembali</span>

        </a>

    </div>


    <!-- =========================
         BREADCRUMB
    ========================== -->
    <div class="sewa-digunakan-breadcrumb">

        <a href="{{ route('admin.sewa-ps') }}" class="sewa-digunakan-breadcrumb-back">

            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
                class="sewa-digunakan-breadcrumb-back-icon"
            >

        </a>

        <a href="{{ route('admin.sewa-ps') }}" class="sewa-digunakan-breadcrumb-text">
            Booking PS
        </a>

        <img
            src="{{ asset('assets/Icon/Arrow.svg') }}"
            alt=""
            class="sewa-digunakan-breadcrumb-arrow"
        >

        <span class="sewa-digunakan-breadcrumb-current">
            Detail Booking Digunakan
        </span>

    </div>


    <!-- =========================
         MAIN CONTAINER
    ========================== -->
    <x-admin.akhiri-sewa.sewa-digunakan-container />

</main>
@endsection

@section('admin-overlays')
<!-- =========================================================
     POPUP AKHIRI SEWA
========================================================= -->

<div class="akhiri-sewa-overlay">

    <div class="akhiri-sewa-popup">

        <!-- =====================================================
             HEADER POPUP
        ====================================================== -->
        <div class="akhiri-sewa-header">

            <div class="akhiri-sewa-header-left">

                <div class="akhiri-sewa-success-icon">
                    <img
                        src="{{ asset('assets/Icon/Centang.svg') }}"
                        alt=""
                    >
                </div>

                <div class="akhiri-sewa-header-text">

                    <h2>Sewa Berhasil Diselesaikan</h2>

                    <p>
                        Sewa berhasil diselesaikan
                    </p>

                </div>

            </div>


            <!-- TOMBOL CLOSE -->
            <button
                type="button"
                class="akhiri-sewa-close"
                aria-label="Tutup"
            >
                <img
                    src="{{ asset('assets/Icon/Close.svg') }}"
                    alt=""
                >
            </button>

        </div>


        <!-- =====================================================
             ISI POPUP
        ====================================================== -->
        <div class="akhiri-sewa-content">


            <!-- =================================================
                 KOLOM KIRI
            ================================================== -->
            <div class="akhiri-sewa-left">


                <!-- INFORMASI PELANGGAN -->
                <div class="akhiri-sewa-info-card">

                    <div class="akhiri-sewa-card-title">

                        <div class="akhiri-sewa-small-icon">
                            <img
                                src="{{ asset('assets/Icon/User.svg') }}"
                                alt=""
                            >
                        </div>

                        <h3>
                            Informasi Pelanggan
                        </h3>

                    </div>


                    <div class="akhiri-sewa-info-row">
                        <span>Nama Pelanggan</span>
                        <strong>Kimi Antonelli</strong>
                    </div>

                    <div class="akhiri-sewa-info-row">
                        <span>No Telepon</span>
                        <strong>081234567890</strong>
                    </div>

                </div>


                <!-- INFORMASI UNIT PS -->
                <div class="akhiri-sewa-info-card">

                    <div class="akhiri-sewa-card-title">

                        <div class="akhiri-sewa-small-icon">
                            <img
                                src="{{ asset('assets/Icon/Game.svg') }}"
                                alt=""
                            >
                        </div>

                        <h3>
                            Informasi Unit PS
                        </h3>

                    </div>


                    <div class="akhiri-sewa-unit-name">
                        TV 2
                    </div>

                    <p class="akhiri-sewa-unit-type">
                        PS4
                    </p>

                </div>


                <!-- DETAIL PENYEWAAN -->
                <div class="akhiri-sewa-rental-card">

                    <div class="akhiri-sewa-card-title">

                        <div class="akhiri-sewa-small-icon">
                            <img
                                src="{{ asset('assets/Icon/Note.svg') }}"
                                alt=""
                            >
                        </div>

                        <h3>
                            Detail Penyewaan
                        </h3>

                    </div>


                    <div class="akhiri-sewa-rental-list">

                        <div class="akhiri-sewa-rental-row">
                            <span>No. Transaksi</span>
                            <strong>TRX-0018</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Tanggal Sewa</span>
                            <strong>10 Oktober 2026</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Jam Sewa</span>
                            <strong>14.00</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Total Durasi</span>
                            <strong>2 Jam</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Harga Per Jam</span>
                            <strong>Rp 8.000</strong>
                        </div>

                        <div class="akhiri-sewa-rental-row">
                            <span>Metode Pembayaran</span>
                            <strong>QRIS</strong>
                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 KOLOM KANAN - STRUK
            ================================================== -->
            <div class="akhiri-sewa-receipt">

                <div class="akhiri-sewa-receipt-inner">


                    <!-- LOGO -->
                    <img
                        src="{{ asset('assets/Icon/Logo.svg') }}"
                        alt="IB Gaming"
                        class="akhiri-sewa-receipt-logo"
                    >


                    <h3>
                        STRUK SEWA PLAYSTATION
                    </h3>

                    <p class="akhiri-sewa-receipt-transaction">
                        No. Transaksi: TRX-0018
                    </p>


                    <div class="akhiri-sewa-receipt-line"></div>


                    <!-- DETAIL STRUK -->
                    <div class="akhiri-sewa-receipt-list">

                        <div>
                            <span>Tanggal Sewa</span>
                            <strong>10 Oktober</strong>
                        </div>

                        <div>
                            <span>Waktu Mulai</span>
                            <strong>14:00</strong>
                        </div>

                        <div>
                            <span>Waktu Selesai</span>
                            <strong>16:00</strong>
                        </div>

                        <div>
                            <span>Durasi</span>
                            <strong>2 Jam</strong>
                        </div>

                    </div>


                    <div class="akhiri-sewa-receipt-divider"></div>


                    <div class="akhiri-sewa-receipt-list">

                        <div>
                            <span>Biaya Durasi Awal</span>
                            <strong>Rp 16.000</strong>
                        </div>

                        <div>
                            <span>Tambahan Durasi</span>
                            <strong>Rp 0</strong>
                        </div>

                    </div>


                    <!-- TOTAL -->
                    <div class="akhiri-sewa-total">

                        <span>Total Pembayaran</span>

                        <strong>
                            Rp 16.000
                        </strong>

                    </div>


                    <p class="akhiri-sewa-payment-method">
                        Metode Pembayaran : Tunai
                    </p>


                    <div class="akhiri-sewa-receipt-line"></div>


                    <p class="akhiri-sewa-thankyou">
                        Terima Kasih telah bermain di
                    </p>


                    <img
                        src="{{ asset('assets/Icon/Logo.svg') }}"
                        alt="IB Gaming"
                        class="akhiri-sewa-receipt-logo-bottom"
                    >

                </div>

            </div>

        </div>


        <!-- =====================================================
             FOOTER BUTTON
        ====================================================== -->
        <div class="akhiri-sewa-actions">

            <button
                type="button"
                class="akhiri-sewa-secondary-button"
            >
                Cetak Struk
            </button>

            <button
                type="button"
                class="akhiri-sewa-secondary-button"
            >
                Unduh PDF
            </button>

            <a
                href="{{ route('admin.dashboard-admin') }}"
                class="akhiri-sewa-primary-button"
            >
                Kembali Ke Dashboard
            </a>

        </div>

    </div>

</div>
@endsection
