@extends('layouts.prototype')

@section('body-attributes', 'class="dashboard-body"')
@section('head')
<title>Dashboard Owner - Laporan Sewa PS | IB Gaming</title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- CSS Dashboard -->
<link rel="stylesheet" href="{{ asset('css/css-owner/laporan-sewa-ps.css') }}">
@endsection

@section('content')
<!-- Backdrop Gelap saat Sidebar Terbuka di HP -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="dashboard-layout">

    <!-- ==============================================
         SIDEBAR NAVIGASI
    =============================================== -->
    <x-owner.laporan-sewa-ps.aside />

    <!-- ==============================================
         MAIN WRAPPER
    =============================================== -->
    <div class="main-wrapper">

        <!-- Topbar Header -->
        <x-owner.shared.header />

        <!-- Halaman Utama -->
        <main class="page-content">

            <!-- Header Banner -->
            <x-owner.laporan-sewa-ps.banner-heading />

            <!-- 3 Kartu Ringkasan (KPI Cards) -->
            <x-owner.laporan-sewa-ps.summary-cards />

            <!-- Section Grafik -->
            <x-owner.laporan-sewa-ps.content-box />

            <!-- Section Tabel Data Transaksi -->
            <x-owner.laporan-sewa-ps.content-box-2 />

        </main>

        <!-- Footer Fitur -->
        <x-owner.shared.footer />

    </div>
</div>

<!-- Script Sederhana untuk Toggle Sidebar di HP -->
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
