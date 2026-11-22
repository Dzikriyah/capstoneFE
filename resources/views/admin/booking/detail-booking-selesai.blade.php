@extends('layouts.admin')

@section('admin-head')
<title>Detail Booking Selesai - Booking PS | IB Gaming</title>

<!-- DETAIL BOOKING SELESAI -->
<link rel="stylesheet" href="{{ asset('css/admin/booking/detail-booking-selesai.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content detail-booking-selesai-main">

    <!-- BREADCRUMB -->
    <nav class="detail-booking-selesai-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="detail-booking-selesai-breadcrumb-back" aria-label="Kembali ke Booking PS">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="detail-booking-selesai-breadcrumb-back-icon" aria-hidden="true">
        </a>

        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="detail-booking-selesai-breadcrumb-parent">Booking PS</a>

        <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="detail-booking-selesai-breadcrumb-sep" aria-hidden="true">

        <span class="detail-booking-selesai-breadcrumb-current">Detail Verifikasi Booking</span>
    </nav>


    <!-- PAGE HEADER -->
    <div class="detail-booking-selesai-heading">

        <div class="detail-booking-selesai-heading-left">
            <img src="{{ asset('assets/Icon/Keranjang.svg') }}" alt="" class="detail-booking-selesai-heading-icon" aria-hidden="true">
            <div class="detail-booking-selesai-heading-text">
                <h1 class="detail-booking-selesai-heading-title">Booking PS - Detail Booking Selesai</h1>
                <p class="detail-booking-selesai-heading-subtitle">Kelola Pengajuan Booking Playstation Pelanggan</p>
            </div>
        </div>

        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="detail-booking-selesai-back-button">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="detail-booking-selesai-back-icon" aria-hidden="true">
            <span>Kembali</span>
        </a>

    </div>


    <!-- STATUS BANNER -->
    <x-admin.booking.detail-booking-selesai.detail-booking-selesai-status-card />


    <!-- CONTENT GRID (2 KOLOM) -->
    <div class="detail-booking-selesai-grid">

        <!-- ===== KOLOM KIRI ===== -->
        <div class="detail-booking-selesai-col-left">

            <!-- CARD 1: INFORMASI BOOKING -->
            <x-admin.booking.detail-booking-selesai.detail-booking-selesai-card />


            <!-- CARD 3: DATA PELANGGAN -->
            <x-admin.booking.detail-booking-selesai.detail-booking-selesai-card-2 />

        </div>
        <!-- END KOLOM KIRI -->


        <!-- ===== KOLOM KANAN ===== -->
        <div class="detail-booking-selesai-col-right">

            <!-- CARD 2: UNIT YANG DISEWA -->
            <x-admin.booking.detail-booking-selesai.detail-booking-selesai-card-3 />


            <!-- CARD 4: RINCIAN BIAYA -->
            <x-admin.booking.detail-booking-selesai.detail-booking-selesai-card-4 />

        </div>
        <!-- END KOLOM KANAN -->

    </div>
    <!-- END GRID -->

</main>
@endsection
