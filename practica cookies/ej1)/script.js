window.addEventListener('DOMContentLoaded', function() {
    // Obtener el elemento select y el link del estilo
    var styleSelect = document.getElementById('style-select');
    var styleLink = document.getElementById('style-link');
  
    // Obtener el estilo almacenado en localStorage
    var storedStyle = localStorage.getItem('selectedStyle');
  
    // Si hay un estilo almacenado, aplicarlo
    if (storedStyle) {
      styleSelect.value = storedStyle;
      styleLink.href = storedStyle;
    }
  
    // Escuchar el evento de envío del formulario
    document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Obtener el valor seleccionado del select
      var selectedStyle = styleSelect.value;
  
      // Guardar el estilo seleccionado en localStorage
      localStorage.setItem('selectedStyle', selectedStyle);
  
      // Aplicar el estilo seleccionado
      styleLink.href = selectedStyle;
    });
  });
