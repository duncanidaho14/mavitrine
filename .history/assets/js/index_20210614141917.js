$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
});


let competences = document.querySelectorAll(".determinate");
console.log(competences);
window.addEventListener('scroll', (e) => {
    e.stopPropagation();
    if (window.scrollY > 650) {
        competences.classList.add('up');
    }else {
        competences.classList.remove('up');
    }
});

