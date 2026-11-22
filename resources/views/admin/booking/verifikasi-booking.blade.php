@extends('layouts.admin')

@section('admin-head')
<title>Verifikasi Booking - Booking PS | IB Gaming</title>

<link rel="stylesheet" href="{{ asset('css/admin/booking/verifikasi-booking.css') }}">
@endsection

@section('admin-content')
<!-- =================================================
                 CONTENT
            ================================================== -->
           <main class="admin-content booking-verification-content">

    <!-- =====================================================
         PAGE HEADER
         ===================================================== -->

    <x-admin.booking.verifikasi-booking.booking-page-header />


    <!-- =====================================================
         VERIFICATION TABS
         ===================================================== -->

    <nav
        class="booking-verification-tabs"
        aria-label="Verifikasi Booking PS"
    >

        <!-- VERIFIKASI AKUN -->
        <a
            href="{{ route('admin.booking.verifikasi-akun') }}"
            class="booking-verification-tab"
        >

            <img
                src="{{ asset('assets/Icon/User.svg') }}"
                alt=""
                aria-hidden="true"
            >

            <span>Verifikasi Akun</span>

        </a>


        <!-- VERIFIKASI BOOKING - ACTIVE -->
        <a
            href="{{ route('admin.booking.verifikasi-booking') }}"
            class="booking-verification-tab active"
            aria-current="page"
        >

            <img
                src="{{ asset('assets/Icon/Keranjang.svg') }}"
                alt=""
                aria-hidden="true"
            >

            <span>Verifikasi Booking</span>

        </a>

    </nav>


    <!-- =====================================================
         SUMMARY CARDS
         ===================================================== -->

    <x-admin.booking.verifikasi-booking.booking-summary-grid />


    <!-- =====================================================
         TABLE CARD
         ===================================================== -->

    <x-admin.booking.verifikasi-booking.booking-account-table-card />

</main>
@endsection
