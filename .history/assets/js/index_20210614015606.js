$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
});

const competences = document.addEventListener('.competences')
window.addEventListener('scroll', () => {
    if (window.scrollY > 790) {
        competences.classList.add('up');
    }else {
        comp
    }
});