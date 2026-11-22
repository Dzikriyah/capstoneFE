<section class="menunggu-verifikasi-action">

                    <div class="menunggu-verifikasi-action-message">
                        <span class="menunggu-verifikasi-action-icon" aria-hidden="true">!</span>
                        <p class="menunggu-verifikasi-action-text">
                            Pastikan semua dokumen valid sebelum memverifikasi akun.<br>
                            Jika ada dokumen yang tidak valid, pilih status Tidak Valid dan isi alasan di Catatan Admin
                        </p>
                    </div>

                    <a href="{{ route('admin.booking.verifikasi-akun') }}" class="menunggu-verifikasi-action-button">
                        <span class="menunggu-verifikasi-check-circle menunggu-verifikasi-check-circle--white" aria-hidden="true">
                            <img src="{{ asset('assets/Icon/Centang.svg') }}" alt="">
                        </span>
                        <span>Verifikasi Akun</span>
                    </a>

                </section>
