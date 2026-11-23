(() => {
    const filters = document.querySelectorAll('[data-order-filter]');
    const rows = document.querySelectorAll('[data-order-status]');
    const empty = document.querySelector('[data-order-empty]');

    filters.forEach((filter) => {
        filter.addEventListener('click', () => {
            const status = filter.dataset.orderFilter;

            filters.forEach((button) => {
                const active = button === filter;
                button.classList.toggle('active', active);
                button.setAttribute('aria-pressed', String(active));
            });

            let hasMatches = false;
            rows.forEach((row) => {
                row.hidden = status !== 'semua' && row.dataset.orderStatus !== status;
                hasMatches ||= !row.hidden;
            });

            empty.hidden = hasMatches;
        });
    });
})();

