@extends('layouts.admin')

@section('admin-head')
<title>Detail Verifikasi Ditolak - IB Gaming</title>

<!-- PAGE CSS -->
<link rel="stylesheet" href="{{ asset('css/admin/booking/akun-ditolak.css') }}">
@endsection

@section('admin-content')
<!-- =================================================
     CONTENT
================================================== -->
<main class="akun-ditolak-main">

    <!-- BREADCRUMB -->
    <div class="akun-ditolak-breadcrumb">

        <a
            href="{{ route('admin.booking.verifikasi-akun') }}"
            class="akun-ditolak-breadcrumb-back"
        >
            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
            >
        </a>

        <span>Booking PS</span>

        <img
            src="{{ asset('assets/Icon/Arrow.svg') }}"
            alt=""
            class="akun-ditolak-breadcrumb-arrow"
        >

        <span class="akun-ditolak-breadcrumb-current">
            Detail Akun Ditolak
        </span>

    </div>


    <!-- PAGE HEADING -->
    <div class="akun-ditolak-heading">

        <div class="akun-ditolak-heading-left">

            <img
                src="{{ asset('assets/Icon/Keranjang.svg') }}"
                alt=""
                class="akun-ditolak-heading-icon"
            >

            <div>

                <h1>
                    Detail Verifikasi (Ditolak)
                </h1>

                <p>
                    Informasi Pengajuan Booking PlayStation
                </p>

            </div>

        </div>


            <a
                href="{{ route('admin.booking.verifikasi-akun') }}"
                class="akun-ditolak-back-button"
            >

                <img
                    src="{{ asset('assets/Icon/Panah.svg') }}"
                    alt=""
                >

                <span>Kembali</span>

            </a>

    </div>


    <!-- =================================================
         CONTENT GRID
    ================================================== -->
    <div class="akun-ditolak-layout">

        <!-- =============================================
             LEFT CONTENT
        ============================================== -->
        <div class="akun-ditolak-left">


            <!-- =========================================
                 VERIFICATION CARD
            ========================================== -->
            <x-admin.booking.akun-ditolak.akun-ditolak-verification-card />


            <!-- =========================================
                 CATATAN ADMIN
            ========================================== -->
            <x-admin.booking.akun-ditolak.akun-ditolak-note-card />

        </div>


        <!-- =============================================
             RIGHT SIDEBAR
        ============================================== -->
        <x-admin.booking.akun-ditolak.akun-ditolak-right />

    </div>

</main>
@endsection
