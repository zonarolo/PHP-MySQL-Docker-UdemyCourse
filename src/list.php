<?php

$conn = mysqli_connect('172.19.0.2', 'root', '123', 'curso_udemy') or die("No se ha podido conectar al servidor de Base de datos");

$consulta = "SELECT name, age FROM people";

if ($resultado = $conn->query($consulta)) {

  /* obtener el array de objetos */
  while ($fila = $resultado->fetch_row()) {
    echo 'Nombre: ' . $fila[0] . ' - Edad: ' . $fila[1] . '<br>';
  }

  /* liberar el conjunto de resultados */
  $resultado->close();
}
