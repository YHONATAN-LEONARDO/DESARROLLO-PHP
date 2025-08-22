<?php   // ini

$nombre = "Yhonata";
$edad = 0;
$ciudad = null;

// ---- isset ----
// true si existe y no null
var_dump(isset($nombre));   // true
var_dump(isset($ciudad));   // false

// ---- empty ----
// true si var vacía o 0
var_dump(empty($nombre));   // false
var_dump(empty($edad));     // true
var_dump(empty($ciudad));   // true
var_dump(empty($noDefinida)); // true

?>  // fin
