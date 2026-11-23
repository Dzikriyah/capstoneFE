@extends('layouts.prototype')

@section('head')
    <title>Dashboard Owner | IB Gaming</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/css-owner/laporan-boking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-owner/dashboard-owner.css') }}">
    <script src="{{ asset('js/owner/owner.js') }}" defer></script>
@endsection

@section('body-attributes')class="dashboard-body"@endsection

@section('content')
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <div class="dashboard-layout owner-dashboard">
        <x-owner.shared.sidebar />

        <div class="main-wrapper">
            <x-owner.shared.header />

            <main class="page-content">
                <header class="owner-dashboard-heading">
                    <h1>Dashboard Owner</h1>
                    <p>Pantau aktivitas dan pendapatan IB Gaming dari laporan operasional.</p>
                </header>

                <x-owner.dashboard-owner.report-links />
            </main>

            <x-owner.shared.footer />
        </div>
    </div>
@endsection
