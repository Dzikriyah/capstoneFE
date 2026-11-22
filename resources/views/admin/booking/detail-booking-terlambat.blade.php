@extends('layouts.admin')

@section('admin-head')
<title>Detail Booking Terlambat - Booking PS | IB Gaming</title>

<!-- DETAIL BOOKING TERLAMBAT -->
<link rel="stylesheet" href="{{ asset('css/admin/booking/detail-booking-terlambat.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content booking-terlambat-main">

    <!-- BREADCRUMB -->
    <nav class="booking-terlambat-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="booking-terlambat-breadcrumb-back" aria-label="Kembali ke Booking PS">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="booking-terlambat-breadcrumb-back-icon" aria-hidden="true">
        </a>

        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="booking-terlambat-breadcrumb-parent">Booking PS</a>

        <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="booking-terlambat-breadcrumb-sep" aria-hidden="true">

        <span class="booking-terlambat-breadcrumb-current">Detail Verifikasi Booking</span>
    </nav>


    <!-- PAGE HEADER -->
    <div class="booking-terlambat-heading">

        <div class="booking-terlambat-heading-left">
            <img src="{{ asset('assets/Icon/Keranjang.svg') }}" alt="" class="booking-terlambat-heading-icon" aria-hidden="true">
            <div class="booking-terlambat-heading-text">
                <h1 class="booking-terlambat-heading-title">Booking PS - Detail Terlambat</h1>
                <p class="booking-terlambat-heading-subtitle">Kelola Pengajuan Booking Playstation Pelanggan</p>
            </div>
        </div>

        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="booking-terlambat-back-button">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="booking-terlambat-back-icon" aria-hidden="true">
            <span>Kembali</span>
        </a>

    </div>


    <!-- STATUS BANNER -->
    <x-admin.booking.detail-booking-terlambat.booking-terlambat-status-card />


    <!-- CONTENT GRID (2 KOLOM) -->
    <div class="booking-terlambat-grid">

        <!-- ===== KOLOM KIRI ===== -->
        <div class="booking-terlambat-col-left">

            <!-- CARD 1: INFORMASI BOOKING -->
            <x-admin.booking.detail-booking-terlambat.booking-terlambat-card />


            <!-- CARD 3: DATA PELANGGAN -->
            <x-admin.booking.detail-booking-terlambat.booking-terlambat-card-2 />

        </div>
        <!-- END KOLOM KIRI -->


        <!-- ===== KOLOM KANAN ===== -->
        <div class="booking-terlambat-col-right">

            <!-- CARD 2: UNIT YANG DISEWA -->
            <x-admin.booking.detail-booking-terlambat.booking-terlambat-card-3 />


            <!-- CARD 4: RINCIAN BIAYA -->
            <x-admin.booking.detail-booking-terlambat.booking-terlambat-card-4 />


            <!-- CARD 5: DENDA KETERLAMBATAN -->
            <x-admin.booking.detail-booking-terlambat.booking-terlambat-card-5 />

        </div>
        <!-- END KOLOM KANAN -->

    </div>
    <!-- END GRID -->

</main>
@endsection
