@extends('layouts.admin')

@section('admin-head')
<title>Detail Booking Disetujui - Booking PS | IB Gaming</title>

<!-- DETAIL BOOKING DISETUJUI -->
<link rel="stylesheet" href="{{ asset('css/admin/booking/detail-booking-disetujui.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content booking-disetujui-main">

    <!-- BREADCRUMB -->
    <nav class="booking-disetujui-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="booking-disetujui-breadcrumb-back" aria-label="Kembali ke Booking PS">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="booking-disetujui-breadcrumb-back-icon" aria-hidden="true">
        </a>

        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="booking-disetujui-breadcrumb-parent">Booking PS</a>

        <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="booking-disetujui-breadcrumb-sep" aria-hidden="true">

        <span class="booking-disetujui-breadcrumb-current">Detail Verifikasi Booking</span>
    </nav>


    <!-- PAGE HEADER -->
    <div class="booking-disetujui-heading">

        <div class="booking-disetujui-heading-left">
            <img src="{{ asset('assets/Icon/Keranjang.svg') }}" alt="" class="booking-disetujui-heading-icon" aria-hidden="true">
            <div class="booking-disetujui-heading-text">
                <h1 class="booking-disetujui-heading-title">Booking PS - Detail Booking Disetujui</h1>
                <p class="booking-disetujui-heading-subtitle">Kelola Pengajuan Booking Playstation Pelanggan</p>
            </div>
        </div>

        <a href="{{ route('admin.booking.verifikasi-booking') }}" class="booking-disetujui-back-button">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="booking-disetujui-back-icon" aria-hidden="true">
            <span>Kembali</span>
        </a>

    </div>


    <!-- STATUS BANNER -->
    <x-admin.booking.detail-booking-disetujui.booking-disetujui-status-card />


    <!-- CONTENT GRID (2 KOLOM) -->
    <div class="booking-disetujui-grid">

        <!-- ===== KOLOM KIRI ===== -->
        <div class="booking-disetujui-col-left">

            <!-- CARD 1: INFORMASI BOOKING -->
            <x-admin.booking.detail-booking-disetujui.booking-disetujui-card />


            <!-- CARD 3: DATA PELANGGAN -->
            <x-admin.booking.detail-booking-disetujui.booking-disetujui-card-2 />


            <!-- CARD 5: BUKTI PEMBAYARAN -->
            <x-admin.booking.detail-booking-disetujui.booking-disetujui-card-3 />

        </div>
        <!-- END KOLOM KIRI -->


        <!-- ===== KOLOM KANAN ===== -->
        <div class="booking-disetujui-col-right">

            <!-- CARD 2: UNIT YANG DISEWA -->
            <x-admin.booking.detail-booking-disetujui.booking-disetujui-card-4 />


            <!-- CARD 4: RINCIAN BIAYA -->
            <x-admin.booking.detail-booking-disetujui.booking-disetujui-card-5 />

        </div>
        <!-- END KOLOM KANAN -->

    </div>
    <!-- END GRID -->

</main>
@endsection
