@extends('layouts.admin')

@section('admin-head')
<title>IB Gaming - Admin</title>

<link rel="stylesheet" href="{{ asset('css/admin/kelola-menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/tambah-menu.css') }}">
<script src="{{ asset('js/admin/tambah-menu.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/admin/edit-menu.css') }}">
<script src="{{ asset('js/admin/edit-menu.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/admin/hapus-menu.css') }}">
<script src="{{ asset('js/admin/hapus-menu.js') }}" defer></script>
@endsection

@section('admin-content')
<main class="admin-content kelola-menu-content">

    <!-- =========================================
         PAGE HEADER
    ========================================== -->
    <x-admin.kelola-menu.kelola-menu-header />


    <!-- =========================================
         MAIN MENU CARD
    ========================================== -->
    <x-admin.kelola-menu.kelola-menu-card />

</main>
@endsection

@section('admin-overlays')
<x-admin.kelola-menu.tambah-menu-dialog />
<x-admin.kelola-menu.edit-menu-dialog />
<x-admin.kelola-menu.hapus-menu-dialog />
@endsection
