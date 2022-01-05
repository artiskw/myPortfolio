/*Nav Scrolled*/

const navbar = document.querySelector('.navbar_container'); //atlasam elementu 
const sectionOne = document.querySelector('.home_content'); 

const sectionOneOptions = {
    rootMargin: "-150px 0px 0px 0px" //150px no augass ieslegsies 
};

const sectionOneObserver = new IntersectionObserver 
(function(
    entries,
    sectionOneObserver
    ) {

        entries.forEach(entry => {
          if (!entry.isIntersecting) {
              navbar.classList.add('nav_scrolled');
             
          } else {
            navbar.classList.remove('nav_scrolled');
          }
        });
    }, 
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

/* Nav Menu */

let hamburger = document.querySelector('.hamburger_icon'); // //atlasam elementu 
let navMenu = document.querySelector('nav'); // //atlasam elementu 


hamburger.addEventListener("click", mobileMenu); //document.addEventListener() pievieno dokumentam notikumu apdarinātāju.
function mobileMenu() { //zivedotai funkcijai mobileMenu()
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active"); //tad, kad bus kliskis uz hamburger, atversis navMenu
}


let navLink = document.querySelectorAll('a');

navLink.forEach(n => n.addEventListener("click", closeMenu)); //forEach()Metode izsauc funkciju katram elementam masīva.

function closeMenu() { //izvedojam funkciju closeMenu()
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');//tad, kad bus kliskis uz hamburger, aizversies navMenu
  }




