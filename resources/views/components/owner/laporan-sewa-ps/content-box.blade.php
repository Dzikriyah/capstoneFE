<section class="content-box chart-box">
                    <header class="box-header">
                        <div class="box-title-wrap">
                            <img src="{{ asset('assets/Icon/Bintang.svg') }}" alt="" class="box-ico">
                            <div>
                                <h2>Grafik Pendapatan Sewa di Tempat</h2>
                                <p>Pendapatan per minggu pada bulan yang dipilih</p>
                            </div>
                        </div>

                        <div class="box-select">
                            <select id="filterBulan" aria-label="Pilih Periode Bulan">
                                <option value="2026-10">Oktober 2026</option>
                                <option value="2026-09">September 2026</option>
                            </select>
                        </div>
                    </header>

                    <div class="chart-canvas">
                        <div class="bars-flex">
                            <div class="bar-col">
                                <span class="bar-price">Rp 1.180.000</span>
                                <div class="bar-fill bar-1"></div>
                                <span class="bar-date">Minggu 1</span>
                            </div>

                            <div class="bar-col">
                                <span class="bar-price">Rp 1.650.000</span>
                                <div class="bar-fill bar-2"></div>
                                <span class="bar-date">Minggu 2</span>
                            </div>

                            <div class="bar-col">
                                <span class="bar-price">Rp 2.000.000</span>
                                <div class="bar-fill bar-3"></div>
                                <span class="bar-date">Minggu 3</span>
                            </div>

                            <div class="bar-col">
                                <span class="bar-price">Rp 1.500.000</span>
                                <div class="bar-fill bar-4"></div>
                                <span class="bar-date">Minggu 4</span>
                            </div>
                        </div>
                    </div>
                </section>
