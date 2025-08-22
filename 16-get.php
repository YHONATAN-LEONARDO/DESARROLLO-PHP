<?php   // ini

// URL: pagina.php?nombre=Ana&edad=22
$nombre = $_GET["nombre"];  // dato URL
$edad   = $_GET["edad"];    // dato URL

echo "Hola $nombre, tienes $edad años.";


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user = $_POST["usuario"]; // del form
  $pass = $_POST["clave"];
  echo "Usuario: $user, Clave: $pass";
}


?>  // fin
