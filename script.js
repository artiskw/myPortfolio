jQuery(function ($) {
    jQuery(document).ready(function () {
    // Email form
        $(".approve-email-btn").on("click", function(e) {
            e.preventDefault();
            var email_address = $("form input[name='email']").val();
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            if(pattern.test(email_address) != true) {
                $(".notifications").html("Please enter valid e-mail!");
            } else if(email_address == "") {
                $(".notifications").html("Please fill out all fields!");
            } else {
                $(".notifications").html("Email submitted!");
                $("form input[name='email']").val("");
                $('#terms-and-conditions').prop('checked', false);
             
            }
        });
    });
})

/*Nav Scrolled*/

const navbar = document.querySelector('.navbar_container'); //atlasam elementu 
const sectionOne = document.querySelector('.home_content'); 

const sectionOneOptions = {
    rootMargin: "-200px 0px 0px 0px" //150px no augass ieslegsies 
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




  