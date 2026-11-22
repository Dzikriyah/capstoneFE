(() => {
    const dialog = document.getElementById('hapusUnitDialog');
    let selectedCard;

    document.querySelectorAll('[data-open-hapus-unit]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            selectedCard = trigger.closest('.unit-card');
            dialog.querySelector('.hapus-unit-unit-title').textContent =
                selectedCard.querySelector('.unit-name').textContent.trim();
            dialog.querySelector('.hapus-unit-unit-description').textContent =
                selectedCard.querySelector('.unit-description').textContent.trim();

            const cardSpecs = selectedCard.querySelectorAll('.unit-spec span');
            dialog.querySelectorAll('.hapus-unit-spec span').forEach((spec, index) => {
                spec.textContent = cardSpecs[index].textContent.trim();
            });

            dialog.showModal();
        });
    });

    dialog.querySelectorAll('[data-close-hapus-unit]').forEach((button) => {
        button.addEventListener('click', () => dialog.close());
    });

    document.getElementById('hapusUnitConfirm').addEventListener('click', () => {
        const grid = selectedCard.parentElement;
        const nextCard = selectedCard.nextElementSibling ?? selectedCard.previousElementSibling;
        dialog.close();
        selectedCard.remove();

        if (!grid.querySelector('.unit-card')) {
            const emptyState = document.createElement('p');
            emptyState.setAttribute('role', 'status');
            emptyState.textContent = 'Belum ada unit PlayStation.';
            grid.append(emptyState);
        }

        (nextCard?.querySelector('[data-open-hapus-unit]') ?? document.getElementById('openTambahUnit')).focus();
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
})();

