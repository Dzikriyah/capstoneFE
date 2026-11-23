@extends('layouts.customer')

@section('head')
<meta
    name="description"
    content="IB Gaming menyediakan pengalaman bermain PlayStation, makanan, dan minuman dalam suasana nyaman."
>

<title>IB Gaming - Dashboard Pelanggan</title>

<link
    rel="stylesheet"
    href="{{ asset('css/global.css') }}"
>

<link
    rel="stylesheet"
    href="{{ asset('css/user/home.css') }}"
>
@endsection

@section('content')
<div class="dashboard-pelanggan">


        <!-- ============================================
             HEADER / NAVBAR
        ============================================= -->

        <x-user.home.header />



        <!-- ============================================
             MAIN CONTENT
        ============================================= -->

        <main class="container">


            <!-- ========================================
                 HERO SECTION
            ========================================= -->

            <x-user.home.main-content />



            <!-- ========================================
                 BOOKING PLAYSTATION
            ========================================= -->

            <x-user.home.booking-playstation />



            <!-- ========================================
                 FOOD & BEVERAGE
            ========================================= -->

            <x-user.home.pesan-fnb />

        </main>



        <!-- ============================================
             FOOTER / VALUE
        ============================================= -->

        <x-user.shared.footer-3 />

    </div>

<script src="{{ asset('js/user/home.js') }}"></script>
@endsection
