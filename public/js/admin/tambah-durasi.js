(() => {
    const dialog = document.getElementById('tambahDurasiDialog');
    const trigger = document.getElementById('openTambahDurasi');
    const sessionEnd = document.getElementById('sewaEstimasiSelesai');
    const sessionTotal = document.getElementById('sewaTotalPembayaran');
    const hours = document.getElementById('durasi-jam');
    const minutes = document.getElementById('durasi-menit');
    const save = document.getElementById('simpanDurasi');
    const feedback = document.getElementById('durasiFeedback');
    const summary = document.getElementById('durasiRingkasan');
    const estimate = document.getElementById('durasiEstimasi');
    const fee = document.getElementById('durasiBiaya');
    const payment = document.getElementById('durasiTotal');
    const currentEnd = document.getElementById('durasiSelesaiSaatIni');
    const money = new Intl.NumberFormat('id-ID');
    const hourlyRate = 8000;
    const startMinutes = 14 * 60;
    const initialDuration = 120;
    let savedDuration = initialDuration;

    const normalize = (input, value) => Math.max(0, Math.min(Number(input.max), Math.floor(value) || 0));
    const extraMinutes = () => normalize(hours, hours.valueAsNumber) * 60 + normalize(minutes, minutes.valueAsNumber);
    const formatMoney = (amount) => 'Rp ' + money.format(amount);
    const formatDuration = (amount) => {
        const fullHours = Math.floor(amount / 60);
        const remainder = amount % 60;
        return fullHours && remainder ? fullHours + ' Jam ' + remainder + ' Menit'
            : fullHours ? fullHours + ' Jam' : remainder + ' Menit';
    };

    function formatEnd(duration) {
        const end = startMinutes + duration;
        const hour = String(Math.floor(end / 60) % 24).padStart(2, '0');
        const minute = String(end % 60).padStart(2, '0');
        const days = Math.floor(end / 1440);
        return hour + ':' + minute + (days ? ' (+' + days + ' hari)' : '');
    }

    function updateSummary() {
        const extra = extraMinutes();
        summary.textContent = formatDuration(savedDuration) + ' + ' + formatDuration(extra);
        estimate.textContent = formatEnd(savedDuration + extra);
        fee.textContent = formatMoney(Math.round((savedDuration + extra) * hourlyRate / 60) - Math.round(savedDuration * hourlyRate / 60));
        payment.textContent = formatMoney(Math.round((savedDuration + extra) * hourlyRate / 60));
        save.disabled = extra === 0;
    }

    for (const input of [hours, minutes]) {
        input.addEventListener('input', () => {
            feedback.textContent = '';
            updateSummary();
        });
        input.addEventListener('change', () => {
            input.value = normalize(input, input.valueAsNumber);
            updateSummary();
        });

        input.closest('.tambah-durasi-counter').querySelectorAll('[data-step]').forEach((button) => {
            button.addEventListener('click', () => {
                input.value = normalize(input, (input.valueAsNumber || 0) + Number(button.dataset.step));
                feedback.textContent = '';
                updateSummary();
            });
        });
    }

    trigger.addEventListener('click', () => dialog.showModal());

    dialog.querySelectorAll('[data-close-duration]').forEach((button) => {
        button.addEventListener('click', () => dialog.close());
    });

    dialog.addEventListener('close', () => {
        hours.value = 0;
        minutes.value = 0;
        updateSummary();
    });

    dialog.addEventListener('click', (event) => {
        if (event.target !== dialog) return;

        const {left, right, top, bottom} = dialog.getBoundingClientRect();
        if (event.clientX < left || event.clientX > right || event.clientY < top || event.clientY > bottom) {
            dialog.close();
        }
    });

    const url = new URL(window.location.href);
    if (url.searchParams.has('tambah-durasi')) {
        url.searchParams.delete('tambah-durasi');
        window.history.replaceState(null, '', url);
        dialog.showModal();
    }

    save.addEventListener('click', () => {
        const extra = extraMinutes();
        if (!extra) return;

        savedDuration += extra;
        hours.value = 0;
        minutes.value = 0;
        currentEnd.textContent = formatEnd(savedDuration);
        updateSummary();
        sessionEnd.textContent = formatEnd(savedDuration).replace(':', '.');
        sessionTotal.textContent = payment.textContent;
        document.dispatchEvent(new CustomEvent('rental-duration-saved', {
            detail: {
                end: formatEnd(savedDuration),
                duration: formatDuration(savedDuration),
                extra: formatMoney(Math.round((savedDuration - initialDuration) * hourlyRate / 60)),
                total: payment.textContent
            }
        }));
        dialog.close();
        feedback.textContent = 'Durasi berhasil ditambah ' + formatDuration(extra) + '. Estimasi selesai ' + formatEnd(savedDuration) + '.';
    });

    updateSummary();
})();

