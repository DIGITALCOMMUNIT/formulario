var colores = ["#d2f2ef", "#55757a"];
var indice = 0;

function cambiarColor() {
    document.querySelector("body").style.backgroundColor = colores[indice];
    if (indice == 0) {
        document.querySelector(".mi-icono").src = "icon dia.png";
        indice++;
    } else {
        document.querySelector(".mi-icono").src = "icon noche.png";
        indice--;
    }
}

document.getElementById("survey-form").addEventListener("submit", function(event) {
  event.preventDefault();
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var experience = document.getElementById("experience").value;
  var foodQuality = document.getElementById("food-quality").value;
  var service = document.getElementById("service").value  ;
  var atmosphere = document.getElementById("atmosphere").value;
  var recommendation = document.querySelector('input[name="recommendation"]:checked').value;
  var comments = document.getElementById("comments").value;
  
  Email.send({
  SecureToken: "ec2346f8-bf0a-402a-ac65-f1c0f3a25b17",
  To: "ai.bryan.auto@gmail.com",
  From: "ai.bryan.auto@gmail.com",
  Subject: "Encuesta de Restaurante",
  Body: "Nombre: " + name + "<br>Correo Electrónico: " + email + "<br>Experiencia General: " + experience + "<br>Calidad de la Comida: " + foodQuality + "<br>Servicio: " + service + "<br>Ambiente: " + atmosphere + "<br>¿Recomendaría nuestro restaurante a otros?: " + recommendation + "<br>Comentarios Adicionales: " + comments
  }).then(
  message => alert("¡Gracias por completar la encuesta!")
  );
  });
