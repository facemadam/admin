window.addEventListener('DOMContentLoaded', (event) => {
    const sidebarToggle = document.body.querySelector('#sidebar-toggle');
    if (sidebarToggle) {
        if (localStorage.getItem('sidebar-toggle') === 'true') {
            document.body.classList.toggle('sidebar-toggled');
        }
        sidebarToggle.addEventListener('click', (event) => {
            event.preventDefault();
            document.body.classList.toggle('sidebar-toggled');
            localStorage.setItem(
                'sidebar-toggle',
                document.body.classList.contains('sidebar-toggled')
            );
        });
    }
});
