@extends('layouts.prototype')

@push('head-assets')
    <link rel="stylesheet" href="{{ asset('css/user/notification.css') }}">
    <script src="{{ asset('js/user/notification.js') }}" defer></script>
@endpush

@section('after-content')
    <x-user.notification.dialog />
@endsection
