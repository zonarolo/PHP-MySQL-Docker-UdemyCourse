<!-- Ejercicio usando foreach, condiiones y arreglos.

En este ejercicio usaremos la estructura de control FOR. Debes:

1. Crear nu arreglo llamado barcelona, que contenga dos claves y dos valores:

- La primera clave se debera llamar 'titulares', y el valor de esta clave sera un arreglo con 3 o mas jugadores titulares del barcelona. De esta forma, el jugador 10 (clave) y Messi (valor) seria un elemento del arreglo 'titulares'.

- La segunda clave se debera llamar 'suplentes', y el valor de esta clave sera un arreglo con 3 o 4 jugadores suplentes del barcelona. De esta forma, el jugador 8 (clave) y Arthur (valor) sera un elemento del arreglo 'suplentes'.

2. Recorrer el ciclo.

3. Guardar en otro arreglo (variable llamada nuevosJugadores) todos aquellos jugadores tanto suplentes como titulares que tengan en su camisera un numero par.

4. Ordenar el arreglo por nombre del jugador (esto es decir, por orden alfabetico sobre el nombre del jugador).

 -->

<?php

//Declarar arreglo en la variable $barcelona

$barcelona = [
  "titulares" => [
    10 => "Messi",
    5 => "Suearez",
    2 => "Juan",
  ],
  "suplentes" => [
    4 => "Pepa",
    7 => "Jose",
    9 => "Ramon",
  ],

];

//Crear nuevo arreglo vacío, para poder llenarlo en el ciclo, con los jugadores de número PAR.
$nuevosJugadores = [];

//Recorrer el arreglo barcelona (los titulares, y los suplentes) y guardar en el arreglo vacío aquellos jugadores que tengan en su camiseta un numero PAR
foreach ($barcelona as $v1) {
  foreach ($v1 as $clave => $valor) {
    if ($clave % 2 == 0) {
      //$nuevosJugadores[$clave] = $valor;
      array_push($nuevosJugadores, $valor);
    }
    printText($clave, $valor);
  }
}
sort($nuevosJugadores);
echo json_encode($nuevosJugadores);
function  printText($numeroPosicion, $nombreJugador)
{
  echo "La camisera numero " . $numeroPosicion . " en el barcelona la lleva " . $nombreJugador . " <br>";
}
//Ordenar el nuevo arreglo (nuevosJugadores) por nombre del jugador.


//Leer más en https://www.w3schools.com/php/php_arrays_sort.asp

//Imprimir en pantalla esos jugadores