<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
include $base_dir.'src'.$ds.'calculator.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Calculator</title>

    <!-- Bootstrap -->
    <link href="./web/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
          <div class="starter-template">

        <h1>MY CALCULADORA   OEs un cambio par atemas de deploy</h1>
    <p>CALCULADORA funcionando <br><br>
          <?php
            $cal = new calculator();
            echo " 2 + 3 = ".$cal->summe(2,3);
            echo " <br> 4 + 5 = ".$cal->summe(4,5);
          ?>


<?php

$mysqli = new mysqli("192.168.99.100", "root", "pass", "prueba");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


echo "<br>".$mysqli->host_info . "\n";


$sql = "SELECT * FROM personas  ";
if (!$resultado = $mysqli->query($sql)) {
    // ¡Oh, no! La consulta falló.
    echo "Lo sentimos, este sitio web está experimentando problemas.";

    // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    // cómo obtener información del error
    echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}


echo "<ul>\n";
while ($persona = $resultado->fetch_assoc()) {
    echo "<li>";
    echo $persona['id'] . ' ' . $persona['name'];
    echo "</li>\n";
}
echo "</ul>\n";

$resultado->free();
$mysqli->close();
?>



    </p>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./web/js/bootstrap.min.js"></script>
  </body>
</html>
