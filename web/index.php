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
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
          <div class="starter-template">
        <h1>Calculator Con un cambio realizado. TODO OK MAS OK OK OK</h1>
    <p>Texto nuevo probando
          <?php
            $cal = new calculator();
            echo "Result: ".$cal->summe(2,3);
            echo "Result: ".$cal->summe(4,5);
          ?>
    </p>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
