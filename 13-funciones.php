<?php   // ini

// ---- Función simple ----
function saludar(){
  echo "Hola Mundo<br>"; // msg
}
saludar();   // llamar

// ---- Con parámetros ----
function sumar($a, $b){
  return $a + $b;       // suma
}
echo sumar(3, 4);       // 7

// ---- Con valor por defecto ----
function saludo($nom="Invitado"){
  echo "Hola $nom<br>"; // texto
}
saludo("Ana");          // Hola Ana
saludo();               // Hola Invitado

// ---- Con retorno ----
function cuadrado($n){
  return $n * $n;       // res
}
echo cuadrado(5);       // 25

// ---- Función con array ----
function listar($arr){
  foreach($arr as $v){
    echo "$v <br>";     // elem
  }
}
$frutas = ["manzana","pera","uva"];
listar($frutas);

?>  // fin
