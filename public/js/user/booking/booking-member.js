document.addEventListener("DOMContentLoaded", () => {
    const allowedTypes = ["image/jpeg", "image/png"];

    for (const field of ["ktp", "face"]) {
        const input = document.getElementById(field + "File");
        const maxSizeMb = Number(input.dataset.maxMb);
        const maxFileSize = maxSizeMb * 1024 * 1024;
        const status = document.getElementById(field + "FileName");
        const preview = document.getElementById(field + "FilePreview");
        const removeButton = document.getElementById(field + "FileRemove");
        let previewUrl;

        function clearPreview() {
            preview.hidden = true;
            removeButton.hidden = true;
            preview.removeAttribute("src");
            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
                previewUrl = undefined;
            }
        }

        removeButton.addEventListener("click", () => {
            input.value = "";
            clearPreview();
            status.textContent = "";
            input.focus();
        });

        input.addEventListener("change", () => {
            clearPreview();
            status.textContent = "";
            const file = input.files[0];
            if (!file) return;

            if (!allowedTypes.includes(file.type) || file.size > maxFileSize) {
                input.value = "";
                status.textContent = "Pilih foto JPG atau PNG berukuran maksimal " + maxSizeMb + " MB.";
                return;
            }

            previewUrl = URL.createObjectURL(file);
            preview.src = previewUrl;
        });

        preview.addEventListener("load", () => {
            if (previewUrl && preview.src === previewUrl) {
                preview.hidden = false;
                removeButton.hidden = false;
                status.textContent = input.files[0].name;
            }
        });

        preview.addEventListener("error", () => {
            if (!previewUrl) return;
            clearPreview();
            input.value = "";
            status.textContent = "Gambar tidak bisa dibuka. Silakan pilih file lain.";
        });
    }

    document.getElementById("joinMemberButton")?.addEventListener("click", () => {
        window.location.href = "/user/booking/booking-form";
    });
});

