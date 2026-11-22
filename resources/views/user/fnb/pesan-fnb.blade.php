@extends('layouts.prototype')

@section('head')
<meta
        name="description"
        content="Pesan makanan dan minuman di IB Gaming."
    >

    <title>Pesan FNB - IB Gaming</title>

    <!-- Global CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('css/global.css') }}"
    >

    <link
    rel="stylesheet"
    href="{{ asset('css/user/shared.css') }}"
>

    <!-- CSS khusus halaman F&B -->
    <link
        rel="stylesheet"
        href="{{ asset('css/user/fnb/pesan-fnb.css') }}"
    >
@endsection

@section('content')
<div class="dashboard-pelanggan">

       <!-- =====================================================
     HEADER
     ====================================================== -->

<x-user.fnb.pesan-fnb.header />


        <!-- =====================================================
             MAIN CONTENT
        ====================================================== -->

        <main class="fnb-content">


            <!-- =================================================
                 HERO SECTION
            ================================================== -->

            <x-user.fnb.pesan-fnb.fnb-hero />


            <!-- =================================================
                 F&B ORDER AREA
            ================================================== -->

            <x-user.fnb.pesan-fnb.fnb-order-section />

        </main>


        <!-- =====================================================
             FOOTER
             Footer tetap mengikuti footer pelanggan yang sudah final.
        ====================================================== -->

        <x-user.shared.footer-4 />

    </div>


     <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/user/fnb/pesan-fnb.js') }}"></script>
@endsection
