window.addEventListener('DOMContentLoaded', function() {
    var configForm = document.getElementById('config-form');
  
    // Obtener la preferencia almacenada en la cookie
    var storedTitular = getCookie('titular');
  
    // Si hay una preferencia almacenada, marcar la opción correspondiente
    if (storedTitular) {
      var radioInputs = configForm.elements.titular;
      for (var i = 0; i < radioInputs.length; i++) {
        if (radioInputs[i].value === storedTitular) {
          radioInputs[i].checked = true;
          break;
        }
      }
    }
  
    // Escuchar el evento de envío del formulario
    configForm.addEventListener('submit', function(e) {
      e.preventDefault();
  
      // Obtener el valor seleccionado del titular
      var selectedTitular = configForm.elements.titular.value;
  
      // Guardar la preferencia en la cookie
      setCookie('titular', selectedTitular, 30); // Expire en 30 días
  
      // Redireccionar a la página del periódico
      window.location.href = 'periodico2.php';
    });
  });
  
  // Función para obtener el valor de una cookie
  function getCookie(name) {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i].trim();
      if (cookie.indexOf(name + '=') === 0) {
        return cookie.substring(name.length + 1);
      }
    }
    return '';
  }
  
  // Función para establecer el valor de una cookie
  function setCookie(name, value, days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    var expires = 'expires=' + date.toUTCString();
    document.cookie = name + '=' + value + '; ' + expires + '; path=/';
  }
  
