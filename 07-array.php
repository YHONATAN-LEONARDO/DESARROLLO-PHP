<?php   // ini

// ---- Array indexado ----
$carrito = [1, 23, 34, 4];
echo $carrito[0];   // pos 0

// ---- Array asociativo ----
$persona = [
  "nombre" => "Yhonata",
  "edad" => 21,
  "pais" => "Bolivia"
];
echo $persona["nombre"]; // clave

// ---- Array multidimensional ----
$alumnos = [
  ["Ana", 20],
  ["Luis", 22],
  ["Maria", 19]
];
echo $alumnos[1][0]; // Luis

// ---- Funciones comunes ----
echo count($carrito);     // total
array_push($carrito, 99); // agregar
array_pop($carrito);      // quitar último
sort($carrito);           // ordenar asc
rsort($carrito);          // ordenar desc

?>  // fin
