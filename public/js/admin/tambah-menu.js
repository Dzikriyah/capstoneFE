(() => {
    const dialog = document.getElementById('tambahMenuDialog');
    const form = document.getElementById('tambahMenuForm');
    const upload = document.getElementById('tambahMenuUpload');
    const fileIn = document.getElementById('tambahMenuGambar');
    const preview = document.getElementById('tambahMenuPreview');
    const MAX_SIZE = 2 * 1024 * 1024;

    document.getElementById('openTambahMenu').addEventListener('click', () => dialog.showModal());
    document.getElementById('tambahMenuClose').addEventListener('click', () => dialog.close());
    document.getElementById('tambahMenuBatal').addEventListener('click', () => dialog.close());

    dialog.addEventListener('click', (event) => {
        if (event.target !== dialog) {
            return;
        }

        const {left, right, top, bottom} = dialog.getBoundingClientRect();
        if (event.clientX < left || event.clientX > right || event.clientY < top || event.clientY > bottom) {
            dialog.close();
        }
    });

    dialog.addEventListener('close', () => {
        form.reset();
        preview.hidden = true;
        preview.removeAttribute('src');
        upload.classList.remove('is-dragover');
    });

    const url = new URL(window.location.href);
    if (url.searchParams.has('tambah-menu')) {
        url.searchParams.delete('tambah-menu');
        window.history.replaceState(null, '', url);
        dialog.showModal();
    }

    // Preview gambar sederhana
    function showPreview(file) {
        preview.hidden = true;
        preview.removeAttribute('src');
        if (!file) return;

        if (!/^image\/(png|jpeg)$/.test(file.type)) {
            alert('Format file harus JPG atau PNG.');
            fileIn.value = '';
            return;
        }
        if (file.size > MAX_SIZE) {
            alert('Ukuran file maksimal 2MB.');
            fileIn.value = '';
            return;
        }

        var reader = new FileReader();
        reader.onload = function (ev) {
            if (fileIn.files[0] !== file) return;
            preview.src = ev.target.result;
            preview.hidden = false;
        };
        reader.readAsDataURL(file);
    }

    if (fileIn) {
        fileIn.addEventListener('change', function () {
            showPreview(fileIn.files[0]);
        });
    }

    // Drag & drop
    if (upload) {
        ['dragenter', 'dragover'].forEach(function (evt) {
            upload.addEventListener(evt, function (e) {
                e.preventDefault();
                upload.classList.add('is-dragover');
            });
        });

        ['dragleave', 'drop'].forEach(function (evt) {
            upload.addEventListener(evt, function (e) {
                e.preventDefault();
                upload.classList.remove('is-dragover');
            });
        });

        upload.addEventListener('drop', function (e) {
            var file = e.dataTransfer && e.dataTransfer.files[0];
            if (file) {
                try {
                    var dt = new DataTransfer();
                    dt.items.add(file);
                    fileIn.files = dt.files;
                } catch (err) { /* browser lama: abaikan */ }
                showPreview(file);
            }
        });
    }

})();
