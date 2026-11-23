@extends('layouts.customer')

@section('head')
<meta
    name="description"
    content="Detail pemesanan F&B di IB Gaming."
>

<title>Lanjut Pemesanan - IB Gaming</title>

<!-- Global CSS -->
<link
    rel="stylesheet"
    href="{{ asset('css/global.css') }}"
>

<!-- Shared Header & Footer -->
<link
    rel="stylesheet"
    href="{{ asset('css/user/shared.css') }}"
>

<!-- CSS khusus halaman Lanjut Pemesanan -->
<link
    rel="stylesheet"
    href="{{ asset('css/user/fnb/lanjut-pemesanan.css') }}"
>
@endsection

@section('content')
<div class="dashboard-pelanggan">


    <!-- =====================================================
         HEADER
    ====================================================== -->

    <x-user.fnb.lanjut-pemesanan.header />



    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="fnb-content">


        <!-- =================================================
             PAGE HEADER
        ================================================== -->

         <x-user.fnb.lanjut-pemesanan.fnb-hero />



        <!-- =================================================
             ORDER CONTENT
        ================================================== -->

        <x-user.fnb.lanjut-pemesanan.order-detail-section />

    </main>



    <!-- =====================================================
         FOOTER
         SAMA DENGAN PESAN-FNB.HTML
    ====================================================== -->

    <x-user.shared.footer-4 />

</div>



<!-- =====================================================
     JAVASCRIPT
====================================================== -->

<script src="{{ asset('js/global.js') }}"></script>

<script src="{{ asset('js/user/fnb/lanjut-pemesanan.js') }}"></script>
@endsection
