(() => {
    const dialog = document.getElementById('editMenuDialog');
    const form = document.getElementById('editMenuForm');
    const upload = document.getElementById('editMenuUpload');
    const fileInput = document.getElementById('editMenuGambar');
    const preview = document.getElementById('editMenuPreview');
    let originalImage;

    document.querySelectorAll('[data-open-edit-menu]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            const row = trigger.closest('tr');
            const image = row.querySelector('.menu-image');
            form.reset();
            form.elements.namaMenu.value = row.querySelector('.menu-name').textContent.trim();
            form.elements.kategori.value = row.querySelector('.menu-category').textContent.trim().toLowerCase();
            form.elements.harga.value = row.cells[4].textContent.trim().replace(/^Rp\s*/, '');
            form.elements.stok.value = row.querySelector('.menu-stock').textContent.trim();
            originalImage = image.src;
            preview.src = originalImage;
            preview.alt = image.alt;
            dialog.showModal();
        });
    });

    function previewFile(file) {
        if (!file) return;

        if (!/^image\/(png|jpeg)$/.test(file.type) || file.size > 2 * 1024 * 1024) {
            fileInput.value = '';
            preview.src = originalImage;
            alert('Pilih gambar JPG atau PNG berukuran maksimal 2 MB.');
            return;
        }

        const reader = new FileReader();
        reader.addEventListener('load', () => {
            if (dialog.open && fileInput.files[0] === file) preview.src = reader.result;
        });
        reader.readAsDataURL(file);
    }

    fileInput.addEventListener('change', () => previewFile(fileInput.files[0]));

    for (const eventName of ['dragenter', 'dragover']) {
        upload.addEventListener(eventName, (event) => {
            event.preventDefault();
            upload.classList.add('is-dragover');
        });
    }

    upload.addEventListener('dragleave', () => upload.classList.remove('is-dragover'));
    upload.addEventListener('drop', (event) => {
        event.preventDefault();
        upload.classList.remove('is-dragover');
        const file = event.dataTransfer.files[0];
        if (!file) return;

        const selection = new DataTransfer();
        selection.items.add(file);
        fileInput.files = selection.files;
        previewFile(file);
    });

    for (const id of ['editMenuClose', 'editMenuBatal']) {
        document.getElementById(id).addEventListener('click', () => dialog.close());
    }

    dialog.addEventListener('click', (event) => {
        if (event.target !== dialog) return;

        const {left, right, top, bottom} = dialog.getBoundingClientRect();
        if (event.clientX < left || event.clientX > right || event.clientY < top || event.clientY > bottom) {
            dialog.close();
        }
    });
})();

