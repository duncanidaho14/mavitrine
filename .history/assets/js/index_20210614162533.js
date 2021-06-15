$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.scrollspy').scrollSpy();
});


let competences = document.querySelector(".competences");
let progress = document.querySelectorAll(".progress");
let determinate = document.querySelectorAll(".determinate");
const symfony = document.querySelector('.symfony');
const react = document.querySelector(".react");
const mysql = document.querySelector(".mysql");
const php = document.querySelector(".php");
const javascript = document.querySelector(".javascript");
const mongodb = document.querySelector(".mongodb");

window.addEventListener('scroll', () => {
    
    if (window.scrollY > 650) {
        competences.classList.add('up');
        for (let i = 0; i < determinate.length; i++) {
            const element = determinate[i];
            //console.log(element);

            setTimeout(() => {
                symfony.style.width = element.getAttribute('data-done') + '% ';
                symfony.style.height = '20px';
                symfony.style.height = '20px';
                react.style.width = element.getAttribute('data-done') + '% ';
                mysql.style.width = element.getAttribute('data-done') + '% ';
                php.style.width = element.getAttribute('data-done') + '% ';
                javascript.style.width = element.getAttribute('data-done') + '% ';
                mongodb.style.width = element.getAttribute('data-done') + '% ';

            }, 1500);
        }
    }else {
        competences.classList.remove('up');
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