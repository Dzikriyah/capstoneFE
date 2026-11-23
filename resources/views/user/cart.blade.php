@extends('layouts.customer')

@section('body-attributes')class="dashboard-pelanggan"@endsection
@section('head')
<title>Dashboard Pelanggan - Keranjang</title>

<!-- GLOBAL CSS -->
<link
    rel="stylesheet"
    href="{{ asset('css/global.css') }}"
>

<!-- SHARED USER CSS -->
<link
    rel="stylesheet"
    href="{{ asset('css/user/shared.css') }}"
>

<!-- CART CSS -->
<link
    rel="stylesheet"
    href="{{ asset('css/user/cart.css') }}"
>
@endsection

@section('content')
<!-- =====================================================
     HEADER
====================================================== -->

<x-user.cart.header />


<!-- =====================================================
     MAIN CONTENT
====================================================== -->

<main class="cart-content">

    <div class="container">


        <!-- PAGE INTRO -->

        <x-user.cart.cart-heading />


        <!-- =================================================
             CART SECTION
        ================================================== -->

        <x-user.cart.cart-section />

    </div>

</main>


<!-- =====================================================
     FOOTER
====================================================== -->

<x-user.shared.footer-3 />


<!-- GLOBAL JS -->

<script src="{{ asset('js/global.js') }}"></script>

<!-- CART JS -->

<script src="{{ asset('js/user/cart.js') }}"></script>
@endsection
