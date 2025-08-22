<?php   // ini

$nums = [3, 1, 4, 1, 5];
$frutas = ["manzana", "pera", "uva"];

// ---- Conteo ----
echo count($nums);        // total elem

// ---- Ordenar ----
sort($nums);              // asc
rsort($nums);             // desc

// ---- Agregar/Quitar ----
array_push($frutas, "kiwi"); // agregar
array_pop($frutas);          // quitar último
array_shift($frutas);        // quitar primero
array_unshift($frutas,"mango"); // agregar inicio

// ---- Buscar ----
echo in_array("pera",$frutas);   // existe?
echo array_search("uva",$frutas); // pos clave

// ---- Mezclar/Invertir ----
shuffle($nums);            // aleatorio
$rev = array_reverse($nums); // invertir

// ---- Claves y valores ----
$persona = ["nombre"=>"Ana","edad"=>20];
print_r(array_keys($persona));   // claves
print_r(array_values($persona)); // valores

?>  // fin
