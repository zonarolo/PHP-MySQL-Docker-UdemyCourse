<?php
$name = $_GET['name'];
$age = $_GET['age'];

if (strlen($name) > 0 && $age > 0) {

  $ip = "172.19.0.2";
  $username = "root";
  $password = "123";
  $db = "curso_udemy";

  $conn = mysqli_connect($ip, $username, $password, $db) or die("No se ha podido conectar al servidor de Base de datos");

  $sql = "INSERT INTO people (name, age) VALUES ('$name','$age')";

  if (mysqli_query($conn, $sql)) {
    header('Location: exercice2.php?success=1');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
} else {

  echo "Es incorrecto, vuelva atras y modifique los datos.";
}
