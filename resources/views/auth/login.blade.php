@extends('layouts.prototype')

@section('head')
<title>Login - IB Gaming</title>

<!-- Global CSS -->
<link rel="stylesheet" href="{{ asset('css/global.css') }}">

<!-- Login CSS -->
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<main class="login-page">

    <div class="login-container">

        <!-- ==========================
             LEFT SECTION / HERO
        =========================== -->
        <x-auth.login.hero-section />


        <!-- RIGHT SECTION / LOGIN -->
        <x-auth.login.login-section />

    </div>

</main>


<!-- JavaScript -->
<script src="{{ asset('js/auth/login.js') }}"></script>
@endsection
