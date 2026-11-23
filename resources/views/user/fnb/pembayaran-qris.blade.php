@extends('layouts.customer')

@section('head')
<title>Dashboard Pelanggan - Pembayaran QRIS</title>

<!-- Global -->
<link rel="stylesheet" href="{{ asset('css/global.css') }}">

<!-- Shared Header & Footer -->
<link rel="stylesheet" href="{{ asset('css/user/shared.css') }}">

<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('css/user/fnb/pembayaran-qris.css') }}">
@endsection

@section('content')
<div class="dashboard-pelanggan">

    <!-- =====================================================
         HEADER
    ====================================================== -->
    <x-user.fnb.pembayaran-qris.header />


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="fnb-content">


        <!-- =================================================
             HERO
        ================================================== -->

        <x-user.fnb.pembayaran-qris.fnb-hero />


        <!-- =================================================
             PAYMENT SECTION
        ================================================== -->

        <x-user.fnb.pembayaran-qris.qris-payment-section />


        <!-- =================================================
             PAYMENT INFORMATION
        ================================================== -->

        <x-user.fnb.pembayaran-qris.payment-after-note />


        <!-- =================================================
             BACK BUTTON
        ================================================== -->

        <div class="qris-back-wrapper">

            <a
                href="{{ route('user.fnb.metode-pembayaran') }}"
                class="qris-back-button"
            >
                Kembali
            </a>

        </div>

    </main>


    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <x-user.shared.footer-2 />

</div>


<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script src="{{ asset('js/global.js') }}"></script>

<script src="{{ asset('js/user/fnb/pembayaran-qris.js') }}"></script>
@endsection
