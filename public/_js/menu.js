
document.querySelectorAll('.menu-admin > li > a').forEach(enlace => {
    enlace.addEventListener('click', function(e) {
        e.preventDefault();
        const liPadre = this.parentElement;
        liPadre.classList.toggle('active');
    });
});