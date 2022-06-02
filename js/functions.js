const   sidebar = document.querySelector('.sidebar'),
        sidebarBtn = document.querySelector('.sidebar-btn');



    sidebarBtn.addEventListener('click', () => {
        sidebar.classList.toggle('open');
    });