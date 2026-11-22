@extends('layouts.admin')

@section('admin-head')
<title>Kelola Unit PS - Admin IB Gaming</title>

<!-- Global CSS -->
<!-- Admin Layout CSS -->
<!-- Kelola Unit CSS -->
<link rel="stylesheet" href="{{ asset('css/admin/kelola-unit.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/tambah-unit.css') }}">
<script src="{{ asset('js/admin/tambah-unit.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/admin/edit-unit.css') }}">
<script src="{{ asset('js/admin/edit-unit.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('css/admin/hapus-unit.css') }}">
<script src="{{ asset('js/admin/hapus-unit.js') }}" defer></script>
@endsection

@section('admin-layout-class', 'admin-unit-management')

@section('admin-content')
<!-- =================================================
     CONTENT
================================================== -->
<main class="admin-content unit-management-content">

    <!-- PAGE HEADER -->
    <x-admin.kelola-unit.unit-page-header />


    <!-- =================================================
         UNIT GRID
    ================================================== -->
    <x-admin.kelola-unit.unit-grid />

</main>
@endsection

@section('admin-overlays')
<x-admin.kelola-unit.tambah-unit-dialog />
<x-admin.kelola-unit.edit-unit-dialog />
<x-admin.kelola-unit.hapus-unit-dialog />
@endsection
