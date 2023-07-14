let manto = document.querySelector('.manto');
function abrirmanto(){
  manto.style.display = "flex";
}  

setTimeout(abrirmanto, 1100)
  manto.onclick = cerrar; 
    // Agregar evento de tecla
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        cerrar();
      }
    });
  
    function cerrar() {
      manto.style.display = "none";
    }

    
      // Establecer la fecha objetivo (24 de diciembre de 2023)
      var targetDate = new Date("octubre 29, 2023").getTime();
    
      // Actualizar la cuenta regresiva cada segundo
      var countdownInterval = setInterval(function () {
        // Obtener la fecha y hora actual
        var now = new Date().getTime();
    
        // Calcular la diferencia entre la fecha objetivo y la fecha actual
        var distance = targetDate - now;
    
        // Calcular los días, horas, minutos y segundos restantes
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
        // Mostrar el resultado en los dígitos
        animateDigit("days", days);
        animateDigit("hours", hours);
        animateDigit("minutes", minutes);
        animateDigit("seconds", seconds);
    
        // Si se alcanza la fecha objetivo, detener la cuenta regresiva
        if (distance < 0) {
          clearInterval(countdownInterval);
        }
      }, 1000);
    
      // Función auxiliar para formatear los números de los dígitos como "00"
      function formatTime(time) {
        return time < 10 ? "0" + time : time;
      }
    
      // Función auxiliar para animar un dígito cuando cambia
      function animateDigit(digitId, newValue) {
        var digitElement = document.getElementById(digitId);
        var currentValue = parseInt(digitElement.innerHTML);
    
        if (currentValue !== newValue) {
          digitElement.style.animation = "none";
          void digitElement.offsetWidth; // Reiniciar la animación
          digitElement.style.animation = "slideIn 0.5s forwards";
        }
    
        digitElement.innerHTML = formatTime(newValue);
      }