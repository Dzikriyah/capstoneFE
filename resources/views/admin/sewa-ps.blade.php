@extends('layouts.admin')

@section('admin-head')
<meta
    name="description"
    content="Sewa PlayStation - Admin IB Gaming"
>

<title>Sewa PS - IB Gaming</title>


<!-- =====================================================
     SEWA PS CSS
     Khusus halaman Sewa PS
====================================================== -->

<link
    rel="stylesheet"
    href="{{ asset('css/admin/sewa-ps.css') }}"
>
@endsection

@section('admin-content')
<!-- =================================================
     MAIN CONTENT
================================================== -->

<main class="admin-content">

    <x-admin.sewa-ps.sewa-ps-content />

</main>
@endsection
