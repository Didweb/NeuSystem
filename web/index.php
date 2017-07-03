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

        <h1>MY CALCULADORA </h1>
    <p>CALCULADORA funcionando <br><br>
          <?php
            $cal = new calculator();
            echo " 2 + 3 = ".$cal->summe(2,3);
            echo " <br> 4 + 5 = ".$cal->summe(4,5);
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
