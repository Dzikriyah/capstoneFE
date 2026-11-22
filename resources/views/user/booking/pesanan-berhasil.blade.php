@extends('layouts.prototype')

@section('head')
<title>Pesanan Berhasil - IB Gaming</title>

<!-- GLOBAL -->
<link rel="stylesheet" href="{{ asset('css/global.css') }}">

<!-- SHARED HEADER & FOOTER -->
<link rel="stylesheet" href="{{ asset('css/user/shared.css') }}">

<!-- PAGE CSS -->
<link rel="stylesheet" href="{{ asset('css/user/booking/pesanan-berhasil.css') }}">
@endsection

@section('content')
<div class="dashboard-pelanggan">

    <!-- =====================================================
         HEADER
    ====================================================== -->

    <x-user.booking.pesanan-berhasil.header />


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="fnb-content">

        <!-- =================================================
             HERO
        ================================================== -->

        <x-user.booking.pesanan-berhasil.fnb-hero />


        <!-- =================================================
             SUCCESS CONTENT
        ================================================== -->

        <x-user.booking.pesanan-berhasil.success-section />


        <!-- =================================================
             BACK BUTTON
        ================================================== -->

        <div class="success-back-wrapper">

            <a
                href="{{ route('user.home') }}"
                class="success-back-button"
            >

                <span>
                    Kembali ke Beranda
                </span>

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

<script src="{{ asset('js/user/fnb/pesanan-berhasil.js') }}"></script>
@endsection
