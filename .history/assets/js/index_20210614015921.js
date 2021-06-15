$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
});

const competences = document.addEventListener('.bar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 650) {
        competences.classList.add('up');
    }else {
        competences.classList.remove('up');
    }
});