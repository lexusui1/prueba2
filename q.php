<?php
   $destino= "modaurbanaprogra@gmail.com";
   $nombre = $_POST["nombre"];
   $apellidos = $_POST["apellidos"];
   $correo = $_POST["correo"];
   $telefono = $_POST["telefono"];
   $asunto = $_POST["asunto"]
   $mensaje = $_POST["mensaje"];
   $contenido = "Nombre: " . $nombre . "\nApellidos: " . $apellidos . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
   mail($destino,"Contacto", $contenido);
   header("location:recibido.html");
?>