(() => {
    const dialog = document.getElementById('userNotificationDialog');

    document.addEventListener('click', (event) => {
        if (event.target.closest('[data-open-user-notification]') && !dialog.open) {
            dialog.showModal();
        }
    });

    dialog.querySelectorAll('#notificationClose, #notificationBack').forEach((button) => {
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
})();

