@extends('layouts.admin')

@section('admin-head')
<title>IB Gaming - Admin</title>

<link rel="stylesheet" href="{{ asset('css/admin/sewa-digunakan.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/tambah-durasi.css') }}">
<script src="{{ asset('js/admin/tambah-durasi.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/admin/akhiri-sewa.css') }}">
<script src="{{ asset('js/admin/akhiri-sewa.js') }}" defer></script>
@endsection

@section('admin-content')
<!-- =================================================
                 CONTENT

                 KONTEN HALAMAN DITARUH DI SINI
            ================================================== -->
            <main class="sewa-digunakan-main">

    <!-- =========================
         PAGE HEADING
    ========================== -->
    <div class="sewa-digunakan-heading">

        <div class="sewa-digunakan-heading-left">

            <img
                src="{{ asset('assets/Icon/Game.svg') }}"
                alt=""
                class="sewa-digunakan-heading-icon"
            >

            <div class="sewa-digunakan-heading-text">
                <h1>Detail Sewa PlayStation Aktif</h1>
                <p>Informasi Penyewaan Playstation yang sedang berlangsung</p>
            </div>

        </div>


        <!-- BUTTON KEMBALI -->
        <a href="{{ route('admin.sewa-ps') }}" class="sewa-digunakan-back-button">

            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
                class="sewa-digunakan-back-icon"
            >

            <span>Kembali</span>

        </a>

    </div>


    <!-- =========================
         BREADCRUMB
    ========================== -->
    <div class="sewa-digunakan-breadcrumb">

        <a href="{{ route('admin.sewa-ps') }}" class="sewa-digunakan-breadcrumb-back">

            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
                class="sewa-digunakan-breadcrumb-back-icon"
            >

        </a>

        <a href="{{ route('admin.sewa-ps') }}" class="sewa-digunakan-breadcrumb-text">
            Sewa PS
        </a>

        <img
            src="{{ asset('assets/Icon/Arrow.svg') }}"
            alt=""
            class="sewa-digunakan-breadcrumb-arrow"
        >

        <span class="sewa-digunakan-breadcrumb-current">
            Detail Booking Digunakan
        </span>

    </div>


    <!-- =========================
         MAIN CONTAINER
    ========================== -->
    <x-admin.sewa-digunakan.sewa-digunakan-container />

</main>
@endsection

@section('admin-overlays')
<x-admin.sewa-digunakan.tambah-durasi-dialog />
<x-admin.sewa-digunakan.akhiri-sewa-dialog />
@endsection
