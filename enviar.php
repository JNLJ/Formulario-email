<?php
   $destino = "481800833@alumnos.utzac.edu.mx"
   $nombres = $_POST["nombres"];
   $correo = $_POST["correo"];
   $telefono = $_POST["telefono"];
   $mensaje = $_POST["mensaje"];
   $contenido = "Nombres: " . $nombres . "/nCorreo: " . $correo . "/nTelefono: " . $telefono . "/nMensaje: " . $mensaje;
   email($destino, "Contacto", $contenido);
   header("Location:gracias.html");
?>