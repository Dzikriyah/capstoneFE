(() => {
    const duration = document.getElementById('durasi');
    const startTime = document.getElementById('jamMulai');
    const endTime = document.getElementById('estimasiSelesai');
    const hourlyRate = Number(document.getElementById('hargaPerJam').dataset.hargaPerJam);
    const total = document.getElementById('total');
    const numberFormat = new Intl.NumberFormat('id-ID');

    function updateRental() {
        const hours = Number(duration.value);
        const [startHour, startMinute] = startTime.value.split('.').map(Number);
        const endHour = startHour + hours;
        const formattedHour = String(endHour % 24).padStart(2, '0');
        const formattedMinute = String(startMinute).padStart(2, '0');

        total.value = 'Rp ' + numberFormat.format(hourlyRate * hours);
        endTime.value = formattedHour + '.' + formattedMinute + (endHour >= 24 ? ' (+1 hari)' : '');
    }

    duration.addEventListener('change', updateRental);
    updateRental();
})();

