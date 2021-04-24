<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style>
    .media {
      max-width: 50%;
      margin: 1rem auto;
    }
  </style>

  <title>Exercice 2</title>
</head>

<body>

  <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>

    <div class="container media">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        La persona se agrego correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>

  <?php endif; ?>

  <form action="capture.php" method="GET" name="form-data" class="media">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Edad</label>
      <input type="text" class="form-control" id="age" placeholder="Ingrese su edad" name="age">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <hr>

  <table class="table table-striped table-hover media">
    <thead>
      <tr>
        <th scope=" col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $conn = mysqli_connect('172.19.0.2', 'root', '123', 'curso_udemy') or die("No se ha podido conectar al servidor de Base de datos");

      $consulta = "SELECT id, name, age FROM people";

      if ($resultado = $conn->query($consulta)) {

        /* obtener el array de objetos */
        while ($fila = $resultado->fetch_row()) {
          echo '<tr>';
          echo '<th scope="row">' . $fila[0] . '</th>';
          echo '<td>' . $fila[1] . '</td>';
          echo '<td>' . $fila[2] . '</td>';
          echo '</tr>';
        }

        /* liberar el conjunto de resultados */
        $resultado->close();
      }
      ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>