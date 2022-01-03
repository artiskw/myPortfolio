//nav_scrolled
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
            navbar.classList.remove('nav_scrolled')
          }
        });
    }, 
sectionOneOptions);

sectionOneObserver.observe(sectionOne);

// Mobile menu
    document.querySelector('.nav_menu_icon').onclick = function (event) {
      document.querySelector('body').classList.toggle('active');
      document.querySelector('.home_content').classList.toggle('active')
      document.querySelector('.navbar_active nav').classList.toggle('active');
  }