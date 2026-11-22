@extends('layouts.prototype')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/admin-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/notification.css') }}">
    <script src="{{ asset('js/admin/notification.js') }}" defer></script>
    @yield('admin-head')
    @stack('admin-head-assets')
@endsection

@section('content')
    <div class="admin-layout @yield('admin-layout-class')">
        <x-admin.shared.sidebar />

        <div class="admin-main">
            <x-admin.shared.header />

            @yield('admin-content')

            <x-admin.shared.footer />
        </div>
    </div>

    <x-admin.shared.notification-dialog />
    @yield('admin-overlays')
@endsection
