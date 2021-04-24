<?php
$arr = [
  1 => "Suarez",
  4 => "Pedro",
  6 => "Maria"
];

foreach ($arr as $clave => $valor) {
  printText($clave, $valor);
}

$x = 0;
while ($x <= 7) {
  $x++;
}
echo $x;

function  printText($numeroPosicion, $nombreJugador)
{
  echo "La camisera numero " . $numeroPosicion . " en el barcelona la lleva " . $nombreJugador . " <br>";
}
