@pushOnce('admin-head-assets')
    <link rel="stylesheet" href="{{ asset('css/admin/date-picker.css') }}">
    <script src="{{ asset('js/admin/date-picker.js') }}" defer></script>
@endPushOnce

<div class="sewa-date" data-admin-date-picker>
    <input type="date" class="sewa-date-input" value="2025-10-08" aria-label="Pilih tanggal">
    <span class="sewa-date-icon-wrapper">
        <img src="{{ asset('assets/Icon/Calendar.svg') }}" alt="" class="sewa-calendar-icon">
    </span>
    <time datetime="2025-10-08">Rabu, 8 Oktober 2025</time>
</div>
