@extends('layouts.admin')

@section('admin-head')
<title>Verifikasi Akun - Booking PS | IB Gaming</title>

<link rel="stylesheet" href="{{ asset('css/admin/booking/verifikasi-akun.css') }}">
@endsection

@section('admin-content')
<!-- =================================================
                 CONTENT
            ================================================== -->
           <main class="admin-content">

    <!-- =================================================
         PAGE HEADER
    ================================================== -->

                <x-admin.booking.verifikasi-akun.booking-page-header />


    <!-- =================================================
         VERIFICATION TABS
    ================================================== -->
                        <nav
                            class="booking-verification-tabs"
                            aria-label="Verifikasi Booking PS"
                        >

                            <a
                                href="{{ route('admin.booking.verifikasi-akun') }}"
                                class="booking-verification-tab active"
                                aria-current="page"
                            >

                                <img
                                    src="{{ asset('assets/Icon/User.svg') }}"
                                    alt=""
                                    aria-hidden="true"
                                >

                                <span>
                                    Verifikasi Akun
                                </span>

                            </a>


                            <a
                                href="{{ route('admin.booking.verifikasi-booking') }}"
                                class="booking-verification-tab"
                            >

                                <img
                                    src="{{ asset('assets/Icon/Keranjang.svg') }}"
                                    alt=""
                                    aria-hidden="true"
                                >

                                <span>
                                    Verifikasi Booking
                                </span>

                            </a>

                        </nav>


    <!-- =================================================
         SUMMARY
    ================================================== -->

    <x-admin.booking.verifikasi-akun.booking-summary-grid />

<x-admin.booking.verifikasi-akun.booking-account-table-card />

</main>
@endsection
