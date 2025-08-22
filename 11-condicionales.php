<?php   // ini

$edad = 18;

// ---- if ----
if($edad >= 18){
  echo "Mayor";   // condición
}

// ---- if else ----
if($edad >= 18){
  echo "Mayor";   // verdadero
} else {
  echo "Menor";   // falso
}

// ---- if elseif ----
if($edad < 12){
  echo "Niño";    // caso 1
} elseif($edad < 18){
  echo "Adolescente"; // caso 2
} else {
  echo "Adulto";  // caso 3
}

// ---- switch ----
$dia = "lunes";
switch($dia){
  case "lunes":
    echo "Inicio";  // caso 1
    break;
  case "viernes":
    echo "Casi finde"; // caso 2
    break;
  case "domingo":
    echo "Descanso"; // caso 3
    break;
  default:
    echo "Otro día"; // otro
}

?>  // fin
