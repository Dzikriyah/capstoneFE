(() => {
    const formatter = new Intl.DateTimeFormat('id-ID', {dateStyle: 'full', timeZone: 'UTC'});

    document.querySelectorAll('[data-admin-date-picker]').forEach((picker) => {
        const input = picker.querySelector('input');
        const selectedDate = picker.querySelector('time');

        input.addEventListener('change', () => {
            if (!input.value) {
                input.value = selectedDate.dateTime;
                return;
            }

            selectedDate.dateTime = input.value;
            selectedDate.textContent = formatter.format(input.valueAsDate);
        });

        if (typeof input.showPicker === 'function') {
            picker.classList.add('sewa-date--picker');
            input.addEventListener('click', (event) => {
                try {
                    input.showPicker();
                    event.preventDefault();
                } catch {
                    picker.classList.remove('sewa-date--picker');
                }
            });
        }
    });
})();

