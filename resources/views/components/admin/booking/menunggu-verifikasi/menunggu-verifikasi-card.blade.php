<section class="menunggu-verifikasi-card">

                            <div class="menunggu-verifikasi-card-top">

                                <div class="menunggu-verifikasi-card-id">

                                    <div class="menunggu-verifikasi-card-id-icon">
                                        <img src="{{ asset('assets/Icon/Calendar.svg') }}" alt="" aria-hidden="true">
                                    </div>

                                    <div class="menunggu-verifikasi-card-id-text">
                                        <h2 class="menunggu-verifikasi-card-id-title">#USR-01</h2>
                                        <p class="menunggu-verifikasi-card-id-date">Diajukan Pada 08 Okt 2026, 09:15</p>
                                    </div>

                                </div>

                                <span class="menunggu-verifikasi-status">Menunggu Verifikasi Data Diri</span>

                            </div>


                            <div class="menunggu-verifikasi-section-heading">
                                <img src="{{ asset('assets/Icon/Centang.svg') }}" alt="" class="menunggu-verifikasi-section-icon" aria-hidden="true">
                                <div>
                                    <h3 class="menunggu-verifikasi-section-title">Verifikasi Data Diri Pelanggan</h3>
                                    <p class="menunggu-verifikasi-section-subtitle">Periksa data diri dan dokumen yang diunggah oleh Pelanggan</p>
                                </div>
                            </div>


                            <!-- DUA DOKUMEN -->
                            <div class="menunggu-verifikasi-documents">

                                <!-- Foto Identitas -->
                                <article class="menunggu-verifikasi-document" data-document="identitas">

                                    <div class="menunggu-verifikasi-document-title">
                                        <img src="{{ asset('assets/Icon/Id.svg') }}" alt="" class="menunggu-verifikasi-document-title-icon" aria-hidden="true">
                                        <span>Foto Identitas</span>
                                    </div>

                                    <div class="menunggu-verifikasi-document-preview">
                                        <img src="{{ asset('assets/Icon/Id.svg') }}" alt="Placeholder foto identitas" class="menunggu-verifikasi-document-image">
                                    </div>

                                    <div class="menunggu-verifikasi-document-actions">

                                        <button type="button" class="menunggu-verifikasi-button menunggu-verifikasi-button--invalid" data-value="invalid" aria-pressed="false">
                                            <img src="{{ asset('assets/Icon/Close.svg') }}" alt="" class="menunggu-verifikasi-button-icon" aria-hidden="true">
                                            <span>Tidak Valid</span>
                                        </button>

                                        <button type="button" class="menunggu-verifikasi-button menunggu-verifikasi-button--valid" data-value="valid" aria-pressed="false">
                                            <span class="menunggu-verifikasi-check-circle" aria-hidden="true">
                                                <img src="{{ asset('assets/Icon/Centang.svg') }}" alt="">
                                            </span>
                                            <span>Valid</span>
                                        </button>

                                    </div>

                                </article>

                                <!-- Foto Diri -->
                                <article class="menunggu-verifikasi-document" data-document="diri">

                                    <div class="menunggu-verifikasi-document-title">
                                        <img src="{{ asset('assets/Icon/Id.svg') }}" alt="" class="menunggu-verifikasi-document-title-icon" aria-hidden="true">
                                        <span>Foto Diri</span>
                                    </div>

                                    <div class="menunggu-verifikasi-document-preview">
                                        <img src="{{ asset('assets/Icon/Id.svg') }}" alt="Placeholder foto diri" class="menunggu-verifikasi-document-image">
                                    </div>

                                    <div class="menunggu-verifikasi-document-actions">

                                        <button type="button" class="menunggu-verifikasi-button menunggu-verifikasi-button--invalid" data-value="invalid" aria-pressed="false">
                                            <img src="{{ asset('assets/Icon/Close.svg') }}" alt="" class="menunggu-verifikasi-button-icon" aria-hidden="true">
                                            <span>Tidak Valid</span>
                                        </button>

                                        <button type="button" class="menunggu-verifikasi-button menunggu-verifikasi-button--valid" data-value="valid" aria-pressed="false">
                                            <span class="menunggu-verifikasi-check-circle" aria-hidden="true">
                                                <img src="{{ asset('assets/Icon/Centang.svg') }}" alt="">
                                            </span>
                                            <span>Valid</span>
                                        </button>

                                    </div>

                                </article>

                            </div>

                        </section>
