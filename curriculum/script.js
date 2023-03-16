$(document).ready(function(){
    // Ocultar la imagen del currículum al inicio
    $('#imagen-cv').hide();
  
    // Mostrar la imagen del currículum cuando se hace clic en el botón "Mi Curriculum"
    $('#btn-imagen').click(function(){
      $('#imagen-cv').show();
    });
  
    // Ocultar la imagen del currículum cuando se hace clic en el overlay
    $('#imagen-cv-overlay').click(function(){
      $('#imagen-cv').hide();
    });
  });
  