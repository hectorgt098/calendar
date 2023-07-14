let menuIn = document.getElementById("menu");
let enlaces = document.querySelector(".enlaces").children;
let enlaceArray = Array.from(enlaces);
let logo = document.getElementById("logoMed");
var fullPath = window.location.pathname;
var filename = fullPath.substring(fullPath.lastIndexOf("/"));
let menu = this.document.getElementById("menu");
console.log(filename);
if (filename === "/index.php" || filename === "/") {
  menu.style.position = "fixed";
} else {
  menu.style.position = "inherit";
  menu.style.backgroundColor = "#fff";
  enlaceArray.forEach((element) => {
    element.style.color = "var(--main-bg-color)";
    logo.src = "../../imagenes/svg/logoMorado.webp";
  });
}

if (filename === "/index.php" || filename === "/") {
  window.addEventListener("scroll", function () {
    let scrollactual = window.scrollY; // Mover esta línea dentro de la función del evento
    let menuIn = document.getElementById("menu");
    let enlaces = document.querySelector(".enlaces").children;
    let enlaceArray = Array.from(enlaces);
    let logo = document.getElementById("logoMed");

    if (scrollactual >= 170) {
      menuIn.style.backgroundColor = "#fff";
      menuIn.style.position = "fixed";
      enlaceArray.forEach((element) => {
        element.style.color = "var(--main-bg-color)";
        logo.src = "../../imagenes/svg/logoMorado.webp";
      });
    } else {
      menuIn.style.backgroundColor = "transparent";
      enlaceArray.forEach((element) => {
        element.style.color = "#f6f6f6";
        logo.src = "../../imagenes/svg/logoBlanco.webp";
      });
    }
  });
} else {
  window.addEventListener("scroll", function () {
    let scrollactual = window.scrollY; // Mover esta línea dentro de la función del evento
    if (scrollactual >= 170) {
        
      menuIn.style.position = "fixed";
      menuIn.style.top = "0";
      menuIn.style.animation = "slideUpNew .5s ease"
    } else {
      menuIn.style.position = "inherit";
      menuIn.style.animation = ""
    }
  });
}
