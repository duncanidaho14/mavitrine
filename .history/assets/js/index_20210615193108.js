$(document).ready(function(){
    $(".dropdown-trigger").dropdown();
    $('.sidenav').sidenav();
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

window.addEventListener('scroll', (e) => {
    
    if (window.scrollY > 650) {
        competences.classList.add('up');
        symfony.style.width = symfony.getAttribute('data-done')
        loader();
    }else {
        competences.classList.remove('up');
    }
});

// function loader() {
//     for (let i = 0; i < determinate.length; i++) {
//         const element = determinate[i];

//         //console.log(element);
//         setTimeout(() => {
//             symfony.style.width = element.getAttribute('data-done') + '%';
//             console.log(symfony.style.width)

//         }, 1500);

//         setTimeout(() => {
//             react.style.width = element.getAttribute('data-done') + '%';
//             //console.log(react.style.width);
//             mysql.style.width = element.getAttribute('data-done') + '%';
//             //console.log(mysql.style.width);
//             php.style.width = element.getAttribute('data-done') + '%';
//             javascript.style.width = element.getAttribute('data-done') + '%';
//             mongodb.style.width = element.getAttribute('data-done') + '%';
//         }, 2600);

//     }
    
// }

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