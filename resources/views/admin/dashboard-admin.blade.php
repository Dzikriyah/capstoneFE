@extends('layouts.prototype')

@section('head')
<meta
    name="description"
    content="Admin Dashboard IB Gaming"
>

<title>Admin Dashboard - IB Gaming</title>


<!-- =====================================================
     GLOBAL CSS
====================================================== -->

<link
    rel="stylesheet"
    href="{{ asset('css/global.css') }}"
>


<!-- =====================================================
     ADMIN LAYOUT CSS
     Sidebar, Header, Footer
====================================================== -->

<link
    rel="stylesheet"
    href="{{ asset('css/admin/admin-layout.css') }}"
>


<!-- =====================================================
     DASHBOARD CSS
     Khusus isi dashboard
====================================================== -->

<link
    rel="stylesheet"
    href="{{ asset('css/admin/dashboard-admin.css') }}"
>
@endsection

@section('content')
<div class="admin-layout">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <x-admin.dashboard-admin.aside />



                <!-- =====================================================
                    MAIN AREA
                ====================================================== -->

                <div class="admin-main">



                    <!-- =================================================
                        HEADER
                    ================================================== -->

                <x-admin.dashboard-admin.header />



                <main class="admin-content">

                <!-- =========================================
                    SUMMARY CARDS
                ========================================== -->
               <x-admin.dashboard-admin.dashboard-summary />


                <!-- =========================================
                    DASHBOARD GRID
                ========================================== -->
                <x-admin.dashboard-admin.dashboard-grid />

            </main>



        <!-- =====================================================
             FOOTER
             TETAP MENGGUNAKAN ICON YANG SUDAH ADA
        ====================================================== -->

        <x-admin.dashboard-admin.footer />


    </div>

</div>
@endsection
