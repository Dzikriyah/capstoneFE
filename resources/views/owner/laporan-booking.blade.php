@extends('layouts.prototype')

@section('body-attributes', 'class="dashboard-body"')
@section('head')
<title>Dashboard Owner - Laporan Booking | IB Gaming</title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- CSS Dashboard -->
<link rel="stylesheet" href="{{ asset('css/css-owner/laporan-boking.css') }}">
@endsection

@section('content')
<!-- Overlay Gelap Menu Mobile -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="dashboard-layout">

    <!-- ==============================================
         SIDEBAR NAVIGASI
    =============================================== -->
    <x-owner.laporan-booking.aside />

    <!-- ==============================================
         MAIN WRAPPER (AREA KANAN)
    =============================================== -->
    <div class="main-wrapper">

        <!-- Topbar Header Putih Bersih -->
        <x-owner.shared.header />

        <!-- Konten Halaman -->
        <main class="page-content">

            <!-- Heading Judul Halaman -->
            <x-owner.laporan-booking.banner-heading />

            <!-- 4 Kartu Metrik KPI Sesuai Desain Booking -->
            <x-owner.laporan-booking.summary-cards />

            <!-- Section Grafik Pendapatan Booking -->
            <x-owner.laporan-booking.content-box />

            <!-- Section Tabel Data Transaksi Booking -->
            <x-owner.laporan-booking.content-box-2 />

        </main>

        <!-- Footer Fitur Highlight -->
        <x-owner.shared.footer />

    </div>
</div>

<!-- Toggle Drawer Sidebar di HP -->
<script>
    const btnOpen = document.getElementById('btnOpenSidebar');
    const btnClose = document.getElementById('btnCloseSidebar');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    function toggleMenu() {
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.classList.toggle('no-scroll');
    }

    if (btnOpen) btnOpen.addEventListener('click', toggleMenu);
    if (btnClose) btnClose.addEventListener('click', toggleMenu);
    if (overlay) overlay.addEventListener('click', toggleMenu);
</script>
@endsection
