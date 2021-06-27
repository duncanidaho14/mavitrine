$(document).ready(function(){
    $('.sidenav').sidenav();
    $(".button-collapse").sidenav();
    $('.carousel').carousel();
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy();
});


let competences = document.querySelector(".competences");
let progress = document.querySelectorAll(".progress");
let determinate = document.querySelectorAll(".determinate");
const symfony = document.querySelector('.determinate.symfony');
const react = document.querySelector(".determinate.react");
const mysql = document.querySelector(".determinate.mysql");
const php = document.querySelector(".determinate.php");
const javascript = document.querySelector(".determinate.javascript");
const mongodb = document.querySelector(".determinate.mongodb");
const progressbar = document.querySelector(".progress.bar");

window.addEventListener('scroll', () => {
    
    if (window.scrollY > 1499) {
        competences.classList.add('up');
        setTimeout(() => {
            symfony.style.width = symfony.getAttribute('data-done') + '%';
            symfony.style.color = 'white';
            php.style.width = php.getAttribute('data-done') + '%';
            php.style.color = 'white';
            mysql.style.width = mysql.getAttribute('data-done') + '%';
            mysql.style.color = 'white';
            javascript.style.width = javascript.getAttribute('data-done') + '%';
            javascript.style.color = '#1304FB';
            react.style.width = react.getAttribute('data-done') + '%';
            react.style.color = '#ff9f41';
            mongodb.style.width = mongodb.getAttribute('data-done') + '%';
            mongodb.style.color = 'white';
        }, 500);
    }else {
        competences.classList.remove('up');
        setTimeout(() => {
            symfony.style.width = '0px';
            symfony.style.color = 'white';
            php.style.width = '0px';
            php.style.color = 'white';
            mysql.style.width = '0px';
            mysql.style.color = 'white';
            javascript.style.width = '0px';
            javascript.style.color = '#1304FB';
            react.style.width = '0px';
            react.style.color = '#ff9f41';
            mongodb.style.width = '0px';
            mongodb.style.color = 'white';
        }, 500);
    }
});

/**
 * Permet d'afficher l'onglet d'une couleur différente
 * Ne marche que sur chrome Android
 * @returns Color
 */
function getRandomRGBValue() {
    return Math.min(Math.floor(Math.random() * 255 + 1), 255);
}

function getRandomColor() {
    var r = getRandomRGBValue(),
        g = getRandomRGBValue(),
        b = getRandomRGBValue();
    return "#" + (((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1));
}

function changeThemeColor() {
    var metaThemeColor = document.querySelector("meta[name=theme-color]");
    metaThemeColor.setAttribute("content", getRandomColor());
    setTimeout(function () {
        changeThemeColor();
    }, 3000);
}

changeThemeColor();


// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('theme', themeName);
    document.documentElement.className = themeName;
}
// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}
// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-dark');
    } else {
        setTheme('theme-light');
    }
})();