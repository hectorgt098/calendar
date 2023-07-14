<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../resources/estilos/style.css" />
    <link rel="stylesheet" href="../resources/estilos/animaciones.css" />
    <link rel="stylesheet" href="../resources/estilos/campaña.css" />
    <title>Campaña</title>
  </head>
  <body>
    <?php require('../components/menu2.html');
          require('../components/preloader.html');
    ?>
    <section class="adn">
      <div class="adnbann">
        <span class="imgfondo">
          <img src="../imagenes/iconos/uno.webp" alt="" />
        </span>
        <h2>Nuestra forma de pensar las oportunidades para Medellín</h2>
        <span></span>
        <h3>Nuestro ADN / RPI</h3>
      </div>
      <section class="potimp">
        <div class="tabla1">
          <article id="t1">
            <span class="imgfondo">
              <img src="../imagenes/svg/restaurar.svg" alt="" />
            </span>
            <h3>Restaurar</h3>
            <p id="p1">
              Medellín es la casa de todos y todas: Es hora de restaurar nuestra
              casa. Medellín es una ciudad en la que todas y todos tienen las
              mismas oportunidades de desarrollar nuestros proyectos de vida.
            </p>
          </article>
          <article id="t2">
            <span class="imgfondo">
              <img src="../imagenes/svg/potenciar.svg" alt="" />
            </span>
            <h3>Potenciar</h3>
            <p>
              Construir sobre lo construido: Medellín tiene bases solidas; es
              hora de potenciar la infraestructura y las capacidades productivas
              que hoy nos hacen referentes en Colombia y la región.
            </p>
          </article>
          <article id="t3">
            <span class="imgfondo">
              <img src="../imagenes/svg/impulsar.svg" alt="" />
            </span>
            <h3>Impulsar</h3>
            <p>
              + Medellín + Empresa + Empleo: Crear los ecosistemas industriales
              y tecnológicos que impulsarán la Medellín Industrial, segura e
              innovadora.
            </p>
          </article>
        </div>
      </section>
      <section class="decal">
        <div class="adnbann">
          <img src="../imagenes/iconos/dos.webp" alt="" />
          <h2>Lo que somos; lo que seremos; y siempre representaremos</h2>
          <span></span>
          <h3>Nuestra marca</h3>
        </div>
        <div class="deca">
          <h2>Decálogo de Marca</h2>
          <h3>(Quién)</h3>
        </div>
        <div class="puntos">
          <p>
            <img src="../imagenes/Fotos/img4.webp" alt="" />
            Empresario paisa que ha construido su vida profesional y familiar en
            Medellín; por esto nuestra propuesta esta en los barrios y con la
            gente.
          </p>
          <p>
            <img src="../imagenes/Fotos/img5.webp" alt="" />
            Los ciudadanos de Medellín cuentan con mi experiencia en el sector
            privado y en educación para construir un mejor presente.
          </p>
          <p>
            <img src="../imagenes/Fotos/img6.webp" alt="" />
            Medellín lo es todo y es nuestro fin; para nosotros no es un
            trampolín político.
          </p>
          <p>
            <img src="../imagenes/Fotos/img7.webp" alt="" />
            Tenemos un proyecto de ciudad ambicioso para el presente y el futuro
            de la ciudad: Medellín capital empresarial y tecnológica de
            Colombia.
          </p>
          <p>
            <img src="../imagenes/Fotos/img8.webp" alt="" />
            Nuestra forma de hacer política consiste en plantear argumentos,
            ideas y propuestas; cero corrupción, mentiras y política tóxica.
          </p>
        </div>
      </section>
    </section>  
    <script>
      let t1 = document.querySelector(".tabla1").children;
      let elem = Array.from(t1);

      elem.forEach(function (element, index) {
        setTimeout(function () {
          element.style.animation = "spaceInRight 1s ease forwards";
        }, index * 500 + 1000);
      });
    </script>
  </body>
</html>
