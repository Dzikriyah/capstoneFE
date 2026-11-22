@extends('layouts.admin')

@section('admin-head')
<title>Detail Verifikasi Booking - Booking PS | IB Gaming</title>

<!-- DETAIL VERIFIKASI BOOKING -->
<link rel="stylesheet" href="{{ asset('css/admin/booking/detail-verifikasi-booking.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content verifikasi-booking-main">

    <!-- BREADCRUMB -->
    <nav class="verifikasi-booking-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="verifikasi-booking-breadcrumb-back" aria-label="Kembali ke Booking PS">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="verifikasi-booking-breadcrumb-back-icon" aria-hidden="true">
        </a>

        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="verifikasi-booking-breadcrumb-parent">Booking PS</a>

        <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="verifikasi-booking-breadcrumb-sep" aria-hidden="true">

        <span class="verifikasi-booking-breadcrumb-current">Detail Verifikasi Booking</span>
    </nav>


    <!-- PAGE HEADER -->
    <div class="verifikasi-booking-heading">

        <div class="verifikasi-booking-heading-left">
            <img src="{{ asset('assets/Icon/Keranjang.svg') }}" alt="" class="verifikasi-booking-heading-icon" aria-hidden="true">
            <div class="verifikasi-booking-heading-text">
                <h1 class="verifikasi-booking-heading-title">Booking PS - Detail Verifikasi Booking</h1>
                <p class="verifikasi-booking-heading-subtitle">Kelola Pengajuan Booking Playstation Pelanggan</p>
            </div>
        </div>

        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="verifikasi-booking-back-button" id="verifikasiBookingKembali">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="verifikasi-booking-back-icon" aria-hidden="true">
            <span>Kembali</span>
        </a>

    </div>


    <!-- CONTENT GRID (2 KOLOM) -->
    <div class="verifikasi-booking-grid">

        <!-- ===== KOLOM KIRI ===== -->
        <div class="verifikasi-booking-col-left">

            <!-- CARD 1: INFORMASI BOOKING -->
            <x-admin.booking.detail-verifikasi-booking.verifikasi-booking-card />


            <!-- CARD 3: DATA PELANGGAN -->
            <x-admin.booking.detail-verifikasi-booking.verifikasi-booking-card-2 />


            <!-- CARD 5: BUKTI PEMBAYARAN -->
            <x-admin.booking.detail-verifikasi-booking.verifikasi-booking-card-3 />

        </div>
        <!-- END KOLOM KIRI -->


        <!-- ===== KOLOM KANAN ===== -->
        <div class="verifikasi-booking-col-right">

            <!-- CARD 2: UNIT YANG DISEWA -->
            <x-admin.booking.detail-verifikasi-booking.verifikasi-booking-card-4 />


            <!-- CARD 4: RINCIAN BIAYA -->
            <x-admin.booking.detail-verifikasi-booking.verifikasi-booking-card-5 />

        </div>
        <!-- END KOLOM KANAN -->

    </div>
    <!-- END GRID -->


    <!-- ACTION BUTTONS -->
    <div class="verifikasi-booking-action">

        <button type="button" class="verifikasi-booking-reject-button" id="verifikasiBookingTolak">
            <img src="{{ asset('assets/Icon/Close.svg') }}" alt="" class="verifikasi-booking-reject-icon" aria-hidden="true">
            <span>Tolak Booking</span>
        </button>

        <button type="button" class="verifikasi-booking-approve-button" id="verifikasiBookingSetujui">
            <span class="verifikasi-booking-approve-icon-wrap" aria-hidden="true">
                <img src="{{ asset('assets/Icon/Centang.svg') }}" alt="" class="verifikasi-booking-approve-icon">
            </span>
            <span>Setujui Booking</span>
        </button>

    </div>

</main>
@endsection

@section('admin-overlays')
<script src="{{ asset('js/admin/booking/detail-verifikasi-booking.js') }}"></script>
@endsection
