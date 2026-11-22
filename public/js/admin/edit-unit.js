(() => {
    const dialog = document.getElementById('editUnitDialog');
    const form = document.getElementById('editUnitForm');
    const triggers = [...document.querySelectorAll('[data-open-edit-unit]')];
    const read = (parent, selector) => parent.querySelector(selector).textContent.trim();

    function showEditUnit(trigger) {
        const card = trigger.closest('.unit-card');
        const name = read(card, '.unit-name');
        const status = card.querySelector('.unit-status');
        const specs = [...card.querySelectorAll('.unit-spec span')].map((spec) => spec.textContent.trim());
        const [tv, sticks, consoleType] = specs;

        form.elements.namaUnit.value = name;
        form.elements.ukuranTV.value = tv.match(/\d+/)[0];
        form.elements.jumlahStik.value = sticks.match(/\d+/)[0] + ' Stik';
        form.elements.jenisPS.value = consoleType.replace(/\s/g, '');
        form.elements.statusUnit.value = status.classList.contains('status-available')
            ? 'tersedia'
            : status.classList.contains('status-used') ? 'digunakan' : 'rusak';

        dialog.querySelector('.edit-unit-summary-name').textContent = name;
        dialog.querySelector('.edit-unit-summary-status').textContent = status.textContent.trim();
        dialog.querySelector('.edit-unit-summary-desc').textContent = read(card, '.unit-description');
        dialog.querySelectorAll('.edit-unit-summary-specs span').forEach((spec, index) => {
            spec.textContent = specs[index];
        });

        syncStatus();
        dialog.showModal();
    }

    function syncStatus() {
        dialog.querySelectorAll('.edit-unit-status-option').forEach((option) => {
            option.classList.toggle('is-active', option.querySelector('input').checked);
        });
    }

    triggers.forEach((trigger) => trigger.addEventListener('click', () => showEditUnit(trigger)));
    form.addEventListener('change', syncStatus);
    dialog.querySelectorAll('[data-close-edit-unit]').forEach((button) => {
        button.addEventListener('click', () => dialog.close());
    });

    dialog.addEventListener('click', (event) => {
        if (event.target !== dialog) {
            return;
        }
        const {left, right, top, bottom} = dialog.getBoundingClientRect();
        if (event.clientX < left || event.clientX > right || event.clientY < top || event.clientY > bottom) {
            dialog.close();
        }
    });

    const url = new URL(window.location.href);
    const requestedUnit = url.searchParams.get('edit-unit');
    if (requestedUnit !== null) {
        url.searchParams.delete('edit-unit');
        window.history.replaceState(null, '', url);
        const trigger = triggers.find((button) => read(button.closest('.unit-card'), '.unit-name') === requestedUnit);
        if (trigger) {
            showEditUnit(trigger);
        }
    }
})();

