/* 
MENU MOBILE
*/

const btnMobile = document.querySelector('.btn-menu');
const body = document.querySelector("body")
const navBar = document.querySelector('.navbar')
const iconMobileMenu = document.querySelector(".icon-mobile-btn")
btnMobile.onclick = function(){
  if(body.classList.contains("navbar-is-closed")){
      body.classList.remove("navbar-is-closed")
      body.classList.add("navbar-is-open")
  }else if(body.classList.contains("navbar-is-open")){
      body.classList.remove("navbar-is-open")
      body.classList.add("navbar-is-closed")
  }

  if(body.classList.contains("navbar-is-open")){
      iconMobileMenu.classList.remove("fa-bars");
      iconMobileMenu.classList.add("fa-xmark")
  }else if(!body.classList.contains("navbar-is-open")){
      iconMobileMenu.classList.remove("fa-xmark");
      iconMobileMenu.classList.add("fa-bars")
  }
}

/*
AFFICHAGE OU NON DE LA NAV AU FOOTER
*/

const header = document.querySelector("header");
window.addEventListener('scroll' , () => {
  const {scrollTop, scrollHeight, clientHeight} = document.documentElement;
  let footerPos = scrollHeight - footer.offsetHeight;
  let scrolling = scrollTop + clientHeight;

  if(footerPos < scrolling){
    header.classList.add("header-invisible")
  }else{
    header.classList.remove("header-invisible")
  }
})

/*
TYPE WRITER
*/

var profiles = document.getElementById("profiles");

var typewriter = new Typewriter(profiles, {
    loop:true,
});

typewriter
    .typeString("Full-Stack Developer !")
    .pauseFor(1000)
    .deleteChars(22)
    .pauseFor(500)
    .typeString("Web Developer !")
    .pauseFor(1000)
    .deleteChars(15)
    .pauseFor(500)
    .typeString("Front-End Developer !")
    .pauseFor(1000)
    .deleteChars(22)
    .pauseFor(500)
    .typeString("Web Integrator !")
    .pauseFor(1000)
    .deleteChars(17)
    .pauseFor(500)
    .start();
