<?php   // ini

$txt = "Hola Mundo";

// ---- Funciones de string ----
echo strlen($txt);       // largo
echo str_word_count($txt); // contar palabras
echo strrev($txt);       // invertir
echo strpos($txt, "M");  // pos letra
echo str_replace("Mundo","PHP",$txt); // reemplazo
echo strtoupper($txt);   // mayúsculas
echo strtolower($txt);   // minúsculas
echo ucfirst("php");     // primera mayús
echo ucwords("hola mundo"); // mayús cada palabra
echo trim("  hola ");   // quitar espacios
echo substr($txt,0,4);  // subcadena

?>  // fin
