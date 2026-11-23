@extends('layouts.customer')

@section('head')
<title>Dashboard Pelanggan - Pesan F&B (Metode Pembayaran)</title>

<!-- Global CSS -->
<link rel="stylesheet" href="{{ asset('css/global.css') }}">

<!-- Shared Header & Footer -->
<link rel="stylesheet" href="{{ asset('css/user/shared.css') }}">

<!-- Metode Pembayaran CSS -->
<link rel="stylesheet" href="{{ asset('css/user/booking/metode-pembayaran.css') }}">
@endsection

@section('content')
<div class="dashboard-pelanggan">


    <!-- =====================================================
         HEADER
         Header sama dengan halaman Pesan F&B
         dan Lanjut Pemesanan
    ====================================================== -->

   <x-user.booking.metode-pembayaran.header />



    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="fnb-content">


        <!-- =================================================
             HERO SECTION
        ================================================== -->

        <x-user.booking.metode-pembayaran.fnb-hero />



        <!-- =================================================
             PAYMENT AREA
        ================================================== -->

        <x-user.booking.metode-pembayaran.payment-section />


    </main>



    <!-- =====================================================
         FOOTER
         Footer sama dengan halaman lainnya
    ====================================================== -->

    <x-user.shared.footer />


</div>


<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script src="{{ asset('js/global.js') }}"></script>

<script src="{{ asset('js/user/booking/metode-pembayaran.js') }}"></script>
@endsection
