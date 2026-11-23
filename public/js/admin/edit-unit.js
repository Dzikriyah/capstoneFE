(() => {
    const dialog = document.getElementById('editUnitDialog');
    const form = document.getElementById('editUnitForm');
    const triggers = [...document.querySelectorAll('[data-open-edit-unit]')];
    const storageKey = 'ibGamingUnitEdits';
    const feedback = document.getElementById('unitEditFeedback');
    const statuses = {
        tersedia: {className: 'status-available', label: 'Tersedia', description: 'Unit siap digunakan.'},
        digunakan: {className: 'status-used', label: 'Digunakan', description: 'Unit sedang digunakan.'},
        rusak: {className: 'status-damaged', label: 'Rusak', description: 'Unit tidak dapat digunakan.'}
    };
    let savedEdits = {};
    let selectedCard;

    try {
        savedEdits = JSON.parse(localStorage.getItem(storageKey)) || {};
    } catch {
        // Editing still works for the current view if storage is unavailable.
    }

    const read = (parent, selector) => parent.querySelector(selector).textContent.trim();

    function updateCard(card, unit) {
        card.querySelector('.unit-name').textContent = unit.name;

        const status = card.querySelector('.unit-status');
        const nextStatus = statuses[unit.status];
        if (!status.classList.contains(nextStatus.className)) {
            status.classList.remove(...Object.values(statuses).map((item) => item.className));
            status.classList.add(nextStatus.className);
            status.textContent = nextStatus.label;
            card.querySelector('.unit-description').textContent = nextStatus.description;
        }

        const specs = card.querySelectorAll('.unit-spec span');
        specs[0].textContent = 'TV ' + unit.tv + '"';
        specs[1].textContent = 'Stik ' + unit.sticks;
        specs[2].textContent = unit.console.replace('PS', 'PS ');
    }

    function showEditUnit(trigger) {
        const card = trigger.closest('.unit-card');
        selectedCard = card;
        form.elements.namaUnit.setCustomValidity('');
        const name = read(card, '.unit-name');
        const status = card.querySelector('.unit-status');
        const specs = [...card.querySelectorAll('.unit-spec span')].map((spec) => spec.textContent.trim());
        const [tv, sticks, consoleType] = specs;

        form.elements.namaUnit.value = name;
        form.elements.ukuranTV.value = tv.match(/\d+/)[0];
        form.elements.jumlahStik.value = sticks.match(/\d+/)[0];
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

    triggers.forEach((trigger) => {
        const card = trigger.closest('.unit-card');
        card.dataset.unitId = read(card, '.unit-name');
        const savedUnit = savedEdits[card.dataset.unitId];

        if (savedUnit && typeof savedUnit.name === 'string' &&
            Object.hasOwn(statuses, savedUnit.status) &&
            /^PS[345]$/.test(savedUnit.console) &&
            /^\d+$/.test(savedUnit.tv) && /^\d+$/.test(savedUnit.sticks)) {
            updateCard(card, savedUnit);
        }

        trigger.addEventListener('click', () => showEditUnit(trigger));
    });

    form.elements.namaUnit.addEventListener('input', () => form.elements.namaUnit.setCustomValidity(''));

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const name = form.elements.namaUnit.value.trim();
        if (!name) {
            form.elements.namaUnit.setCustomValidity('Masukkan nama unit.');
            form.elements.namaUnit.reportValidity();
            return;
        }

        const unit = {
            name,
            tv: form.elements.ukuranTV.value,
            sticks: form.elements.jumlahStik.value,
            console: form.elements.jenisPS.value,
            status: form.elements.statusUnit.value
        };
        updateCard(selectedCard, unit);
        savedEdits[selectedCard.dataset.unitId] = unit;
        feedback.textContent = 'Perubahan untuk ' + name + ' berhasil disimpan.';

        try {
            localStorage.setItem(storageKey, JSON.stringify(savedEdits));
        } catch {
            feedback.textContent = 'Perubahan untuk ' + name + ' diterapkan pada halaman ini.';
        }

        feedback.hidden = false;
        dialog.close();
    });
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
        const trigger = triggers.find((button) => button.closest('.unit-card').dataset.unitId === requestedUnit);
        if (trigger) {
            showEditUnit(trigger);
        }
    }
})();

