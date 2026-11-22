@extends('layouts.admin')

@section('admin-head')
<title>Detail Verifikasi (Menunggu) - Booking PS | IB Gaming</title>

<!-- MENUNGGU VERIFIKASI -->
<link rel="stylesheet" href="{{ asset('css/admin/booking/menunggu-verifikasi.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content menunggu-verifikasi-main">

    <!-- BREADCRUMB -->
    <nav class="menunggu-verifikasi-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('admin.booking.verifikasi-akun') }}" class="menunggu-verifikasi-breadcrumb-back" aria-label="Kembali ke Booking PS">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="menunggu-verifikasi-breadcrumb-back-icon" aria-hidden="true">
        </a>

        <a href="{{ route('admin.booking.verifikasi-akun') }}" class="menunggu-verifikasi-breadcrumb-parent">Booking PS</a>

        <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="menunggu-verifikasi-breadcrumb-sep" aria-hidden="true">

        <span class="menunggu-verifikasi-breadcrumb-current">Detail Verifikasi Akun</span>
    </nav>


    <!-- PAGE HEADER -->
    <div class="menunggu-verifikasi-header">

        <div class="menunggu-verifikasi-heading">
            <img src="{{ asset('assets/Icon/Keranjang.svg') }}" alt="" class="menunggu-verifikasi-heading-icon" aria-hidden="true">
            <div class="menunggu-verifikasi-heading-text">
                <h1 class="menunggu-verifikasi-heading-title">Detail Verifikasi (Menunggu)</h1>
                <p class="menunggu-verifikasi-heading-subtitle">Informasi Pengajuan Booking PlayStation</p>
            </div>
        </div>

        <a href="{{ route('admin.booking.verifikasi-akun') }}" class="menunggu-verifikasi-back-button" id="menungguVerifikasiKembali">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="menunggu-verifikasi-back-icon" aria-hidden="true">
            <span>Kembali</span>
        </a>

    </div>


    <!-- CONTENT GRID -->
    <div class="menunggu-verifikasi-grid">

        <!-- ===== KOLOM KIRI ===== -->
        <div class="menunggu-verifikasi-col-left">

            <!-- CARD UTAMA -->
            <x-admin.booking.menunggu-verifikasi.menunggu-verifikasi-card />


            <!-- CATATAN ADMIN -->
            <x-admin.booking.menunggu-verifikasi.menunggu-verifikasi-notes />

        </div>
        <!-- END KOLOM KIRI -->


        <!-- ===== KOLOM KANAN ===== -->
        <x-admin.booking.menunggu-verifikasi.menunggu-verifikasi-col-right />
        <!-- END KOLOM KANAN -->

    </div>
    <!-- END GRID -->


    <!-- AKSI VERIFIKASI -->
    <x-admin.booking.menunggu-verifikasi.menunggu-verifikasi-action />

</main>
@endsection

@section('admin-overlays')
<script src="{{ asset('js/admin/booking/menunggu-verifikasi.js') }}"></script>
@endsection
