@extends('layouts.admin')

@section('admin-head')
<title>IB Gaming - Admin</title>

<link rel="stylesheet" href="{{ asset('css/admin/sewa-tersedia.css') }}">
<script src="{{ asset('js/admin/sewa-tersedia.js') }}" defer></script>
@endsection

@section('admin-content')
<!-- =================================================
                 CONTENT

                 KONTEN HALAMAN DITARUH DI SINI
            ================================================== -->
          <main class="sewa-detail-main">

    <!-- =========================
         PAGE HEADING
    ========================== -->
    <div class="sewa-detail-heading">

        <!-- KIRI -->
        <div class="sewa-detail-heading-left">

            <img
                src="{{ asset('assets/Icon/Game.svg') }}"
                alt=""
                class="sewa-detail-heading-icon"
            >

            <div class="sewa-detail-heading-text">
                <h1>Detail Sewa PlayStation</h1>
                <p>Informasi Lengkap Penyewaan PlayStation</p>
            </div>

        </div>


        <!-- KANAN -->
        <a href="{{ route('admin.sewa-ps') }}" class="sewa-detail-back-button">

            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
                class="sewa-detail-back-icon"
            >

            <span>Kembali</span>

        </a>

    </div>


    <!-- =========================
         BREADCRUMB
    ========================== -->
    <div class="sewa-detail-breadcrumb">

        <a href="{{ route('admin.sewa-ps') }}" class="sewa-breadcrumb-back">
            <img
                src="{{ asset('assets/Icon/Panah.svg') }}"
                alt=""
                class="sewa-breadcrumb-back-icon"
            >
        </a>

        <a href="{{ route('admin.sewa-ps') }}" class="sewa-breadcrumb-text">
            Sewa PS
        </a>

        <img
            src="{{ asset('assets/Icon/Arrow.svg') }}"
            alt=""
            class="sewa-breadcrumb-arrow"
        >

        <span class="sewa-breadcrumb-current">
            Detail Sewa Tersedia
        </span>

    </div>


    <!-- =========================
         DETAIL CONTAINER
    ========================== -->
    <x-admin.sewa-tersedia.sewa-detail-container />

</main>
@endsection
