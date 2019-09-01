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

// Setup menu dropdowns to open on click
var globalNav = document.querySelectorAll('.m-global-navigation__list-item');
for (var n = 0; n < globalNav.length; n++) {
    var subNav = globalNav[n].querySelector('.m-global-navigation__sub-menu');
    if (!subNav) {
        continue;
    }

    var navLink = globalNav[n].querySelector('.a-menu-link');
    if (navLink) {
        navLink.setAttribute("aria-haspopup", "true");
        navLink.setAttribute("aria-expanded", "false");
    }

    globalNav[n].addEventListener("click", function(e) {
        var subNav = e.target.parentElement.querySelector('.m-global-navigation__sub-menu');
        if (!subNav) {
            return false;
        }

        var openNav = document.querySelector('.m-global-navigation__list-item--active');
        if (openNav) {
            var navLink = openNav.querySelector('.a-menu-link');
            openNav.classList.remove('m-global-navigation__list-item--active');
            navLink.setAttribute("aria-expanded", "false");

            if (openNav === e.currentTarget) {
                e.preventDefault();
                e.stopImmediatePropagation();
                return false;
            }
        }

        e.currentTarget.classList.toggle('m-global-navigation__list-item--active');
        var currentLink = e.currentTarget.querySelector('.a-menu-link');
        currentLink.setAttribute("aria-expanded", "true");
        e.preventDefault();
        e.stopImmediatePropagation();
    });
}

// Hide open menu when user clicks away from the menu
document.addEventListener("click", function(e) {
    if (!e.target.classList.contains('m-global-navigation__list-item')) {
        var openNav = document.querySelector('.m-global-navigation__list-item--active');
        if (!openNav) {
            return;
        }
        openNav.classList.remove('m-global-navigation__list-item--active');
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