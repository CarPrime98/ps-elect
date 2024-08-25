 // Obtener todos los botones con la clase "accordion"
 var accordions = document.getElementsByClassName("accordion");

 // Agregar un evento click a cada botón
 for (var i = 0; i < accordions.length; i++) {
     accordions[i].addEventListener("click", function() {
         // Alternar la clase "active" en el botón
         this.classList.toggle("active");

         // Obtener el panel siguiente al botón
         var panel = this.nextElementSibling;

         // Alternar el panel entre mostrar y ocultar
         if (panel.style.display === "block") {
             panel.style.display = "none";
         } else {
             panel.style.display = "block";
         }
     });
 }