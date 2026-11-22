@extends('layouts.prototype')

@section('head')
<title>Register - IB Gaming</title>

 <!-- Global CSS -->
<link rel="stylesheet" href="{{ asset('css/global.css') }}">

<!-- Register CSS -->
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<main class="register-page">

    <div class="register-container">

        <!-- ==========================
             LEFT SECTION / HERO
        =========================== -->
        <x-auth.register.register-hero />


        <!-- ==========================
             RIGHT SECTION / REGISTER
        =========================== -->
        <x-auth.register.register-section />

    </div>

</main>


<!-- JavaScript -->
<script src="{{ asset('js/auth/register.js') }}"></script>
@endsection
