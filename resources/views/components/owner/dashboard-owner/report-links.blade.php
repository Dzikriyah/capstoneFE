@php
    $reports = [
        ['owner.laporan-sewa-ps', 'Game.svg', 'Laporan Sewa PS', 'Lihat transaksi sewa dan pendapatan PlayStation.'],
        ['owner.laporan-booking', 'Calendar.svg', 'Laporan Booking', 'Pantau aktivitas booking dan riwayat transaksi.'],
        ['owner.laporan-fnb', 'FNB.svg', 'Laporan F&B', 'Lihat penjualan makanan dan minuman.'],
        ['owner.laporan-denda', 'Note.svg', 'Laporan Denda', 'Tinjau catatan denda dari sesi sewa.'],
    ];
@endphp

<section class="owner-reports" aria-labelledby="owner-reports-title">
    <h2 id="owner-reports-title">Laporan Operasional</h2>

    <ul class="owner-report-grid">
        @foreach ($reports as [$route, $icon, $title, $description])
            <li>
                <a class="owner-report-card" href="{{ route($route) }}">
                    <span class="owner-report-icon">
                        <img src="{{ asset('assets/Icon/' . $icon) }}" alt="">
                    </span>
                    <h3>{{ $title }}</h3>
                    <p>{{ $description }}</p>
                    <span class="owner-report-action">Buka laporan <span aria-hidden="true">&rarr;</span></span>
                </a>
            </li>
        @endforeach
    </ul>
</section>
