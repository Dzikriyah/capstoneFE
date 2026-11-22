@extends('layouts.prototype')

@section('head')
<meta
    name="description"
    content="IB Gaming menyediakan pengalaman bermain PlayStation, makanan, dan minuman dalam suasana nyaman."
>

<title>IB Gaming</title>

<link
    rel="stylesheet"
    href="{{ asset('css/global.css') }}"
>


<link
    rel="stylesheet"
    href="{{ asset('css/index.css') }}"
>
@endsection

@section('content')
<div class="dashboard-pelanggan">


       <!-- ================================
            HEADER / NAVBAR
       ================================= -->

       <x-index.header />



       <!-- ================================
            MAIN CONTENT
       ================================= -->

       <main class="container">


           <!-- ================================
                HERO SECTION
           ================================= -->

           <x-index.main-content />



           <!-- ================================
                BOOKING PLAYSTATION
           ================================= -->

           <x-index.booking-playstation />



           <!-- ================================
                FOOD & BEVERAGE
           ================================= -->

           <x-index.pesan-fnb />


       </main>



       <!-- ================================
            FOOTER / VALUE
       ================================= -->

       <x-index.footer />


   </div>

<script src="{{ asset('js/index.js') }}"></script>
@endsection
