let carrusel = document.getElementById("carrusel");
let popupCarrusel = document.querySelector(".popupCar");
let imagenescar = [
  "../imagenes/Fotos/img1.webp",
  "../imagenes/Fotos/img2.webp",
  "../imagenes/Fotos/img3.webp",
  "../imagenes/Fotos/img4.webp",
  "../imagenes/Fotos/img5.webp",
  "../imagenes/Fotos/img6.webp",
  "../imagenes/Fotos/img7.webp",
  "../imagenes/Fotos/img8.webp",
  "../imagenes/Fotos/img9.webp",
  "../imagenes/Fotos/img10.webp",
  "../imagenes/Fotos/img11.webp",
  "../imagenes/Fotos/img12.webp",
];

for (let i = 0; i < 20; i++) {
  let spanElement = document.createElement("span");
  let randomIndex = Math.floor(Math.random() * imagenescar.length);
  let randomImage = imagenes[randomIndex];
  spanElement.style.backgroundImage = `url(${randomImage})`;
  carrusel.appendChild(spanElement);
  spanElement.addEventListener("click", zoomI);
}

function zoomI() {
  popupCarrusel.style.display = "flex";
  let imagenPoPa = document.createElement("img");
  let prefijo = this.style.backgroundImage;
  var urlConPrefijo = prefijo.replace('url("', "").replace('")', "");
  imagenPoPa.src = urlConPrefijo;
  imagenPoPa.className = "imagenPoPa";
  popupCarrusel.appendChild(imagenPoPa);

  popupCarrusel.addEventListener("click", cerrarCar);

  document.addEventListener('keydown',function(event){
    if(event.key === 'Escape'){
      cerrarCar();
    }
  })

  function cerrarCar() {
    popupCarrusel.style.display = "none";
    popupCarrusel.removeChild(imagenPoPa);
  }
}
