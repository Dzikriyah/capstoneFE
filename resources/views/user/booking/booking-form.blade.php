@extends('layouts.prototype')

@section('head')
<meta
    name="description"
    content="Form booking PlayStation IB Gaming."
>

<title>Booking PlayStation - IB Gaming</title>


<!-- =====================================================
     GLOBAL CSS
====================================================== -->

<link
    rel="stylesheet"
    href="{{ asset('css/global.css') }}"
>


<!-- =====================================================
     SHARED CSS
     Header & Footer
====================================================== -->

<link
    rel="stylesheet"
    href="{{ asset('css/user/shared.css') }}"
>


<!-- =====================================================
     BOOKING CSS
     Hanya untuk isi halaman booking
====================================================== -->

<link
    rel="stylesheet"
    href="{{ asset('css/user/booking/booking-form.css') }}"
>
@endsection

@section('content')
<div class="dashboard-pelanggan">


    <!-- =====================================================
         HEADER
         COPY DARI booking-member.html
         Jangan diubah
    ====================================================== -->

    <x-user.booking.booking-form.header />



    <!-- =====================================================
         MAIN
         HANYA BAGIAN INI YANG BERUBAH
    ====================================================== -->

    <main class="booking-content">


        <!-- =================================================
             HERO
             Struktur mengikuti booking-member.html
        ================================================== -->

        <x-user.booking.booking-form.booking-hero />



        <!-- =================================================
             BOOKING BODY
        ================================================== -->

        <x-user.booking.booking-form.booking-layout />

    </main>



    <!-- =====================================================
         FOOTER
         COPY 100% DARI booking-member.html
         JANGAN DIUBAH
    ====================================================== -->

    <x-user.shared.footer />

</div>



<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script src="{{ asset('js/global.js') }}"></script>

<script src="{{ asset('js/user/booking/booking-form.js') }}"></script>
@endsection
