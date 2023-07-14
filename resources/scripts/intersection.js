function handleIntersection(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const section = entry.target;
      // Realizar acciones específicas para cada sección
      if (section.classList.contains("hero")) {
        section.childNodes[1].style.animation = "spaceInDown .6s ease";
        section.childNodes[3].style.animation = "spaceInRight .5s ease";

      } else if (section.classList.contains("volun")) {
        var gridtxt = document.querySelector('.gridtxt');
        let contenido = section.childNodes;
        contenido[3].style.animation = "spaceInDown .8s ease";
        contenido[5].style.animation = "slideDownReturn .8s ease";
      } else if (section.classList.contains("trayect")) {
        var gridc = section.querySelectorAll(".grid-his");
        var cuadros = section.querySelectorAll(".grid-his article");
        if (cont == 0) {
          const dedo = document.createElement("img");
          dedo.src = "../imagenes/iconos/bxs-hand-up.svg";
          dedo.width = "60px";
          dedo.className = "dedo";
          section.appendChild(dedo);
        }
        cont++;
        gridc.forEach(function (element) {
          element.style.animation = ""; // Restablecer la animación
        });

        const observer = new IntersectionObserver(handleArticleIntersection, {
          root: section,
          rootMargin: "0px",
          threshold: 1.0, // Artículo completamente visible dentro de la sección
        });

        cuadros.forEach((article) => {
          observer.observe(article);
        });
      } else if (section.classList.contains("events")) {
        let contenid = section.childNodes;
        let event = contenid[1].childNodes;
        let ev = contenid[3].childNodes;
        let prr = Array.from(ev[1].children); // Obtener los elementos hijos de ev[1]

        prr.forEach((element) => {
          element.style.animation = "tracking-in-contract .8s ease";
        });
        event[1].style.animation = "shadow-drop-bottom-left .7s linear forwards";
      } else if (section.classList.contains("galeria")) {
        let contenedor = section.childNodes;
        let contxt = contenedor[3].childNodes;
        let arr = Array.from(contxt[1].children);
        arr.forEach((element) => {
          element.style.animation = "tracking-in-expand-forward-top .8s ease";
        });
      } else if (section.classList.contains("feeds")) {
        let contenedor = section.childNodes;
        let contain = contenedor[3].children;
        contain[0].style.animation = "spaceInLeft .7s ease";
        contain[4].style.animation = "spaceInDown .7s ease";
        contain[6].style.animation = "spaceInRight .7s ease";
      } else if (section.classList.contains("footeri")) {
        let contenedor = section.childNodes;
        let contain = contenedor[1].childNodes;
        contain[3].style.animation = "scaleup .5s ease-in";
        console.log(contain);
      } else if (section.classList.contains("eventsCard")) {
        contenedor = section.childNodes;
        contenedor[3].style.animation = "spaceInDown .7s ease";
      }
    }
  });
}

// Función de callback para el Intersection Observer de los artículos
function handleArticleIntersection(entries) {
  entries.forEach((entry) => {
    const article = entry.target;
    if (entry.isIntersecting) {
      article.style.transition = "opacity 0.5s";
      article.style.opacity = "1";
    } else {
      article.style.transition = "none";
      article.style.opacity = "0";
    }
  });
}

// Crear una instancia del Intersection Observer
const observer = new IntersectionObserver(handleIntersection, {
  root: null, // Observar el viewport
  rootMargin: "0px",
  threshold: 0.1, // Sección visible al menos en un 10%
});

// Obtener todas las secciones
const sections = document.querySelectorAll("section");

// Observar cada sección
sections.forEach((section) => {
  observer.observe(section);
});

// Resto del código...
