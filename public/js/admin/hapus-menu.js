(() => {
    const dialog = document.getElementById('hapusMenuDialog');
    let selectedRow;

    document.querySelectorAll('[data-open-hapus-menu]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            selectedRow = trigger.closest('tr');
            document.getElementById('hapusMenuNama').textContent =
                selectedRow.querySelector('.menu-name').textContent.trim();
            dialog.showModal();
        });
    });

    for (const id of ['hapusMenuClose', 'hapusMenuBatal']) {
        document.getElementById(id).addEventListener('click', () => dialog.close());
    }

    document.getElementById('hapusMenuHapus').addEventListener('click', () => {
        const tableBody = selectedRow.parentElement;
        const nextRow = selectedRow.nextElementSibling ?? selectedRow.previousElementSibling;
        dialog.close();
        selectedRow.remove();
        Array.from(tableBody.rows).forEach((row, index) => {
            row.cells[0].textContent = index + 1;
        });

        if (tableBody.rows.length === 0) {
            const emptyCell = tableBody.insertRow().insertCell();
            emptyCell.colSpan = 7;
            emptyCell.textContent = 'Belum ada menu.';
        }

        (nextRow?.querySelector('[data-open-hapus-menu]') ?? document.getElementById('openTambahMenu')).focus();
    });

    dialog.addEventListener('click', (event) => {
        if (event.target !== dialog) return;

        const {left, right, top, bottom} = dialog.getBoundingClientRect();
        if (event.clientX < left || event.clientX > right || event.clientY < top || event.clientY > bottom) {
            dialog.close();
        }
    });
})();

