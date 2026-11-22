const tambahUnitDialog = document.getElementById('tambahUnitDialog');
const openTambahUnit = document.getElementById('openTambahUnit');

openTambahUnit.addEventListener('click', () => tambahUnitDialog.showModal());

tambahUnitDialog.querySelectorAll('[data-close-tambah-unit]').forEach((button) => {
    button.addEventListener('click', () => tambahUnitDialog.close());
});

tambahUnitDialog.addEventListener('click', (event) => {
    if (event.target !== tambahUnitDialog) {
        return;
    }

    const bounds = tambahUnitDialog.getBoundingClientRect();

    if (event.clientX < bounds.left || event.clientX > bounds.right ||
        event.clientY < bounds.top || event.clientY > bounds.bottom) {
        tambahUnitDialog.close();
    }
});

const unitManagementUrl = new URL(window.location.href);
if (unitManagementUrl.searchParams.has('tambah-unit')) {
    unitManagementUrl.searchParams.delete('tambah-unit');
    window.history.replaceState(null, '', unitManagementUrl);
    tambahUnitDialog.showModal();
}

