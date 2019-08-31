// Setup hamburger menu
var hamburger = document.querySelector('.m-global-navigation__menu-button');
var expanded = window.matchMedia('(min-width:1200px)').matches;
hamburger.setAttribute('aria-expanded', expanded);
var menu = hamburger.nextElementSibling;
menu.hidden = !expanded;
hamburger.addEventListener("click", function() {
    expanded = hamburger.getAttribute('aria-expanded') === 'true' || false;
    hamburger.setAttribute('aria-expanded', !expanded);
    menu.hidden = expanded;  
});
window.addEventListener("resize", function() {
    if (window.matchMedia('(min-width:1200px)').matches) {
        expanded = true;
        menu.hidden = false;
        hamburger.setAttribute('aria-expanded', expanded);
    }
});

// Focus management
document.addEventListener("mousedown", function() {
    document.body.classList.remove('keypress');
});
document.addEventListener("keydown", function() {
    document.body.classList.add('keypress');
});

// Enable javascript functionality
document.body.classList.add("js");
console.log("Javascipt enabled");