@extends('layouts.admin')

@section('admin-head')
<meta
    name="description"
    content="Admin Dashboard IB Gaming"
>

<title>Admin Dashboard - IB Gaming</title>


<!-- =====================================================
     DASHBOARD CSS
     Khusus isi dashboard
====================================================== -->

<link
    rel="stylesheet"
    href="{{ asset('css/admin/dashboard-admin.css') }}"
>
@endsection

@section('admin-layout-class', 'admin-dashboard')

@section('admin-content')
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
@endsection
