@extends('layouts.prototype')

@section('head')
    <title>Dashboard Owner | IB Gaming</title>
    <link rel="stylesheet" href="{{ asset('css/css-owner/laporan-boking.css') }}">
@endsection

@section('body-attributes', 'class="dashboard-body"')

@section('content')
    <x-owner.dashboard-owner.report-links />
@endsection
