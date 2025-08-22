<?php   // ini

// ---- Aritméticos ----
echo 1 + 2;    // suma
echo 5 - 3;    // resta
echo 4 * 2;    // mult
echo 10 / 2;   // divi
echo 10 % 3;   // resto
echo 2 ** 3;   // poten

// ---- Asignación ----
$x = 5;        // igual
$x += 2;       // suma y asigna
$x -= 1;       // resta y asigna
$x *= 3;       // mult y asigna
$x /= 2;       // divi y asigna

// ---- Comparación ----
var_dump(5 == "5");   // igual
var_dump(5 === "5");  // idéntico
var_dump(5 != 4);     // distinto
var_dump(5 > 3);      // mayor
var_dump(5 < 8);      // menor
var_dump(5 >= 5);     // mayor o igual
var_dump(4 <= 6);     // menor o igual

// ---- Lógicos ----
var_dump(true && false); // y
var_dump(true || false); // o
var_dump(!true);         // no

// ---- Incremento/Decremento ----
$y = 5;
echo ++$y;    // pre-inc
echo $y++;    // post-inc
echo --$y;    // pre-dec
echo $y--;    // post-dec

?>  // fin
