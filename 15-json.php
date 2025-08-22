<?php   // ini

// ---- Array asociativo ----
$persona = [
  "nombre" => "Yhonatan",
  "edad" => 22,
  "pais" => "Bolivia"
];

// ---- Convertir a JSON ----
$json = json_encode($persona);
echo $json;   // {"nombre":"Yhonatan","edad":22,"pais":"Bolivia"}

// ---- Convertir JSON a obj ----
$obj = json_decode($json);
echo $obj->nombre;   // Ana

// ---- Convertir JSON a array ----
$arr = json_decode($json, true);
echo $arr["pais"];   // Bolivia

?>  // fin
