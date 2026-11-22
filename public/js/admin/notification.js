(() => {
    const dialog = document.getElementById('adminNotificationDialog');
    const trigger = document.getElementById('openAdminNotification');

    trigger.addEventListener('click', () => dialog.showModal());

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

