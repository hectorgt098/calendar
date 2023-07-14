
<style>
    /* section {
    transition: all 1s ease;
    opacity: 1;
    height: 100vh;
    scroll-snap-align: start;
    } */
    .foot {
    display: flex;
    width: 100%;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    min-height: calc(100vh - 60px);
    gap: 20px;
}
.mensajeInfo {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 40%;
    padding-left: 50px;
    color: #fff;
    font-family: "GalanLight", sans-serif;
}
.mensajeInfo h3 {
    margin: 0;
    color: var(--main-bg-color);
    font-size: 2rem;
    font-family: "GalanItalic";
    font-weight: 300;
}
.mensajeInfo h2 {
    color: #00000abf;
    font-size: clamp(14px, 5vw, 18px);
    font-family: "GalanLight";
    font-weight: 600;
    max-width: 70%;
    min-width: 50%;
    margin: 5px 0 10px 0;
}
.mensajeInfo span {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px;
    color: #00000abf;
    font-weight: 600;
}
.mensajeInfo img {
    width: 30px;
}
#voluntform {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 40%;
    animation: entradaform 0.8s ease;
    background:#fff;
    padding: 20px 30px 30px 30px;
    border-radius: 5px;
    box-shadow: -3px 3px 5px #00000a40;
}
#voluntform h2 {
    font-family: "GalanBold";
    color: var(--main-bg-color);
    font-size: 2rem;
    text-align: center;
    font-weight: 400;
    margin: 0;
}
#voluntform p {
    color: var(--main-bg-color);
    font-size: 14px;
}
#voluntform input {
    height: 40px;
    padding: 0 10px;
    background: #fff;
    border-radius: 4px;
    color: #000;
    font-size: 17px;
}
#voluntform select {
    background: transparent;
    color: #00000a80;
    background: #f6f6f6;
    padding: 10px;
}
#voluntform select option {
    color: #000;
}

#voluntform textarea{
  border:1px solid var(--main-bg-color);
  padding:10px;
  border-radius:4px;
  font-family:'Galano', sans-serif;
}
#btnenvio {
    width: 200px;
    align-self: center;
    background: var(--main-bg-color-1) !important;
    color: #000 !important;
    border: none !important;
    font-size: 17px;
    transition: all 0.3s;
    cursor: pointer;
}
#voluntform input, select {
    border: 1px solid var(--main-bg-color);
}
.copy {
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--main-bg-color);
    color: #f6f6f6;
    font-family: "GalanLight", sans-serif;
    font-weight: 400;
    height: 60px;
}
</style>
<section class="footeri">
  <footer class="foot">
    <div class="mensajeInfo">
      <h3>Contacto</h3>
      <h2>
        ¿Tienes alguna pregunta o duda?
        <br />
        ¡Estamos aquí para ayudarte! No dudes en comunicarte con nosotros.
      </h2>
      <span>
        <img src="imagenes/iconos/bxs-phone.svg" alt="Icono de celular" />
        <p>3007866411</p>
      </span>
      <span>
        <img src="imagenes/iconos/bxs-envelope.svg" alt="Icono de correo" />
        <p>info@albertcorredor.com</p>
      </span>
    </div>
    <form
      id="voluntform"
      name="voluntform"
      method="POST" >
      <h2>Contacta al team Corredor</h2>
      <p>
        Recibirás un correo electrónico o una llamada telefónica con
        instrucciones detalladas.
      </p>
      <input type="text" name="nombre" placeholder="Nombre" />
      <div style="display: flex; flex-direction: row; width: 100%; gap: 10px">
        <input
          style="width: 50%"
          type="number"
          name="celular"
          placeholder="Celular"
        />
        <input
          style="width: 50%"
          type="email"
          name="correo"
          placeholder="Correo"
        />
      </div>
      <textarea name="" id="" cols="30" rows="5" placeholder="Escribenos tu mensaje"></textarea>
      <input id="btnenvio" type="submit" value="Enviar" />
    </form>
  </footer>
  <div class="copy">
    <p>Copyright &copy;2023 Albert Corredor</p>
  </div>
</section>
<script src="../resources/scripts/team.js"></script>