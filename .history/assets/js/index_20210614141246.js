$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
});

console.log(competences);

var competences = document.querySelectorAll(".bar");
window.addEventListener('scroll', () => {
    if (window.scrollY > 650) {
        console.log(competences);
        competences.classList.add('up');
    }else {
        competences.classList.remove('up');
    }
});


