$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
});


var competences = document.querySelectorAll(".bar");
window.addEventListener('scroll', (e) => {
    e.stopPropagation();
    if (window.scrollY > 650) {
        console.log(competences);
        competences.classList.add('up');
    }else {
        competences.classList.remove('up');
    }
});


