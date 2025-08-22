<?php   // ini

// ---- Array asociativo ----
$persona = [
  "nombre" => "Yhonata",
  "edad" => 21,
  "pais" => "Bolivia"
];

// ---- Acceso ----
echo $persona["nombre"];  // clave
echo $persona["edad"];    // clave
echo $persona["pais"];    // clave

// ---- Recorrer con foreach ----
foreach($persona as $key => $val){
  echo "$key : $val <br>";
}

?>  // fin
