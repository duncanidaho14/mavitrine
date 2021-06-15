$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
});

var competences = document.addEventListener(".determinate", info);
console.log(competences);
function info () {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 650) {
            competences.classList.add('up');
        }else {
            competences.classList.remove('up');
        }
    });
}

