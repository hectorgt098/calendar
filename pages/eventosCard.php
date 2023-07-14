    <section class="eventsCard">
        <h2>Ultimos Eventos</h2>
        <div class="cent">
        <div class="Content">
          <span>
          <img class="eventButton" src="../imagenes/iconos/bx-chevrons-left.svg" alt="Flecha izquierda">
          </span>
        <div class="eventcards">
        <?php
require("bd.php");
$conexion = regresarConexion();

$datos = mysqli_query($conexion, "SELECT id, titulo, Inicio, descripcion, fin, colortexto, colorfondo, ubicacion, lugar, imagen 
    FROM eventos 
    ORDER BY Inicio DESC 
    LIMIT 15");
$ep = mysqli_fetch_all($datos, MYSQLI_ASSOC);

foreach($ep as $fila) {
    ?>
    <div class="cardim">
        <a href="#" class="enlace_cal">
        <img class="imgEvent" src="<?php $path = "./destino/"; echo $path.$fila['imagen'];?>" alt="Imagen del evento">
        </a>
    <div class='eventcard' 
        style='color:#000; margin:0 0 0 -10px; background:#f6f6f6; border-radius:3px;'>
        <article>
        <a href="./pages/eventos.php"><h3><?php echo $fila['titulo']; ?></h3></a>
        <div>
        <p><?php echo $fila['descripcion']; ?></p>
            
        </div>
        <div>
        <div style="display:flex; flex-direction:row; gap:5px">
            <img src="../imagenes/iconos/bxs-calendar-event.svg" alt="calendario" style="width:20px;">
            <label>Inicio:</label>
            <span><?php
            $fechaHora = $fila['Inicio'];
            $fecha = substr($fechaHora,0,10);
            echo $fecha; ?></span><img src="../imagenes/iconos/bxs-timer.svg" alt="hora"><span><?php $fechaHora = $fila['Inicio']; $hora = substr($fechaHora, 11); echo $hora?></span>
            </div>
        </div>
        <div style="display:flex; flex-direction:row; gap:5px;">
            <img src="../imagenes/iconos/bxs-calendar-heart.svg" style="width:20px;" alt="calendario">
            <label>Fin:</label>
            <span><?php $fechaHora = $fila['fin']; $fecha = substr($fechaHora,0,10); echo $fecha;?></span><img src="../imagenes/iconos/bx-timer.svg" alt=""> <span><?php $fechaHora = $fila['fin']; $hora = substr($fechaHora,11); echo $hora?></span>
        </div>     
        <div style="display:flex; flex-direction:column;">
            <a class="ubicationEvent" href="<?php echo $fila['ubicacion']; ?>" target="_blank" style="color:#00000a90;"><img src="imagenes/iconos/bxs-map.svg" alt="no"><?php echo $fila['lugar'] ?></a>
        </div>  
        <a href="pages/eventos.php" style="background:var(--main-bg-color); font-weight:800; font-family:'Galano', sans-serif; color:#fff; padding:8px 30px; margin:0; font-size:15px; border-radius:4px;">Ir al Calendario<a>
        </article>
    </div>
    </div>
    <?php
}
?>
<div class="counterState">
        <button id="anterior"><img src="../imagenes/iconos/bx-chevrons-left.svg" alt="flecha izquierda"></button>
        <div id="contador">
            <span id="actual"></span>
            <strong>/</strong>
            <span id="total"></span>
        </div>
        <button id="siguiente"><img src="../imagenes/iconos/bx-right-arrow-alt.svg" alt="Flecha derecha"></button>
        </div>
        </div>
        <img class="eventButton" src="../imagenes/iconos/bx-right-arrow-alt.svg" alt="flecha derecha">
        </div>
        </div>
    </section>
    <script src="resources/scripts/main.js"></script>

    <script>

        let tarjetas = document.querySelectorAll('.cardim');
        let anterior = document.getElementById('anterior');
        let siguiente = document.getElementById('siguiente');
        let total = document.getElementById('total');
        let actual = document.getElementById('actual');
        let botones = document.querySelectorAll('.eventButton')
        botones[0].addEventListener('click', izquierda)
        botones[1].addEventListener('click', derecha)

        function izquierda(){
          previousCard();
        }
        function derecha(){
          nextCard();
        }

        actual.innerText = 1;
        total.innerText = tarjetas.length;
        console.log(tarjetas.length)
        anterior.onclick = previousCard
        siguiente.onclick = nextCard

        function limpiarAnimaciones(){
            tarjetas.forEach(element =>{
                element.style.animation = "";
            })
        };



        for (let i = 0; i < tarjetas.length; i++) {
          if (i === 0) {
            tarjetas[i].style.display = 'flex';
          } else {
            tarjetas[i].style.display = 'none';
          }
        }
        function nextCard() {
          limpiarAnimaciones()
          let currentIndex = -1;
          actual.innerText = 1
          for (let i = 0; i < tarjetas.length; i++) {
            
            if (tarjetas[i].style.display === 'flex') {
              currentIndex = i;
              console.log(currentIndex);
              break;
            }
          }
      
          if (currentIndex !== -1) {
            tarjetas[currentIndex].style.display = 'none';
            let nextIndex = (currentIndex + 1) % tarjetas.length;
            tarjetas[nextIndex].style.display = 'flex';
            tarjetas[nextIndex].style.animation = "slideLeftNew .6s ease"
            actual.innerText = nextIndex+1;
          }
        }

        function previousCard() {
            limpiarAnimaciones()
          let currentIndex = getCurrentIndex();        
          if (currentIndex !== -1) {
            tarjetas[currentIndex].style.display = 'none';
            let previousIndex = (currentIndex - 1 + tarjetas.length) % tarjetas.length;
            tarjetas[previousIndex].style.display = 'flex';
            tarjetas[previousIndex].style.animation = "slideRightNew .6s ease"
            actual.innerText = previousIndex + 1;
          }
        }

        function getCurrentIndex() {
          for (let i = 0; i < tarjetas.length; i++) {
            if (tarjetas[i].style.display === 'flex') {
              return i;
            }
          }
          return -1;
        }


    </script>
