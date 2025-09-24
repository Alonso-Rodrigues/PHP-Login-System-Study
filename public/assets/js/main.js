const btnMobile = document.getElementById('btn-mobile');

function toggleMenu() {
    const nav = document.getElementById('nav-container');
    nav.classList.toggle('active');

}

btnMobile.addEventListener('click', toggleMenu);
