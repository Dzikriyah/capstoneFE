@extends('layouts.prototype')

@section('body-attributes', 'class="dashboard-body"')
@section('head')
<title>Dashboard Owner - Laporan F & B | IB Gaming</title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- CSS Dashboard -->
<link rel="stylesheet" href="{{ asset('css/css-owner/laporan-fnb.css') }}">
@endsection

@section('content')
<!-- Overlay Gelap saat Menu Mobile Dibuka -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="dashboard-layout">

    <!-- ==============================================
         SIDEBAR NAVIGASI
    =============================================== -->
    <x-owner.shared.sidebar />

    <!-- ==============================================
         AREA KONTEN KANAN (MAIN WRAPPER)
    =============================================== -->
    <div class="main-wrapper">

        <!-- Topbar Navbar Putih Bersih -->
        <x-owner.shared.header />

        <!-- Halaman Konten -->
        <main class="page-content">

            <!-- Header Judul Laporan F & B -->
            <x-owner.laporan-fnb.banner-heading />

            <!-- 3 Kartu Ringkasan KPI -->
            <x-owner.laporan-fnb.summary-cards />

            <!-- Grafik Pendapatan F&B Mingguan -->
            <x-owner.laporan-fnb.content-box />

            <!-- Tabel Data Transaksi F&B -->
            <x-owner.laporan-fnb.content-box-2 />

        </main>

        <!-- Footer Fitur Highlight Bawah -->
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
