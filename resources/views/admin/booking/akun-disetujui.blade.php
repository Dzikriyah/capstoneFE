@extends('layouts.admin')

@section('admin-head')
<title>Detail Verifikasi (Disetujui) - Booking PS | IB Gaming</title>

<!-- AKUN DISETUJUI -->
<link rel="stylesheet" href="{{ asset('css/admin/booking/akun-disetujui.css') }}">
@endsection

@section('admin-content')
<!-- CONTENT -->
<main class="admin-content akun-disetujui-main">

    <!-- BREADCRUMB -->
    <nav class="akun-disetujui-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('admin.booking.verifikasi-akun') }}" class="akun-disetujui-breadcrumb-back" aria-label="Kembali ke Booking PS">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="akun-disetujui-breadcrumb-back-icon" aria-hidden="true">
        </a>

        <a href="{{ route('admin.booking.verifikasi-akun') }}" class="akun-disetujui-breadcrumb-parent">Booking PS</a>

        <img src="{{ asset('assets/Icon/Arrow.svg') }}" alt="" class="akun-disetujui-breadcrumb-sep" aria-hidden="true">

        <span class="akun-disetujui-breadcrumb-current">Detail Akun Disetujui</span>
    </nav>


    <!-- PAGE HEADER -->
    <div class="akun-disetujui-header">

        <div class="akun-disetujui-heading">
            <img src="{{ asset('assets/Icon/Keranjang.svg') }}" alt="" class="akun-disetujui-heading-icon" aria-hidden="true">
            <div class="akun-disetujui-heading-text">
                <h1 class="akun-disetujui-heading-title">Detail Verifikasi (Disetujui)</h1>
                <p class="akun-disetujui-heading-subtitle">Informasi Pengajuan Booking PlayStation</p>
            </div>
        </div>

        <a href="{{ route('admin.booking.verifikasi-akun') }}" class="akun-disetujui-back-button" id="akunDisetujuiKembali">
            <img src="{{ asset('assets/Icon/Panah.svg') }}" alt="" class="akun-disetujui-back-icon" aria-hidden="true">
            <span>Kembali</span>
        </a>

    </div>


    <!-- CONTENT GRID -->
    <div class="akun-disetujui-grid">

        <!-- ===== KOLOM KIRI ===== -->
        <div class="akun-disetujui-col-left">

            <!-- CARD UTAMA -->
            <x-admin.booking.akun-disetujui.akun-disetujui-card />

        </div>
        <!-- END KOLOM KIRI -->


        <!-- ===== KOLOM KANAN ===== -->
        <x-admin.booking.akun-disetujui.akun-disetujui-col-right />
        <!-- END KOLOM KANAN -->

    </div>
    <!-- END GRID -->

</main>
@endsection

@section('admin-overlays')
<script src="{{ asset('js/admin/booking/akun-disetujui.js') }}"></script>
@endsection
