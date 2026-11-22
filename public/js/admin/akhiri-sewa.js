const receiptOverlay = document.querySelector('.akhiri-sewa-overlay');

receiptOverlay?.querySelector('.akhiri-sewa-close')?.addEventListener('click', () => {
    receiptOverlay.remove();
});
