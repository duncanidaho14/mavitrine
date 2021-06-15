$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
});

console.log(competences);

window.addEventListener('scroll', () => {
    var competences = document.querySelectorAll(".bar");
    if (window.scrollY > 650) {
        console.log(competences);
        competences.classList.add('up');
    }else {
        competences.classList.remove('up');
    }
});


