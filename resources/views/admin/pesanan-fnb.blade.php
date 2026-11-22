@extends('layouts.admin')

@section('admin-head')
<title>IB Gaming - Admin</title>

<link rel="stylesheet" href="{{ asset('css/admin/pesanan-fnb.css') }}">
@endsection

@section('admin-content')
<!-- =========================================================
     PESANAN F & B
========================================================= -->

<x-admin.pesanan-fnb.pesanan-fnb-page />
@endsection
