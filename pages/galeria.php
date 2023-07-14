<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeria</title>
    <link rel="stylesheet" href="../resources/estilos/style.css" />
    <link rel="stylesheet" href="../resources/estilos/galeria.css" />
    <link rel="stylesheet" href="../resources/estilos/animaciones.css">
  </head>
  <body>

    <?php require('../components/menu2.html');
          require('../components/preloader.html')
    ?>
    <section class="galmap">
      <div class="txtmapa">
        <h1>Corredor<strong>En territorio</strong></h1>
        <div class="containgalery">
        <div class="galerym">

        </div>
      </div>
        <p>
          Puedes acceder a las imagenes haciendo click en el mapa a la comuna que desees
        </p>
      </div>
      <div class="centrarmapa">
        <span id="seb">
          <div class="modal" id="modseb">
            <h5>San Sebastian de Palmitas</h5>
            <img src="../imagenes/Lugares/SanSebastian.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
          </div>
          <img src="../imagenes/mapa/sansebastian.svg" alt="" />
        </span>
        <span id="cris">
          <div class="modal" id="modcris">
            <h5>San Cristobal</h5>
            <img src="../imagenes/Lugares/SanSebastian.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
          </div>
          <img src="../imagenes/mapa/sancristonal.svg" alt="" />
        </span>
        <span id="ant">
          <div class="modal" id="modant">
            <h5>San Antonio de Prado</h5>
            <img src="../imagenes/Lugares/SanAntonioPrado.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
          </div>
          <img src="../imagenes/mapa/sanantonio.svg" alt="" />
        </span>
        <span id="alt">
          <div class="modal" id="modalt">
            <h5>Altavista</h5>
            <img src="../imagenes/Lugares/SanAntonioPrado.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
          </div>
          <img src="../imagenes/mapa/altavista.svg" alt="" />
        </span>
        <span id="oct">
          <div class="modal" id="modoct">
            <h5>Doce de Octubre</h5>
            <img src="../imagenes/Lugares/doceOctubre.jpeg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
          </div>
          <img src="../imagenes/mapa/13octubre.svg" alt="" />
        </span>
        <span id="cas">
          <div class="modal" id="modcas">
            <h5>Castilla</h5>
            <img src="../imagenes/Lugares/Castilla.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
          </div>
          <img src="../imagenes/mapa/castilla.svg" alt="" />
        </span>
        <span id="rob">
          <div class="modal" id="modrob">
            <h5>Robledo</h5>
            <img src="../imagenes/Lugares/Robledo.jpeg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
          </div>
          <img src="../imagenes/mapa/robledo.svg" alt="" />
        </span>
        <span id="jav">
          <div class="modal" id="modjav">
            <h5>San Javier</h5>
            <img src="../imagenes/Lugares/sanJavier.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
          </div>
        <img src="../imagenes/mapa/sanjavier.svg" alt="" />
      </span>
      <span id="ame">
        <div class="modal" id="modame">
          <h5>La América</h5>
          <img src="../imagenes/Lugares/LaAmerica.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/america.svg" alt="" />
      </span>
      <span id="lau">
        <div class="modal" id="modlau">
          <h5>Laureles</h5>
          <img src="../imagenes/Lugares/Laureles.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img  src="../imagenes/mapa/laureles.svg" alt="" />
      </span>
      <span id="bel">
        <div class="modal" id="modbel">
          <h5>Bélen</h5>
          <img src="../imagenes/Lugares/Belen.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/belen.svg" alt="" />
      </span>
      <span id="gua">
        <div class="modal" id="modgua">
          <h5>Guayabal</h5>
          <img src="../imagenes/Lugares/Guayabal.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/guayabal.svg" alt="" />
      </span>
      <span id="rio">
        <img  src="../imagenes/mapa/riomed.svg" alt="" />
      </span>
      <span id="cruz">
        <div class="modal" id="modcruz">
          <h5>Santa Cruz</h5>
          <img src="../imagenes/Lugares/Santa-Cruz.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/sancruz.svg" alt="" />
      </span>
      <span id="pop">
        <div class="modal" id="modpop">
          <h5>Popular</h5>
          <img src="../imagenes/Lugares/Popular.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img  src="../imagenes/mapa/popular.svg" alt="" />
      </span>
      <span id="ara">
        <div class="modal" id="modara">
          <h5>Aranjuez</h5>
          <img src="../imagenes/Lugares/Aranjuez.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/aranjuez.svg" alt="" />
      </span>
      <span id="can">
        <div class="modal" id="modcan">
          <h5>La Candelaria</h5>
          <img src="../imagenes/Lugares/LaCandelaria.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/candelaria.svg" alt="" />
      </span>
      <span id="man">
        <div class="modal" id="modman">
          <h5>Manrique</h5>
          <img src="../imagenes/Lugares/Manrique.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/manrrique.svg" alt="" />
      </span>
      <span id="vil">
        <div class="modal" id="modvil">
          <h5>Villa Hermosa</h5>
          <img src="../imagenes/Lugares/VillaHermosa.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/villa.svg" alt="" />
      </span>
      <span id="bue">
        <div class="modal" id="modbue">
          <h5>Buenos aires</h5>
          <img src="../imagenes/Lugares/BuenosAires.webp" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/bue.svg" alt="" />
      </span>
      <span id="pob">
        <div class="modal" id="modpop">
          <h5>El poblado</h5>
          <img src="../imagenes/Lugares/El poblado.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/poblado.svg" alt="" />
      </span>
      <span id="ele">
        <div class="modal" id="modele">
          <h5>Santa Elena</h5>
          <img src="../imagenes/Lugares/SantaElena.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, earum adipisci cum illum qui totam.</p>
        </div>
        <img src="../imagenes/mapa/sanelena.svg" alt="" />
      </span>
      </div>
    </section>
    <div class="modalGalery">
      
    </div>

    <section class="gallery">
      <h1 id="titlegal"></h1>
      <div class="imagenesGal"></div>
    </section>

    <span class="again"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: msFilter"><path d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19zm9-12.243L19.092 17H4.908L12 6.757z"></path></svg></span>

    <script src="../resources/scripts/galeria2.js"></script>
    <script src="../resources/scripts/animaciones.js"></script>
  </body>
</html>
