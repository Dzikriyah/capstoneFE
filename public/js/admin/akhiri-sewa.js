(() => {
    const dialog = document.getElementById('akhiriSewaDialog');
    const trigger = document.getElementById('openAkhiriSewa');

    trigger.addEventListener('click', () => dialog.showModal());
    dialog.querySelector('.akhiri-sewa-close').addEventListener('click', () => dialog.close());

    dialog.addEventListener('click', (event) => {
        if (event.target !== dialog) return;

        const {left, right, top, bottom} = dialog.getBoundingClientRect();
        if (event.clientX < left || event.clientX > right || event.clientY < top || event.clientY > bottom) {
            dialog.close();
        }
    });

    document.addEventListener('rental-duration-saved', ({detail}) => {
        for (const field of ['end', 'duration', 'extra', 'total']) {
            dialog.querySelectorAll('[data-receipt-' + field + ']').forEach((element) => {
                element.textContent = detail[field];
            });
        }
    });


    const receipt = dialog.querySelector('.akhiri-sewa-receipt');

    function downloadReceipt() {
        const receiptRows = receipt.querySelectorAll('.akhiri-sewa-receipt-list > div, .akhiri-sewa-total');
        const transaction = receipt.querySelector('.akhiri-sewa-receipt-transaction').textContent.trim();
        const lines = [
            'IB GAMING',
            receipt.querySelector('h3').textContent.trim(),
            transaction,
            '',
            ...Array.from(receiptRows, (row) =>
                row.querySelector('span').textContent.trim() + ': ' + row.querySelector('strong').textContent.trim()
            ),
            '',
            receipt.querySelector('.akhiri-sewa-payment-method').textContent.trim()
        ];
        const content = lines.map((line, index) => {
            const pdfText = line.normalize('NFKD').replace(/[\u0300-\u036f]/g, '')
                .replace(/[^\x20-\x7E]/g, '?').replace(/[\\()]/g, '\\$&');
            const size = index < 2 ? 13 : 10;
            return 'BT /F1 ' + size + ' Tf 24 ' + (304 - index * 19) + ' Td (' + pdfText + ') Tj ET';
        }).join('\n') + '\n';
        const objects = [
            '<< /Type /Catalog /Pages 2 0 R >>',
            '<< /Type /Pages /Kids [3 0 R] /Count 1 >>',
            '<< /Type /Page /Parent 2 0 R /MediaBox [0 0 300 330] /Resources << /Font << /F1 4 0 R >> >> /Contents 5 0 R >>',
            '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica >>',
            '<< /Length ' + content.length + ' >>\nstream\n' + content + 'endstream'
        ];

        // The text above is ASCII, so character indices are also PDF byte offsets.
        let pdf = '%PDF-1.4\n';
        const offsets = objects.map((object, index) => {
            const offset = pdf.length;
            pdf += (index + 1) + ' 0 obj\n' + object + '\nendobj\n';
            return offset;
        });
        const xref = pdf.length;
        pdf += 'xref\n0 6\n0000000000 65535 f \n' +
            offsets.map((offset) => String(offset).padStart(10, '0') + ' 00000 n \n').join('') +
            'trailer\n<< /Size 6 /Root 1 0 R >>\nstartxref\n' + xref + '\n%%EOF\n';

        const download = document.createElement('a');
        const url = URL.createObjectURL(new Blob([pdf], {type: 'application/pdf'}));
        const id = transaction.split(':').at(-1).trim().replace(/[^a-zA-Z0-9_-]/g, '');
        download.href = url;
        download.download = 'struk-sewa-' + id + '.pdf';
        document.body.appendChild(download);
        download.click();
        download.remove();
        setTimeout(() => URL.revokeObjectURL(url), 1000);
    }

    dialog.querySelector('[data-print-receipt]').addEventListener('click', () => {
        window.print();
    });
    dialog.querySelector('[data-download-receipt]').addEventListener('click', downloadReceipt);

    const url = new URL(window.location.href);
    if (url.searchParams.has('akhiri-sewa')) {
        url.searchParams.delete('akhiri-sewa');
        window.history.replaceState(null, '', url);
        dialog.showModal();
    }
})();

