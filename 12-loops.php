<?php   // ini

// ---- for ----
for($i=1; $i<=5; $i++){
  echo "Num: $i <br>";  // ciclo
}

// ---- while ----
$x = 1;
while($x <= 3){
  echo "While $x <br>"; // repite
  $x++;
}

// ---- do while ----
$y = 1;
do {
  echo "Do $y <br>";    // ejecuta
  $y++;
} while($y <= 3);

// ---- foreach con array ----
$frutas = ["manzana","pera","uva"];
foreach($frutas as $f){
  echo "$f <br>";       // valor
}

// ---- foreach clave=>valor ----
$persona = ["nombre"=>"Ana","edad"=>20];
foreach($persona as $k=>$v){
  echo "$k : $v <br>";  // par
}

?>  // fin
