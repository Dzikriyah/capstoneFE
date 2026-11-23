(() => {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const open = document.getElementById('btnOpenSidebar');
    const close = document.getElementById('btnCloseSidebar');

    function setMenu(expanded) {
        sidebar.classList.toggle('active', expanded);
        overlay.classList.toggle('active', expanded);
        document.body.classList.toggle('no-scroll', expanded);
        open.setAttribute('aria-expanded', String(expanded));
        (expanded ? close : open).focus();
    }

    open.setAttribute('aria-expanded', 'false');
    open.setAttribute('aria-controls', 'sidebar');
    open.addEventListener('click', () => setMenu(true));
    close.addEventListener('click', () => setMenu(false));
    overlay.addEventListener('click', () => setMenu(false));
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && sidebar.classList.contains('active')) {
            setMenu(false);
        }
    });
})();

