@extends('layouts.prototype')

@section('head')
<title>Profile Saya - IB Gaming</title>


<!-- ============================================
     GLOBAL CSS
============================================= -->

<link
    rel="stylesheet"
    href="{{ asset('css/global.css') }}"
>


<!-- ============================================
     PROFILE CSS
============================================= -->

<link
    rel="stylesheet"
    href="{{ asset('css/user/profile.css') }}"
>
@endsection

@section('content')
<!-- ============================================
         PROFILE PAGE
    ============================================= -->

    <div class="profile-page">


        <!-- ========================================
             HEADER
        ========================================= -->

        <x-user.profile.header />



        <!-- ============================================
             BREADCRUMB
        ============================================= -->

        <div class="breadcrumb-container">

            <a
                href="{{ route('user.home') }}"
                class="breadcrumb-link"
            >

                <img
                    src="{{ asset('assets/Icon/Home.svg') }}"
                    alt=""
                >

                <span>
                    Beranda
                </span>

            </a>


            <span class="breadcrumb-separator">
                /
            </span>


            <span class="breadcrumb-current">
                Profile Saya
            </span>

        </div>



        <!-- ============================================
             MAIN PROFILE CONTENT
        ============================================= -->

        <main class="profile-content">


            <!-- ========================================
                 SIDEBAR
            ========================================= -->

            <x-user.profile.profile-sidebar />



            <!-- ========================================
                 PROFILE CARD
            ========================================= -->

            <x-user.profile.profile-card />

        </main>



        <!-- ============================================
             FOOTER / VALUE
        ============================================= -->

        <x-user.shared.footer-3 />

    </div>

    <!-- ============================================
     PROFILE NOTIFICATION
============================================= -->

<div
    class="profile-notification"
    id="profileNotification"
    role="alert"
>

    <div
        class="profile-notification-icon"
        id="profileNotificationIcon"
    >
        ✓
    </div>


    <div class="profile-notification-content">

        <h3 id="profileNotificationTitle">
            Profil Berhasil Disimpan
        </h3>

        <p id="profileNotificationMessage">
            Perubahan informasi profil kamu berhasil disimpan.
        </p>

    </div>


    <button
        type="button"
        class="profile-notification-close"
        onclick="
            document
                .getElementById('profileNotification')
                .classList.remove('show')
        "
        aria-label="Tutup notifikasi"
    >
        ×
    </button>

</div>



    <!-- ============================================
         JAVASCRIPT
    ============================================= -->

    <script src="{{ asset('js/user/profile.js') }}"></script>
@endsection
