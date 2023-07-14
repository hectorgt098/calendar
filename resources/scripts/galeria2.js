document.addEventListener("DOMContentLoaded", function () {
  let ant = document.getElementById("ant");
  let gal = document.querySelector(".gallery");
  let titlegal = document.getElementById("titlegal");
  let mapa = document.querySelector(".centrarmapa");
  let imagenesGal = document.querySelector(".imagenesGal");
  let comunas = Array.from(mapa.children);
  let currentIndex = 0; // Índice de la imagen actual

  comunas.forEach((comuna) => {
    comuna.onclick = verComuna;
  });

  function verComuna() {
    if (this.id === "alt") {
      titlegal.innerText = "Altavista";
      imagenesGal.innerHTML = "";
      imgAlt.forEach((imagen) => {
        const rutaCompleta = `${rutaAlt}/${imagen}`;
        let img = document.createElement("img");
        img.src = rutaCompleta;
        imagenesGal.appendChild(img);
        img.addEventListener("click", zoom);
        function altoImagenes() {
          let imagmax = img;
          let alto = imagmax.clientHeight;
          console.log(alto);
          if (img.clientHeight >= 300) {
            img.style.gridRow = "8";
          }
        }
        var tiempoEstimado = 2500;
      
        setTimeout(altoImagenes, tiempoEstimado);
      });
    } else if (this.id === "ant") {
      titlegal.innerText = "San Antonio de Prado";
      imagenesGal.innerHTML = "";
      imgSan.forEach((imagen) => {
        const rutaCompleta = `${ruta}/${imagen}`;
        let img = document.createElement("img");
        img.src = rutaCompleta;
        imagenesGal.appendChild(img);
        img.addEventListener("click", zoom);
        function altoImagenes() {
          let imagmax = img;
          let alto = imagmax.clientHeight;
          console.log(alto);
          if (img.clientHeight >= 300) {
            img.style.gridRow = "8";
          }
        }
        var tiempoEstimado = 2500;
      
        setTimeout(altoImagenes, tiempoEstimado);
      });
    } else if (this.id === "jav") {
      titlegal.innerText = "San Javier";
      imagenesGal.innerHTML = "";
      imgJav.forEach((imagen) => {
        const rutaCompleta = `${rutaJav}/${imagen}`;
        let img = document.createElement("img");
        img.src = rutaCompleta;
        imagenesGal.appendChild(img);
        img.addEventListener('click', zoom);
        /* img.addEventListener("click", expandirImagen); */
        function altoImagenes() {
          let imagmax = img;
          let alto = imagmax.clientHeight;
          console.log(alto);
          if (img.clientHeight >= 300) {
            img.style.gridRow = "8";
          }
        }
        var tiempoEstimado = 2500;
      
        setTimeout(altoImagenes, tiempoEstimado);
      });
    }
    currentIndex = 0; // Restablecer el índice a 0 al cambiar de comuna
    view();
  }

  function pintar() {
    ant.firstElementChild.src = "../imagenes/mapa/sanantoniop.svg";
  }

  function view() {
    gal.style.display = "flex";
    pintar();
    const scrollPosition = gal.scrollHeight * 0.6;
    window.scrollTo({
      top: scrollPosition,
      behavior: "smooth",
    });
  }

  function zoom() {
    let modal = document.querySelector('.modalGalery');
    let imagenPop = document.createElement("img");
    let url = this.src;
    const rutaRelativa = "../" + url.substring(url.indexOf("imagenes"));
    imagenPop.src = rutaRelativa;
    imagenPop.style.width = "60%";
    modal.appendChild(imagenPop);
    modal.style.display = "flex";
    modal.onclick = cerrarModal;
  
    function cerrarModal() {
      modal.style.display = "none";
      modal.removeChild(imagenPop);
    }
  }
  

  /* function expandirImagen() {
    if (this.requestFullscreen) {
      this.requestFullscreen();
    } else if (this.mozRequestFullScreen) {
      this.mozRequestFullScreen();
    } else if (this.webkitRequestFullscreen) {
      this.webkitRequestFullscreen();
    } else if (this.msRequestFullscreen) {
      this.msRequestFullscreen();
    }
  }

  function siguienteImagen() {
    const imagenes = document.querySelectorAll(".imagenesGal img");
    const totalImagenes = imagenes.length;
    currentIndex = (currentIndex + 1) % totalImagenes;
    imagenes[currentIndex].click();
  }

  function imagenAnterior() {
    const imagenes = document.querySelectorAll(".imagenesGal img");
    const totalImagenes = imagenes.length;
    currentIndex = (currentIndex - 1 + totalImagenes) % totalImagenes;
    imagenes[currentIndex].click();
  }

  document.addEventListener("keydown", function (event) {
    if (event.key === "ArrowRight") {
      siguienteImagen();
    } else if (event.key === "ArrowLeft") {
      imagenAnterior();
    }
  }); */

  var ruta = "../imagenes/galeria/SanAntonio";
  var rutaAlt = "../imagenes/galeria/Altavista";
  var rutaJav = "../imagenes/galeria/SanJavier";
  const imgSan = [
    "san1.webp",
    "san2.webp",
    "san3.webp",
    "san4.webp",
    "san5.webp",
    "san6.webp",
    "san7.webp",
    "san8.webp",
    "san9.webp",
    "san10.webp",
    "san11.webp",
  ];

  const imgAlt = [
    "alt1.webp",
    "alt2.webp",
    "alt3.webp",
    "alt4.webp",
    "alt5.webp",
    "alt6.webp",
    "alt7.webp",
    "alt8.webp",
    "alt9.webp",
    "alt10.webp",
    "alt11.webp",
    "alt12.webp",
    "alt13.webp",
  ];

  const imgJav = [
    "jav1.webp",
    "jav2.webp",
    "jav3.webp",
    "jav4.webp",
    "jav5.webp",
    "jav6.webp",
    "jav7.webp",
    "jav8.webp",
    "jav9.webp",
    "jav10.webp",
    "jav11.webp",
    "jav12.webp",
    "jav13.webp",
    "jav14.webp",
    "jav15.webp",
    "jav16.webp",
    "jav17.webp",
  ];

  let galerycar = document.querySelector(".galerym");
imgSan.slice(0, 3).forEach((imagen, index) => {
  const rutaCompleta = `${ruta}/${imagen}`;
  let img = document.createElement("img");
  img.src = rutaCompleta;
  galerycar.appendChild(img);
  

  // Aplicar estilo al los elementos del collage
  if (index === 2) {
    img.style.gridColumn = "2";
  }else if(index === 0){
    img.style.gridRow = "1/3"
    img.style.gridColumn = "1"
  }

  // Agregar evento de clic para expandir la imagen a pantalla completa
});


  


  let botonagain = document.querySelector(".again");
  botonagain.onclick = regresoTop;

  function regresoTop() {
    window.scrollTo(0, 0);
  }
});
