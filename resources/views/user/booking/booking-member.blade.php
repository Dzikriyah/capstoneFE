@extends('layouts.customer')

@section('head')
<meta
    name="description"
    content="Pengajuan anggota IB Gaming untuk melakukan booking PlayStation."
>

<title>Pengajuan Anggota - IB Gaming</title>


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
    href="{{ asset('css/user/booking/booking-member.css') }}"
>
@endsection

@section('content')
<div class="dashboard-pelanggan">


    <!-- =====================================================
         HEADER
         Sama seperti halaman F&B.
         Hanya Booking PS yang menjadi active.
    ====================================================== -->

   <x-user.booking.booking-member.header />



    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="booking-content">


        <!-- =================================================
             HERO
             Struktur sama dengan halaman F&B
             Gambar & teks disesuaikan untuk Booking
        ================================================== -->

        <x-user.booking.booking-member.booking-hero />



        <!-- =================================================
             BOOKING BODY
        ================================================== -->

        <x-user.booking.booking-member.booking-layout />

    </main>



    <!-- =====================================================
         FOOTER
         Sama seperti halaman F&B
    ====================================================== -->

    <x-user.shared.footer />

</div>



<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script src="{{ asset('js/global.js') }}"></script>

<script src="{{ asset('js/user/booking/booking-member.js') }}"></script>
@endsection
